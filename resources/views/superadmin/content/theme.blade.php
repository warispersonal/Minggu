@extends('layouts.app')

@push('style')

@endpush

@section('content')
<div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Menu</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Manage Theme</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Change Website Theme</h3>
                </div>
                <div class="card-body">
                    <!--<button type="button" class="btn btn-primary disabled mb-3">
                        <span>Change Background Images</span>
                    </button>-->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="blackblock">
                                    <div class="css-mb with-glare">
                                        <div class="mb-display-position">
                                            <div class="mb-display">
                                                <div class="mb-screen-position">
                                                    <div class="mb-screen">
                                                        <i class="fa fa-pen fa-2x edit-icon position-absolute text-white"
                                                            data-file="#desktop-image"></i>

                                                        <img class="desktop-image"
                                                            src="{{ asset('uploads') }}/{{ $data['desktopImage'] }}"
                                                            alt="Desktop View Image" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-body"></div>
                                        <div class="mb-bottom-cover"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="blackblock">
                                    <div class="iphone-container">
                                        <div class="css-iphone with-glare">
                                            <div class="iphone-body">
                                                <div class="iphone-screen-position">
                                                    <div class="iphone-home-button"></div>
                                                    <div class="iphone-screen">
                                                        <i class="fa fa-pen fa-2x edit-icon position-absolute text-white"
                                                            data-file="#mobile-image"></i>
                                                        <img class="mobile-image"
                                                            src="{{ asset('uploads') }}/{{ $data['mobileImage'] }}"
                                                            alt="Mobile View Image" />
                                                    </div>
                                                </div>
                                                <div class="iphone-buttons-right"></div>
                                                <div class="iphone-buttons-left"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form id="desktop-image-form" data-for="desktopBG" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" class="d-none upload-desktop-image upload-image" name="desktop-image" id="desktop-image">
                    </form>
                    <form id="mobile-image-form" data-for="mobileBG" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" class="d-none upload-mobile-image upload-image" name="mobile-image" id="mobile-image">
                    </form>
                    <hr>
                    <!--<button type="button" class="btn btn-primary disabled mb-3">
                        <span>Change Color Scheme</span>
                    </button>-->
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <label for="theme-color">Main Theme Color</label>
                            <input type="color" class="form-control theme-edit" name="themeBG" id="theme-bg"
                                value="{{ $data['themeBG'] }}">
                        </div>
                        <div class="col-md-4">
                            <label for="theme-color">Menu Background Color</label>
                            <input type="color" class="form-control theme-edit" name="themeMenuBG" id="theme-menu-bg"
                                value="{{ $data['themeMenuBG'] }}">
                        </div>
                        <div class="col-md-4">
                            <label for="theme-color">Sub Pages Background Color</label>
                            <input type="color" class="form-control theme-edit" name="themePageBG" id="theme-page-bg"
                                value="{{ $data['themePageBG'] }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    $('input.theme-edit').on('change',function(){
        var _target = $(this);
        var _key = $(this).attr('name');
        var _value = $(this).val();
        $.ajax({
               method: 'POST',
               url : '{{ route('star.content.themeEdit') }}',
               data : { "_token" : '{{ csrf_token() }}' , 'key' : _key , 'value' : _value },
               success : function(response){
                    _target.val(response);
                    $.toast({
                        text: 'Setting Updated Successfully!',
                        position: 'top-right',
                        loader: false,
                        allowToastClose : false,
                        textColor: 'white',
                        icon: 'success'
                    });
               },
               error : function(error){}
        });
    });

       $('input.upload-desktop-image').on('change',function(){
        var _key = $(this).attr('name');
        var _value = $(this).val();
        var _target = $('.' + _key);
        debugger;
        $('#' + _key + '-form').submit();
       });

       $('input.upload-mobile-image').on('change',function(){
        var _key = $(this).attr('name');
        var _value = $(this).val();
        var _target = $('.' + _key);
        $('#' + _key + '-form').submit();
       });

       $('#desktop-image-form,#mobile-image-form').on('submit',function(e){
           e.preventDefault();
            var formData = new FormData(this);
            var _key = $(this).find('.upload-image').attr('name');
            var _value = $(this).find('.upload-image')
            formData.append('image' , 1);
            formData.append('key' , _key);
            formData.append('value' , _value);
           $.ajax({
                url:"{{ route('star.content.themeEdit') }}",
                method:"POST",
                data:formData,
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(response)
                {   
                    if(response.success){

                        $('.' + response.type).attr('src' , response.success);

                        $.toast({
                            text: 'Setting Updated Successfully!',
                            position: 'top-right',
                            loader: false,
                            allowToastClose : false,
                            textColor: 'white',
                            icon: 'success'
                        });
                    }else{
                        $.toast({
                            text: 'Something went Wrong',
                            position: 'top-right',
                            loader: false,
                            allowToastClose : false,
                            textColor: 'white',
                            icon: 'error'
                        });
                    }
                }
           });
       });

</script>
@endpush