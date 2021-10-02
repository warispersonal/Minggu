@extends('layouts.main' , ['class' => 'home'])

@if(Config::get('app.locale') == 'en')
    @section('title',$headerMenu[0]['label_en'])
@elseif (Config::get('app.locale') == 'bm')
    @section('title',$headerMenu[0]['label_bm'])
@endif
@push('style')
    <style>
        .desktop_nav {
            background-color: {{homePageMenuBackground() ?? "#0057B7"}}  !important;
        }

        .desktop_nav li {
            color: white;
        }

        .desktop_nav li a {
            color: {{homePageMenuColor() ?? 'white'}}  !important ;
        }

        .mobile-header {
            /*background: transparent;*/
            /*position:static;*/
            color: #0057B7;
        }

        .main-img {
            margin-top: 37px;
        }

    </style>
@endpush

@section('content')

    <main>
        <div class="main-img position-relative">
            <!--<div class="container-fluid px-md-5 pt-lg-4 header-imgs">-->
            <!--    <div class="d-lg-block d-none">-->
        <!--        <img src="{{asset('assets/img/header-pnb.png')}}" class="img-fluid me-3">-->
        <!--        <img src="{{asset('assets/img/header-asnb.png')}}" class="img-fluid">-->
            <!--    </div>-->
            <!--</div>-->
        <!--<img src="{{asset('assets/img/mobile-home-bg.png')}}" class="d-lg-none w-100 position-absolute top-0">-->
            <div class="home-links position-relative mt-5  mt-md-0">
{{--                <img src="{{asset('assets/img/desktop-home-bg.png')}}" class="d-none d-md-block desktop-bg">--}}
{{--                <img src="{{asset('assets/img/mobile-home-bg.png')}}" class=" d-md-none ">--}}
                <img src="{{desktopImage()}}" class="d-none d-md-block desktop-bg">
                <img src="{{mobileImage()}}" class=" d-md-none ">
                @foreach($partners as $partner)
                    <a href="{{route('may.bank', $partner->slug)}}" class="link-{{$partner->id}}">
                        <div class="hover-effect">
                            <img src="{{$partner->main_logo}}" alt="">
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="info-btn"><i class="bi bi-info"></i></div>
            <div class="about-us-box">
                Minggu Saham Digital adalah sebuah acara mesra keluarga yang dipenuhi dengan program pendidikan dan
                literasi kewangan. MSD bersiaran langsung selama 7 hari melalui laman Facebook dan YouTube.
            </div>
        </div>
    </main>
    <!--select bank modal-->
    <div id="bank_modal" class="my_modal">
        <div class="d-flex justify-content-between">
            <h3 class="modal_heading">Get a chance to Win fancy prizes!</h3>
            <i class="bi bi-x close_btn"></i>
        </div>
        <div class="row mt-5">
            <div class="col-9">
                <form action="{{route('fancyPrize')}}" class="scrol" method="post">
                    @csrf
                    <div class="mb-3">
                        <select name="bank_name" class="custom_inputs" required id="bank_drop_down"
                                onchange="loadState()">
                            <option value="" selected> Select Bank</option>
                            @foreach($banks as $bank)
                                <option value="{{$bank->id}}">{{$bank->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <select name="state_name" id="state_drop_down" required onchange="loadBranch()"
                                class="custom_inputs">
                            <option value="" selected> Select State</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select name="branch_name" id="branch_drop_down" required class="custom_inputs">
                            <option value="" selected> Select Branch</option>
                        </select>
                    </div>
                    <div>
                        <input class="submit-btn" type="submit" value="Hantar">
                    </div>
                </form>
            </div>
            <div class="col-3 pe-0">
                <img src="{{ asset('assets/front/img/drone1_1.png') }}" class="drone1" alt="">
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        const bankModal = document.querySelector("#bank_modal")
        @if($url == 'qr')
            overlay.style.display = "block"
        bankModal.style.bottom = "55%"
        setTimeout(() => {
            bankModal.style.bottom = "50%"
        }, 300);
        @endif

        function loadState() {
            let bankId = $("#bank_drop_down").val();

            $('#state_drop_down').find('option').not(':first').remove();

            $.ajax({
                url: 'load-state/' + bankId,
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
                            var name = response.data[i].name;
                            var option = "<option value='" + id + "'>" + name + "</option>";
                            $("#state_drop_down").append(option);
                        }
                    }
                }
            })
        }

        function loadBranch() {
            let stateId = $("#state_drop_down").val();
            $('#branch_drop_down').find('option').not(':first').remove();

            $.ajax({
                url: 'load-branch/' + stateId,
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
                            var name = response.data[i].name;
                            var option = "<option value='" + id + "'>" + name + "</option>";
                            $("#branch_drop_down").append(option);
                        }
                    }
                }
            })
        }
    </script>
@endpush
