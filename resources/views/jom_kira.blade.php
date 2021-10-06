@extends('layouts.main')

@push('style')

@endpush

@section('content')

    <main>
        <div class="main-bg">
            <!--<div class="container-fluid px-md-5 pt-4">-->
            <!--    <div class="d-lg-block d-none">-->
            <!--        <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">-->
            <!--        <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="container-fluid px-md-5 mt-5">
                <div class="row px-md-5 gy-4">
                    <div class="col-lg-5 pt-4 pe-lg-5">
                        <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                        <p class="text-white mt-4 text-center">{!! __('general.jom_kira') !!}</p>
                        <div class="mt-4 d-md-flex d-none justify-content-between align-items-center flex-wrap">
                            <a href="{{route('pertandingan')}}" class="tonton-btn mt-3 mx-auto"> <i class="bi bi-chevron-left"></i>
                                {{ __('general.back_button_age') }}
                            </a>
                            <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block mt-3  mx-auto">{{ __('general.join_now') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cars-row">
                            <div class="d-flex align-items-end justify-content-end px-md-3 pt-md-3 px-2 pt-2 ms-5 pb-0">
                                <div>
                                    <img src="{{asset('assets/img/toyota-yaris.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>Toyota Yaris </h4>
                                        <p>1.5g (AT)</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/yamaha.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>Yamaha YZF-R25</h4>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/3xhonda-dash.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <p>3X </p>
                                        <h4 >Honda Dash 125</h4>
                                    </div>
                                </div>
                                <div class="info_iconn info_iconn_1">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-end px-md-3 pb-md-3 px-2 pb-2 pt-0">
                                <div>
                                    <img src="{{asset('assets/img/hyudai.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>Hyudai Kona</h4>
                                        <p>2.0 Standard</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/perodua-car.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>Perodua Ativa</h4>
                                        <p>1.0 Turbo AV</p>
                                    </div>
                                </div>
                                <div>
                                    <h2>{{__('general.livetrivia_worth')}}</h2>
                                    <h1>RM4,500</h1>
                                </div>
                                <div class="info_iconn info_iconn_1">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>
                        </div>
                        <div class="cars-row">
                            <a class="ringgit-btn">{{ __('general.ringgit_emas') }}</a>
                            <div class="d-flex align-items-end justify-content-between p-md-3 p-2">
                                <div>
                                    <img src="{{asset('assets/img/honda-dash.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h5>HONDA Dash 125 </h5>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/honda-dash.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h5>HONDA Dash 125 </h5>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/honda-dash.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h5>HONDA Dash 125 </h5>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/honda-dash.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h5>HONDA Dash 125 </h5>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/honda-dash.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h5>HONDA Dash 125 </h5>

                                    </div>
                                </div>
                                <div class="info_iconn info_iconn_3">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="py-4 d-flex d-md-none justify-content-between align-items-center flex-column">
                    <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block">{{ __('general.join_now') }}</a>

                    <a href="{{route('pertandingan')}}" class="tonton-btn mt-3"> <i class="bi bi-chevron-left"></i>
                        {{ __('general.back_button_age') }}
                    </a>

                </div>
            </div>
        </div>
    </main>
    <div class="jomkira-modal jomkira-modal-1" style="top: 150%;">

        <div class="jomkira-modal-content">
            <div class="d-flex justify-content-between">
                <h3>{{ __('general.car1_main_title') }}</h3>
                <i class="bi bi-x close_btn me-0"></i>
            </div>
            <h3 class="fw-bolder my-3">{{ __('general.car1_text') }}</h3>
            <p>{{ __('general.car1_description') }}</p>

            <div class="mt-4">
                    <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block">{{ __('general.join_now') }}</a>
                </div>
        </div>
    </div>
    <div class="jomkira-modal jomkira-modal-2" style="top: 150%;">
        <div class="jomkira-modal-content">
            <div class="d-flex justify-content-between">
                <h3>{{ __('general.car3_main_title') }}</h3>
                <i class="bi bi-x close_btn me-0"></i>
            </div>
            <h3 class="fw-bolder my-3">{{ __('general.car2_text') }}</h3>
            <p>{{ __('general.car2_description') }}</p>
            <div class="mt-4">
                    <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block">{{ __('general.join_now') }}</a>
            </div>
        </div>
    </div>
    <div class="jomkira-modal jomkira-modal-3" style="top: 150%;">
        <div class="jomkira-modal-content">
            <div class="d-flex justify-content-between">
                <h3>{{ __('general.car3_main_title') }}</h3>
                <i class="bi bi-x close_btn me-0"></i>
            </div>
            <h3 class="fw-bolder my-3">{{ __('general.car3_text') }}</h3>
            <p>{{ __('general.car3_description') }}</p>

            <div class="mt-4">
                    <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block">{{ __('general.join_now') }}</a>
                </div>
        </div>
    </div>


@endsection


@push('js')
    <script>
        $(".info_iconn_1").click(function () {
            $(".jomkira-modal-1").css("top", "45%")
            setTimeout(() => {
                $(".jomkira-modal-1").css("top", "50%")
            }, 300);
            $(".overlay").show()
        })
        $(".info_iconn_2").click(function () {
            $(".jomkira-modal-2").css("top", "45%")
            setTimeout(() => {
                $(".jomkira-modal-2").css("top", "50%")
            }, 300);
            $(".overlay").show()
        })
        $(".info_iconn_3").click(function () {
            $(".jomkira-modal-3").css("top", "45%")
            setTimeout(() => {
                $(".jomkira-modal-3").css("top", "50%")
            }, 300);
            $(".overlay").show()
        })
        $(".overlay").click(function () {
            $(".overlay").hide()
            $(".jomkira-modal").css("top", "150%")
        })
        $(".close_btn").click(function () {
            $(".overlay").hide()
            $(".jomkira-modal").css("top", "150%")
        })
    </script>
@endpush
