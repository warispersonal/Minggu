@extends('layouts.main')

@push('style')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
          integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
    <style>
        .hidden{
            display: none !important;
        }
    </style>
@endpush

@section('content')
    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 mt-5">
                <div class="row px-md-5 gy-3">
                    <div class="col-lg-4 pe-lg-5">
                        <div class="d-flex w-100">
                            <h2 class="heading">{{ __('general.khidmat0') }}</h2>
                            <img src="{{asset('assets/img/nasihat2.png')}}" class="img-fluid w-50 d-lg-none" alt="">
                        </div>
                        <img src="{{asset('assets/img/nasihat.png')}}" class="img-fluid mt-5 d-none d-lg-inline-block"
                             alt="">
                    </div>
                    <div class="col-lg-8 text-white" id="khidmat_nasihat_section">
                        <h2>{{ __('general.khidmat1')}}</h2>
                        <p class="mb-4">
                            {{ __('general.khidmat2') }}
                        </p>
                        <h2>{{ __('general.khidmat21')}}</h2>
                        <div class="khidmat_images mb-4">
                            
                            <button class="img_button">
                                <img src="{{asset('assets/img/climb-2.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic1_1')}} <br>
                                    {{ __('general.khidmat_topic1_2')}} 
                                    
                                </div>
                            </button>
                            <button class="img_button">
                                <img src="{{asset('assets/img/rhb-2.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic2_1')}} <br>
                                    {{ __('general.khidmat_topic2_2')}} <br>
                                    {{ __('general.khidmat_topic2_3')}} 
                                </div>
                            </button>
                            <button class="img_button">
                                <img src="{{asset('assets/img/maybank-6.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic3_1')}} <br>
                                    {{ __('general.khidmat_topic3_2')}} 
                                </div>
                            </button>
                            <button class="img_button">
                                <img src="{{asset('assets/img/affin-bank.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic4_1')}} <br>
                                    {{ __('general.khidmat_topic4_2')}} <br>
                                    {{ __('general.khidmat_topic4_3')}} <br>
                                    {{ __('general.khidmat_topic4_4')}} 
                                </div>
                            </button>
                            <button class="img_button">
                                <img src="{{asset('assets/img/alliance-bank.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic5_1')}} <br>
                                    {{ __('general.khidmat_topic5_2')}} 
                                </div>
                            </button> <br class="d-none d-xxl-block">
                            <button class="img_button">
                                <img src="{{asset('assets/img/bankislam.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic6_1')}} <br>
                                    {{ __('general.khidmat_topic6_2')}} <br>
                                    {{ __('general.khidmat_topic6_3')}} <br>
                                    {{ __('general.khidmat_topic6_4')}} 
                                </div>
                            </button>
                            <button class="img_button">
                                <img src="{{asset('assets/img/bank-muamalat.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic7_1')}} <br>
                                    {{ __('general.khidmat_topic7_2')}} 
                                </div>
                            </button>
                            <button class="img_button">
                                <img src="{{asset('assets/img/bsn.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic8_1')}} <br>
                                    {{ __('general.khidmat_topic8_2')}}
                                </div>
                            </button>
                            <button class="img_button">
                                <img src="{{asset('assets/img/hong-leong.png')}}" class="img-fluid" alt="">
                                <div class="img_data">
                                    {{ __('general.khidmat_topic9_1')}} <br>
                                    {{ __('general.khidmat_topic9_2')}} 
                                </div>
                            </button>
                            <div class="img_overlay"></div>
                        </div>
                        <h2>{{ __('general.khidmat22')}}</h2>
                        <div class="d-flex align-items-center flex-wrap">
                            <b>{{ __('general.khidmat_list1_1')}} </b> &nbsp; <span> {{ __('general.khidmat_list1_2')}}</span> 
                        </div>
                        <div class="d-flex align-items-center flex-wrap">
                            <b>{{ __('general.khidmat_list2_1')}} </b> &nbsp; <span> {{ __('general.khidmat_list2_2')}}</span> 
                        </div>
                        <div class="d-flex align-items-center flex-wrap mb-4">
                            <b>{{ __('general.khidmat_list3_1')}} </b> &nbsp; <span> {{ __('general.khidmat_list3_2')}}</span>
                        </div>
                        
                        <button id="tetapkan_btn" onclick="showForm()" class="theme-btn mt-3">{{ __('general.khidmat8') }}</button>
                       <div class="my-4">
                            <small style="color:#D0DBFF;">{{ __('general.khidmat23') }}</small>
                       </div>
                        
                    </div>
                    <div class="col-lg-8 text-white" id="tetapkan_section">
                        <form action="{{route('advisors')}}" method="post">
                            @csrf
                            @include('component.errors')
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="mb-3">{{ __('general.khidmat9') }}</h3>
                                    <div class="mb-3">
                                        <input type="text" class="custom-input" name="name" value="{{old('name')}}"
                                               placeholder="{{ __('general.khidmat13') }}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="custom-input" name="email" value="{{old('email')}}"
                                               placeholder="{{ __('general.khidmat14') }}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="custom-input" name="phone_number" value="{{old('phone_number')}}"
                                               placeholder="{{ __('general.khidmat15') }}">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <input type="text" maxlength="5" class="custom-input" name="post_code" value="{{old('post_code')}}"
                                               placeholder="{{ __('general.khidmatpostcode') }}">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <select onchange="loadInterest()" name="bank" class="custom-input" id="exampleFormControlSelect1">
                                                <option value="" selected hidden> {{ __('general.khidmat16') }}</option>
                                                @foreach($banks as $bank)
                                                    <option value="{{$bank->id}}">{{$bank->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="form-group">
                                            <select name="topic_interest" class="custom-input" id="exampleFormControlSelect2">
                                                <option value="0">{{ __('general.khidmat18') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{ __('general.khidmat10') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 px-md-5">
                                    <h5 class="mb-3">{{ __('general.khidmat12') }}</h5>
                                    <div id="datepicker" ></div>
                                    <input type="hidden" name="date" value="{{now()}}" id="my_hidden_input">
                                    <h5 class="mt-3">{{ __('general.khidmat19') }}</h5>
                                    <input id="flexRadioDefault1" type="radio" checked value="{{old('time') ?? "9.00 AM"}}" name="time" class="hidden">

                                    <input id="flexRadioDefault2" type="radio" value="9.30 AM" name="time" class="hidden">

                                    <input id="flexRadioDefault3" type="radio" value="10.00 AM" name="time" class="hidden">

                                    <input id="flexRadioDefault4" type="radio" value="10.30 AM" name="time" class="hidden">

                                    <input id="flexRadioDefault5" type="radio" value="11.00 AM" name="time" class="hidden">

                                    <input id="flexRadioDefault6" type="radio" value="11.30 AM" name="time" class="hidden">

                                    <input id="flexRadioDefault7" type="radio" value="12.00 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault8" type="radio" value="12.30 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault9" type="radio" value="1.00 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault10" type="radio" value="1.30 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault11" type="radio" value="2.00 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault12" type="radio" value="2.30 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault13" type="radio" value="3.00 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault14" type="radio" value="3.30 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault15" type="radio" value="4.00 PM" name="time" class="hidden">

                                    <input id="flexRadioDefault16" type="radio" value="4.30 PM" name="time" class="hidden">

                                    <div class="d-flex">
                                        <div class="owl-carousel time-piker">
                                            <div title="9.00 AM">
                                                <label for="flexRadioDefault1"> 9.00 AM</label>
                                            </div>
                                            <div title="9.30 AM">
                                                <label for="flexRadioDefault2"> 9.30 AM</label>
                                            </div>
                                            <div title="10.00 AM">
                                                <label for="flexRadioDefault3"> 10.00 AM</label>
                                            </div>
                                            <div title="10.30 AM">
                                                <label for="flexRadioDefault4"> 10.30 AM</label>
                                            </div>
                                            <div title="11.00 AM">
                                                <label for="flexRadioDefault5"> 11.00 AM</label>
                                            </div>
                                            <div title="11.30 AM">
                                                <label for="flexRadioDefault6"> 11.30 AM</label>
                                            </div>
                                            <div title="12.00 PM">
                                                <label for="flexRadioDefault7"> 12.00 PM</label>
                                            </div>
                                            <div title="12.30 PM">
                                                <label for="flexRadioDefault8"> 12.30 PM</label>
                                            </div>
                                            <div title="1.00 PM">
                                                <label for="flexRadioDefault9"> 1.00 PM</label>
                                            </div>
                                            <div title="1.30 PM">
                                                <label for="flexRadioDefault10"> 1.30 PM</label>
                                            </div>
                                            <div title="2.00 PM">
                                                <label for="flexRadioDefault11"> 2.00 PM</label>
                                            </div>
                                            <div title="2.30 PM">
                                                <label for="flexRadioDefault12"> 2.30 PM</label>
                                            </div>
                                            <div title="3.00 PM">
                                                <label for="flexRadioDefault13"> 3.00 PM</label>
                                            </div>
                                            <div title="3.30 PM">
                                                <label for="flexRadioDefault14"> 3.30 PM</label>
                                            </div>
                                            <div title="4.00 PM">
                                                <label for="flexRadioDefault15"> 4.00 PM</label>
                                            </div>
                                            <div title="4.30 PM">
                                                <label for="flexRadioDefault16"> 4.30 PM</label>
                                            </div>
                                        </div>
                                        <input class="submit-btn ms-2" type="submit"
                                               value="{{ __('general.khidmat20') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button id="back_btn" type="button" onclick="backButton()"><i
                                        class="bi bi-chevron-left"></i>{{ __('general.khidmat11') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')
   
    <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
            integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script type="text/javascript">

    // Returns an array of dates between the two dates
        function getDates (startDate, endDate) {
          const dates = []
          let currentDate = startDate
          const addDays = function (days) {
            const date = new Date(this.valueOf())
            date.setDate(date.getDate() + days)
            return date
          }
          while (currentDate <= endDate) {
            dates.push(currentDate)
            currentDate = addDays.call(currentDate, 1)
          }
          return dates
        }
    
        // Usage
        var array = []
        var month = 0;
        const dates = getDates(new Date(2021, 10, 17), new Date(2021, 11, 31))
        dates.forEach(function (date) {
            var month = date.getMonth() + 1;
          array.push(date.getDate()+"-"+month+"-"+date.getFullYear())
        })
      
    
        
    
        $('#datepicker').datepicker({
    
            beforeShowDay: function(date){
                dmy = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
                  if ($.inArray(dmy, array) != -1) {
                    return true;
                  } else {
                    return false;
                  }
    
            }
    
        });
    
    </script>
    <script>
        // $('#datepicker').datepicker();
        $('#datepicker').on('changeDate', function () {
            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
        });

        $(document).ready(function () {
           let owl =  $(".owl-carousel").owlCarousel({
                loop: true,
                nav: true,
                items: 3,
                dots: false,
                center: true,
            });

            owl.on('changed.owl.carousel',function(property){
                var current = property.item.index;
                var src = $(property.target).find(".owl-item").eq(current).find("div").attr('title');
                $("input[name=time]").val([src]);
            });
        });
    </script>
    <script>
        $(document).ready(function (){
            @if ($errors->any() )
                showForm()
            @endif
        });
        function showForm() {
            $("#khidmat_nasihat_section").css("display", "none");
            $("#tetapkan_section").css("display", "block");
        }

        function backButton() {
            $("#khidmat_nasihat_section").css("display", "block");
            $("#tetapkan_section").css("display", "none");
        }

        function loadInterest() {
            let bankId = $("#exampleFormControlSelect1").val();
            $('#exampleFormControlSelect2').find('option').not(':first').remove();
            $.ajax({
                url: 'load-interest/' + bankId,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }
                    if (len > 0) {
                        for (var i = 0; i < len; i++) {
                            var id = response.data[i].id;
                            <?php if(Config::get('app.locale') == 'en'){?>
                                var name = response.data[i].name;
                            <?php } if(Config::get('app.locale') == 'bm') {?>
                                var name = response.data[i].name_bm;
                            <?php } ?>
                            var option = "<option value='" + id + "'>" + name + "</option>";
                            $("#exampleFormControlSelect2").append(option);
                        }
                    }
                }
            })
        }
    </script>
@endpush
