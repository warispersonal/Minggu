@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <style>
        body,html{
            overflow-x:hidden;
        }
        .main-bg {
            background-color: #0057B7 !important;
            overflow:hidden;
        }
        .info_iconn_2{
            width:20px;
            height:20px;
            border-radius:50%;
            background: linear-gradient(226.91deg, #A4B7FB 26.91%, #808AE2 86.1%);
            display:flex;
            justify-content:center;
            align-items:center;
            position:relative;
        }
        .info_iconn_2 span{
            margin:0px;
        }
        
        .social_iconss{
            width:100%;
        }
        .social_iconss i{
            margin-right:5px;
        }
        .info_iconn_2:hover .about-us-box{
            right:0px;
            transition:all .3s;
        }
        .sertai-info-box{
            position:absolute;
            top:0px;
            height:200px;
            background:black;
            width:100vw;
            visibility:hidden;
            z-index:4;
        }
        .about-us-box{
            position:absolute;
            left:inherit;
            right:-1000px;
            width:250px;
            transition:none;
            z-index:5;
            top:150%;
        }
    </style>

@endpush

@section('content')

    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 pt-4">
                <!--<div class="d-lg-block d-none">-->
                <!--    <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">-->
                <!--    <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">-->
                <!--</div>-->
                <h3 class="text-white mb-0 d-lg-block d-none">
{{--                    @guest('user')--}}
{{--                        <div class="alert alert-danger text-center hidden" role="alert">--}}
{{--                            Please Login to Access this Page--}}
{{--                        </div>--}}
{{--                    @endguest--}}
                </h3>
            </div>

            <div class="container-fluid px-md-5 mt-5">
                <div id="jom_kira_tabs" class="px-md-5">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active ms-0" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">{{ __('general.sertai_sekarang_1') }}
                            </button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">{{ __('general.sertai_sekarang_2') }}
                            </button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">{{ __('general.sertai_sekarang_3') }}
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content pb-5" id="nav-tabContent">
                        <div class="tab-pane fade show active pt-5" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">{{ __('general.sertai_sekarang_4') }}</h1>
                                            <h4 class="text-white text-center mb-3">22 {{ __('general.sertai_sekarang_5') }} - 16 {{ __('general.sertai_sekarang_6') }} 2021</h4>
                                            <p class="text-white text-center">{!! __('general.jom-kira-doit') !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <form method="post" action="{{route('step1.form')}}" class="rm-form">
                                        @csrf
                                        <div class="row ">
                                            @foreach($section1 as $item)
                                                <div class="col-6">
                                                    <div class="mb-3 d-flex align-items-center justify-content-end">
                                                        <span>{{$item->title}}</span>
                                                        <label for="">RM</label>
                                                        <input
                                                            class="rm-imputs step1-fields only-decimal-integer-number"
                                                            type="text"
                                                             value="{{$item->status == 1 ? $item->correct_value : old('step_1_'.$item->id)}}"
                                                            name="step_1_{{$item->id}}" />
                                                    </div>
                                                </div>

                                            @endforeach
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <h3 class="text-white text-end">{{ __('general.sertai_sekarang_7') }}</h3>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                    <h2 class="text-white mb-0">RM</h2>
                                                    <input type="text" name="final_result" id="final_result"
                                                           class="rm-imputs-2" readonly>
                                                </div>
                                                <div class="text-end my-3 ms-auto ">
                                                    <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-5" id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">Rakan Korporat</h1>
                                            <h4 class="text-white text-center mb-3">22 Okt - 23 Nov 2021</h4>
                                            <p class="text-white text-center">{!! __('general.jom-kira-doit2') !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <form method="post" action="{{route('step2.form')}}" class="rm-form">
                                        @csrf
                                        <div class="row">
                                            @foreach($section2 as $item)

                                                <div class="col-6">
                                                    <p>
                                                        {{$item->title}}
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3 d-flex align-items-center">
                                                        <label for="">RM</label>
                                                        <input
                                                            class="rm-imputs step2-fields only-decimal-integer-number"
                                                            type="text"
                                                            value="{{$item->status == 1 ? $item->correct_value : old('step_2_'.$item->id)}}"
                                                            name="step_2_{{$item->id}}" />
                                                        <div class="text-white ms-3 d-flex align-items-center social_iconss">
                                                            <i class="fas fa-globe"></i>
                                                            <i class="fab fa-instagram"></i>
                                                            <i class="fab fa-facebook-square"></i>
                                                            <div class="info_iconn_2">
                                                                <span class="bi bi-info"></span>
                                                                <div class="about-us-box">
                                                                    Terdapat 3 Duit Syiling MSD tersembunyi di laman sosial berikut. Jom... cari dan kira semuanya dan simpan jumlah di sini!
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            @endforeach
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <h3 class="text-white">{{ __('general.sertai_sekarang_7') }}</h3>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end flex-md-nowrap flex-wrap mb-3">
                                                    <h2 class="text-white mb-0">RM</h2>
                                                    <input type="text" id="final_result_2" class="rm-imputs-2" readonly>
                                                    <div class="text-end mt-3 ms-3 mt-md-0">
                                                        <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-5" id="nav-contact" role="tabpanel"
                             aria-labelledby="nav-contact-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">MSD Live</h1>
                                            <h4 class="text-white text-center mb-3">17 - 23 November 2021</h4>
                                            <p class="text-white text-center">{!! __('general.jom-kira-doit3') !!}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <form method="post" action="{{route('step3.form')}}" class="rm-form side-tabs">
                                        @csrf
                                        <div class="d-flex  align-items-start flex-column flex-lg-row ">
                                            <div id="owlCarousel" class="nav flex-column nav-pills me-5 mb-3 mb-lg-0"
                                                 id="v-pills-tab" role="tablist"
                                                 aria-orientation="vertical">
                                                <button onclick="stepDateFields(1)" class="nav-link active" id="v-pills-rabu-tab"
                                                        data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-rabu" type="button" role="tab"
                                                        aria-controls="v-pills-rabu" aria-selected="true">{{ __('general.wednesday') }}, 17 Nov
                                                    2021
                                                </button>
                                                <button onclick="stepDateFields(2)"  class="nav-link" id="v-pills-khamis-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-khamis" type="button" role="tab"
                                                        aria-controls="v-pills-khamis" aria-selected="false">{{ __('general.thursday') }}, 18
                                                    nov 2021
                                                </button>
                                                <button onclick="stepDateFields(3)"  class="nav-link" id="v-pills-jumaat-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-jumaat" type="button" role="tab"
                                                        aria-controls="v-pills-jumaat" aria-selected="false">{{ __('general.friday') }}, 19
                                                    Nov 2021
                                                </button>
                                                <button onclick="stepDateFields(4)"  class="nav-link" id="v-pills-sabtu-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-sabtu" type="button" role="tab"
                                                        aria-controls="v-pills-sabtu" aria-selected="false">{{ __('general.saturday') }}, 20
                                                    Nov 2021
                                                </button>
                                                <button  onclick="stepDateFields(5)"  class="nav-link" id="v-pills-ahad-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-ahad" type="button" role="tab"
                                                        aria-controls="v-pills-ahad" aria-selected="false">{{ __('general.sunday') }}, 21 Nov
                                                    2021
                                                </button>
                                                <button  onclick="stepDateFields(6)"  class="nav-link" id="v-pills-isinin-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-isinin" type="button" role="tab"
                                                        aria-controls="v-pills-isinin" aria-selected="false">{{ __('general.monday') }}, 22
                                                    Nov 2021
                                                </button>
                                                <button  onclick="stepDateFields(7)"  class="nav-link" id="v-pills-selasa-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-selasa" type="button" role="tab"
                                                        aria-controls="v-pills-selasa" aria-selected="false">{{ __('general.tuesday') }}, 23
                                                    Nov 2021
                                                </button>
                                            </div>
                                            <div class="tab-content" id="msd-live-section">
                                                <div class="tab-pane fade show active" id="v-pills-rabu" role="tabpanel"
                                                     aria-labelledby="v-pills-rabu-tab">
                                                    <div class="row">
                                                        @foreach($section3 as $item)
                                                            @if($item->button_text == "Rabu, 17 Nov 2021")
                                                                <div class="col-7">
                                                                    <p>
                                                                        {{$item->title}}
                                                                    </p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="mb-3 d-flex">
                                                                        <label for="">RM</label>
                                                                        <input
                                                                            class="rm-imputs step3-fields step1-date-fields only-decimal-integer-number"
                                                                            type="text"
                                                                            value="{{$item->status == 1 ? $item->correct_value : old('step_3_'.$item->id)}}"
                                                                            name="step_3_{{$item->id}}" />
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>

                                                    <div class="row mt-3">
                                                        <div class="col-6">
                                                            <h4 class="text-white">{{ __('general.sertai_sekarang_7') }}</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                                <h4 class="text-white mb-0">RM</h4>
                                                                <input type="text" id="final1_result_3" class="rm-imputs-2"
                                                                       readonly>
                                                            </div>
                                                            <div class="text-end ms-auto my-3">
                                                                <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-khamis" role="tabpanel"
                                                     aria-labelledby="v-pills-khamis-tab">
                                                    <div class="row">
                                                        @foreach($section3 as $item)
                                                            @if($item->button_text == "Khamis, 18 nov 2021")
                                                                <div class="col-7">
                                                                    <p>
                                                                        {{$item->title}}
                                                                    </p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="mb-3 d-flex">
                                                                        <label for="">RM</label>
                                                                        <input
                                                                            class="rm-imputs step3-fields step2-date-fields only-decimal-integer-number"
                                                                            type="text"
                                                                            value="{{$item->status == 1 ? $item->correct_value : old('step_3_'.$item->id)}}"
                                                                            name="step_3_{{$item->id}}" />
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-6">
                                                            <h4 class="text-white">{{ __('general.sertai_sekarang_7') }}</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                                <h4 class="text-white mb-0">RM</h4>
                                                                <input type="text" id="final2_result_3" class="rm-imputs-2"
                                                                       readonly>
                                                            </div>
                                                            <div class="text-end ms-auto my-3">
                                                                <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-jumaat" role="tabpanel"
                                                     aria-labelledby="v-pills-jumaat-tab">
                                                    <div class="row">
                                                        @foreach($section3 as $item)
                                                            @if($item->button_text == "Jumaat, 19 Nov 2021")
                                                                <div class="col-7">
                                                                    <p>
                                                                        {{$item->title}}
                                                                    </p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="mb-3 d-flex">
                                                                        <label for="">RM</label>
                                                                        <input
                                                                            class="rm-imputs step3-fields step3-date-fields only-decimal-integer-number"
                                                                            type="text"
                                                                            value="{{$item->status == 1 ? $item->correct_value : old('step_3_'.$item->id)}}"
                                                                            name="step_3_{{$item->id}}">
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-6">
                                                            <h4 class="text-white">{{ __('general.sertai_sekarang_7') }}</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                                <h4 class="text-white mb-0">RM</h4>
                                                                <input type="text" id="final3_result_3" class="rm-imputs-2"
                                                                       readonly>
                                                            </div>
                                                            <div class="text-end ms-auto my-3">
                                                                <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="v-pills-sabtu" role="tabpanel"
                                                     aria-labelledby="v-pills-sabtu-tab">
                                                    <div class="row">
                                                        @foreach($section3 as $item)
                                                            @if($item->button_text == "Sabtu, 20 Nov 2021")
                                                                <div class="col-7">
                                                                    <p>
                                                                        {{$item->title}}
                                                                    </p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="mb-3 d-flex">
                                                                        <label for="">RM</label>
                                                                        <input
                                                                            class="rm-imputs step3-fields step4-date-fields only-decimal-integer-number"
                                                                            type="text"
                                                                            value="{{$item->status == 1 ? $item->correct_value : old('step_3_'.$item->id)}}"
                                                                            name="step_3_{{$item->id}}">
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-6">
                                                            <h4 class="text-white">{{ __('general.sertai_sekarang_7') }}</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                                <h4 class="text-white mb-0">RM</h4>
                                                                <input type="text" id="final4_result_3" class="rm-imputs-2"
                                                                       readonly>
                                                            </div>
                                                            <div class="text-end ms-auto my-3">
                                                                <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-ahad" role="tabpanel"
                                                     aria-labelledby="v-pills-ahad-tab">
                                                    <div class="row">
                                                        @foreach($section3 as $item)
                                                            @if($item->button_text == "Ahad, 21 Nov 2021")
                                                                <div class="col-7">
                                                                    <p>
                                                                        {{$item->title}}
                                                                    </p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="mb-3 d-flex">
                                                                        <label for="">RM</label>
                                                                        <input
                                                                            class="rm-imputs step3-fields step5-date-fields only-decimal-integer-number"
                                                                            type="text"
                                                                            value="{{$item->status == 1 ? $item->correct_value : old('step_3_'.$item->id)}}"
                                                                            name="step_3_{{$item->id}}" />
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-6">
                                                            <h4 class="text-white">{{ __('general.sertai_sekarang_7') }}</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                                <h4 class="text-white mb-0">RM</h4>
                                                                <input type="text" id="final5_result_3" class="rm-imputs-2"
                                                                       readonly>
                                                            </div>
                                                            <div class="text-end ms-auto my-3">
                                                                <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-isinin" role="tabpanel"
                                                     aria-labelledby="v-pills-isinin-tab">
                                                    <div class="row">
                                                        @foreach($section3 as $item)
                                                            @if($item->button_text == "Isinin, 22 Nov 2021")
                                                                <div class="col-7">
                                                                    <p>
                                                                        {{$item->title}}
                                                                    </p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="mb-3 d-flex">
                                                                        <label for="">RM</label>
                                                                        <input
                                                                            class="rm-imputs step3-fields step6-date-fields only-decimal-integer-number"
                                                                            type="text"
                                                                            value="{{$item->status == 1 ? $item->correct_value : old('step_3_'.$item->id)}}"
                                                                            name="step_3_{{$item->id}}">
                                                                    </div>

                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-6">
                                                            <h4 class="text-white">{{ __('general.sertai_sekarang_7') }}</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                                <h4 class="text-white mb-0">RM</h4>
                                                                <input type="text" id="final6_result_3" class="rm-imputs-2"
                                                                       readonly>
                                                            </div>
                                                            <div class="text-end ms-auto my-3">
                                                                <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane fade" id="v-pills-selasa" role="tabpanel"
                                                     aria-labelledby="v-pills-selasa-tab">
                                                    <div class="row">
                                                        @foreach($section3 as $item)
                                                            @if($item->button_text == "Selasa, 23 Nov 2021")
                                                                <div class="col-7">
                                                                    <p>
                                                                        {{$item->title}}
                                                                    </p>
                                                                </div>
                                                                <div class="col-5">
                                                                    <div class="mb-3 d-flex">
                                                                        <label for="">RM</label>
                                                                        <input 
                                                                        value="{{$item->status == 1 ? $item->correct_value : old('step_3_'.$item->id)}}"
                                                                        class="rm-imputs step3-fields step7-date-fields only-decimal-integer-number" type="text" name="step_3_{{$item->id}}">
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-6">
                                                            <h4 class="text-white">{{ __('general.sertai_sekarang_7') }}</h4>
                                                        </div>
                                                        <div class="col-6">
                                                            <div
                                                                class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                                <h4 class="text-white mb-0">RM</h4>
                                                                <input type="text" id="final7_result_3" class="rm-imputs-2"
                                                                       readonly>
                                                            </div>
                                                            <div class="text-end ms-auto my-3">
                                                                <input type="submit" value="{{ __('general.sertai_sekarang_8') }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection

@push('js')
    <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>

    <script>
        let windowSize = window.matchMedia("(max-width: 991px)")
        if (windowSize.matches) {
            document.getElementById("owlCarousel").classList.add("owl-carousel")
            $(".nav-link").click(function () {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });

        }
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop: true,
                nav: true,
                items: 3,

            });

        });

    </script>
    <script>
        $(function () {
            $('.only-decimal-integer-number').on('input', function (e) {
                if (/^(\d+(\.\d{0,2})?)?$/.test($(this).val())) {
                    // Input is OK. Remember this value
                    $(this).data('prevValue', $(this).val());
                } else {
                    // Input is not OK. Restore previous value
                    $(this).val($(this).data('prevValue') || '');
                }
            }).trigger('input'); // Initialise the `prevValue` data properties
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".step1-fields").on('input', function () {
                calculateSum1();
            });
            $(".step2-fields").on('input', function () {
                calculateSum2();
            });
            $(".step1-date-fields").on('input', function () {
                stepDateFields(1);
            });
            $(".step2-date-fields").on('input', function () {
                stepDateFields(2);
            });
            $(".step3-date-fields").on('input', function () {
                stepDateFields(3);
            });
            $(".step4-date-fields").on('input', function () {
                stepDateFields(4);
            });
            $(".step5-date-fields").on('input', function () {
                stepDateFields(5);
            });
            $(".step6-date-fields").on('input', function () {
                stepDateFields(6);
            });
            $(".step7-date-fields").on('input', function () {
                stepDateFields(7);
            });
            calculateSum1()
            calculateSum2()
            stepDateFields(1)
            stepDateFields(2)
            stepDateFields(3)
            stepDateFields(4)
            stepDateFields(5)
            stepDateFields(6)
            stepDateFields(7)
        });

        function calculateSum1() {
            var calculated_total_sum = 0;
            $(".step1-fields").each(function () {
                var get_textbox_value = $(this).val();
                if (get_textbox_value != "") {
                    calculated_total_sum += parseFloat(get_textbox_value);
                }
            });
            $("#final_result").val(calculated_total_sum.toFixed(2));
        }

        function calculateSum2() {
            var calculated_total_sum = 0;
            $(".step2-fields").each(function () {
                var get_textbox_value = $(this).val();
                if (get_textbox_value != "") {
                    calculated_total_sum += parseFloat(get_textbox_value);
                }
            });
            $("#final_result_2").val(calculated_total_sum.toFixed(2));
        }

        function stepDateFields(no) {
            var calculated_total_sum = 0;
            $(".step"+no+"-date-fields").each(function () {
                var get_textbox_value = $(this).val();
                if (get_textbox_value != "") {
                    calculated_total_sum += parseFloat(get_textbox_value);
                }
            });
            $("#final"+no+"_result_3").val(calculated_total_sum.toFixed(2));
        }

    </script>
    <script>
        @guest('user')
        const loginModal1 = document.querySelector("#login_modal")
        loginModal1.style.bottom = "55%"
        setTimeout(() => {
            loginModal1.style.bottom = "50%"
        }, 300);
        $("#login_close_button").hide()
        @endguest
        @if(session()->has('from_section'))
            @if(session()->get('from_section') == 2)
                $("#nav-home").removeClass("active")
                $("#nav-profile").addClass("active")
                $("#nav-home").removeClass("show")
                $("#nav-profile").addClass("show")
            @endif
        @endif

        @if(session()->has('from_section'))
            @if(session()->get('from_section') == 3)
                $("#nav-home").removeClass("active")
                $("#nav-contact").addClass("active")
                $("#nav-home").removeClass("show")
                $("#nav-contact").addClass("show")
            @endif
        @endif
    </script>
@endpush
