@extends('layouts.main')

@push('style')
    <style>
        .main-bg {
            background-color: #0057B7 !important;
        }
    </style>
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
@endpush

@section('content')


    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 pt-4">
                <div class="d-lg-block d-none">
                    <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">
                    <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div class="tabs">
                                <h1 id="program" class="active_tab">{{ __('general.program') }}</h1>
                                <h1 id="jadual">{{ __('general.schedule') }}</h1>
                            </div>
                            <a href="{{route('user.msdLive')}}"
                               class="tonton-btn m-0 d-none d-lg-block">{{ __('general.msd_btn_text') }}</a>

                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div id="program_content">
                            @foreach($main_programs as $main_program)
                                @if(count($main_program->programs) != 0)
                                    <img onclick="openModal({{$main_program->first_program}})"
                                         src="{{$main_program->main_logo}}" alt="{{$main_program->title}}">
                                @endif
                            @endforeach
                        </div>
                        <div id="jadual_content" style="display: none;">
                            <div class="d-lg-flex d-none align-items-start  jadual-desktop">
                                <div class="nav flex-column nav-pills me-5" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-rabu-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-rabu" type="button" role="tab"
                                            aria-controls="v-pills-rabu"
                                            aria-selected="true">{{ __('general.wednesday') }}, 17 Nov 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-khamis-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-khamis" type="button" role="tab"
                                            aria-controls="v-pills-khamis"
                                            aria-selected="false">{{ __('general.thursday') }}, 18 Nov 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-jumaat-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-jumaat" type="button" role="tab"
                                            aria-controls="v-pills-jumaat"
                                            aria-selected="false">{{ __('general.friday') }}, 19 Nov 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-sabtu-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-sabtu" type="button" role="tab"
                                            aria-controls="v-pills-sabtu"
                                            aria-selected="false">{{ __('general.saturday') }}, 20 Nov 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-ahad-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-ahad" type="button" role="tab"
                                            aria-controls="v-pills-ahad"
                                            aria-selected="false">{{ __('general.sunday') }}, 21 Nov 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-isinin-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-isinin" type="button" role="tab"
                                            aria-controls="v-pills-isinin"
                                            aria-selected="false">{{ __('general.monday') }}, 22 Nov 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-selasa-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-selasa" type="button" role="tab"
                                            aria-controls="v-pills-selasa"
                                            aria-selected="false">{{ __('general.tuesday') }}, 23 Nov 2021
                                    </button>

                                </div>
                                <div class="tab-content" id="jadual_tabs_content">
                                    <div class="tab-pane fade show active" id="v-pills-rabu" role="tabpanel"
                                         aria-labelledby="v-pills-rabu-tab">
                                        <div class="row">
                                            @foreach($first_september as $item)
                                                <div class="col-3">
                                                    <span class="time">{{$item->time}}</span>
                                                </div>
                                                <div class="col-9">
                                                    <p>
                                                        {{$item->name}} <small><a class="text-white"
                                                                                  href="{{route("may.bank",$item->partner->slug)}}">{{$item->partner->name ?? ""}}</a></small>

                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-khamis" role="tabpanel"
                                         aria-labelledby="v-pills-khamis-tab">
                                        <div class="row">
                                            @foreach($second_september as $item)
                                                <div class="col-3">
                                                    <span class="time">{{$item->time}}</span>
                                                </div>
                                                <div class="col-9">
                                                    <p>
                                                        {{$item->name}} <small><a class="text-white"
                                                                                  href="{{route("may.bank",$item->partner->slug)}}">{{$item->partner->name ?? ""}}</a></small>

                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-jumaat" role="tabpanel"
                                         aria-labelledby="v-pills-jumaat-tab">

                                        <div class="row">
                                            @foreach($third_september as $item)
                                                <div class="col-3">
                                                    <span class="time">{{$item->time}}</span>
                                                </div>
                                                <div class="col-9">
                                                    <p>
                                                        {{$item->name}} <small><a class="text-white"
                                                                                  href="{{route("may.bank",$item->partner->slug)}}">{{$item->partner->name ?? ""}}</a></small>

                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-sabtu" role="tabpanel"
                                         aria-labelledby="v-pills-sabtu-tab">

                                        <div class="row">
                                            @foreach($fourth_september as $item)
                                                <div class="col-3">
                                                    <span class="time">{{$item->time}}</span>
                                                </div>
                                                <div class="col-9">
                                                    <p>
                                                        {{$item->name}} <small><a class="text-white"
                                                                                  href="{{route("may.bank",$item->partner->slug)}}">{{$item->partner->name ?? ""}}</a></small>

                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-ahad" role="tabpanel"
                                         aria-labelledby="v-pills-ahad-tab">

                                        <div class="row">
                                            @foreach($five_september as $item)
                                                <div class="col-3">
                                                    <span class="time">{{$item->time}}</span>
                                                </div>
                                                <div class="col-9">
                                                    <p>
                                                        {{$item->name}} <small><a class="text-white"
                                                                                  href="{{route("may.bank",$item->partner->slug)}}">{{$item->partner->name ?? ""}}</a></small>

                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-isinin" role="tabpanel"
                                         aria-labelledby="v-pills-isinin-tab">
                                        <div class="row">
                                            @foreach($six_september as $item)
                                                <div class="col-3">
                                                    <span class="time">{{$item->time}}</span>
                                                </div>
                                                <div class="col-9">
                                                    <p>
                                                        {{$item->name}} <small><a class="text-white"
                                                                                  href="{{route("may.bank",$item->partner->slug)}}">{{$item->partner->name ?? ""}}</a></small>

                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-selasa" role="tabpanel"
                                         aria-labelledby="v-pills-selasa-tab">
                                        <div class="row">
                                            @foreach($seven_september as $item)
                                                <div class="col-3">
                                                    <span class="time">{{$item->time}}</span>
                                                </div>
                                                <div class="col-9">
                                                    <p>
                                                        {{$item->name}} <small><a class="text-white"
                                                                                  href="{{route("may.bank",$item->partner->slug)}}">{{$item->partner->name ?? ""}}</a></small>

                                                    </p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="owl-carousel d-lg-none nav nav-pills mb-3 jadual-mobile owl-loaded owl-drag"
                                id="pills-tab" role="tablist" style="">


                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                                        <div class="owl-item">
                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-home"
                                                            type="button" role="tab" aria-controls="pills-home"
                                                            aria-selected="true">Rabu, 1 Sep 2021
                                                    </button>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                            type="button" role="tab" aria-controls="pills-profile"
                                                            aria-selected="false">Khamis, 2 Sep
                                                        2021
                                                    </button>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-contact"
                                                            type="button" role="tab" aria-controls="pills-contact"
                                                            aria-selected="false">Jumaat, 3 Sep
                                                        2021
                                                    </button>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact2-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-contact2"
                                                            type="button" role="tab" aria-controls="pills-contact2"
                                                            aria-selected="false">Sabtu, 4 Sep
                                                        2021
                                                    </button>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact3-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-contact3"
                                                            type="button" role="tab" aria-controls="pills-contact3"
                                                            aria-selected="false">Ahad, 5 Sep
                                                        2021
                                                    </button>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact4-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-contact4"
                                                            type="button" role="tab" aria-controls="pills-contact4"
                                                            aria-selected="false">Isinin, 6 Sep
                                                        2021
                                                    </button>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="owl-item">
                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact5-tab"
                                                            data-bs-toggle="pill" data-bs-target="#pills-contact5"
                                                            type="button" role="tab" aria-controls="pills-contact5"
                                                            aria-selected="false">Selasa, 7 Sep
                                                        2021
                                                    </button>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span></button>
                                    <button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span></button>
                                </div>
                                <div class="owl-dots disabled"></div>
                            </ul>
                            <div class="tab-content d-lg-none" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                     aria-labelledby="pills-contact-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                     aria-labelledby="pills-contact2-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact3" role="tabpanel"
                                     aria-labelledby="pills-contact3-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact4" role="tabpanel"
                                     aria-labelledby="pills-contact4-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact5" role="tabpanel"
                                     aria-labelledby="pills-contact5-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <span id="close-btn" class="bi bi-x"></span>
    <div id="program-modal">
        <div class="program-modal-content">
            <div class="ratio ratio-16x9" id="program_frame">

            </div>
            <h2 class="my-3" id="program_title"></h2>
            @foreach($programs as $program)
                <ul id="date-owl-program-{{$program->id}}"
                    class="owl-carousel nav nav-pills mb-3 hidden-div date-owl-program" id="pills-tab-2" role="tablist">
                    @foreach($program->related_dates as $date)
                        <div id="program-data-dates-{{$date->id}}">
                            <li class="nav-item" role="presentation">
                                <button onclick="onDateChange({{$date}})" class="nav-link date-button"
                                        id="date-{{$date->id}}-tab" data-bs-toggle="pill"
                                        data-bs-target="#date-{{$date->id}}" type="button" role="tab"
                                        aria-controls="date-{{$date->id}}" aria-selected="true">
                                    <p class="mb-0">{{$date->date}} </p>
                                    <p class="mb-0 small">{{$date->time}} </p>
                                </button>
                            </li>
                        </div>
                    @endforeach
                </ul>
            @endforeach
            <div class="tab-content" id="pills-tabContent-2">
                @foreach($programs as $program)
                    <div class="tab-pane fade show description-field" id="date-{{$program->id}}" role="tabpanel"
                         aria-labelledby="date-{{$program->id}}-tab">
                        <p>
                            {{$program->description}} <a
                                href="{{route('may.bank', $program->partner->slug ?? '')}}"><img id="store_logo_image"
                                                                                                 src="{{$program->partner->main_logo ?? ''}}"/></a>
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop: true,
                nav: true,
                items: 3,
                dots: false
            });
            $(".nav-link").click(function () {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });

        });
    </script>


    <script>
        const program = document.querySelector("#program")
        const jadual = document.querySelector("#jadual")
        const programContent = document.querySelector("#program_content")
        const jadualContent = document.querySelector("#jadual_content")
        const programModal = document.querySelector("#program-modal")
        const programImg1 = document.querySelector(".img1")
        const programModalContent = document.querySelector(".program-modal-content")
        const programCloseBtn = document.querySelector("#close-btn")


        program.addEventListener("click", () => {
            programContent.style.display = "flex"
            jadualContent.style.display = "none"
            program.classList.add("active_tab")
            jadual.classList.remove("active_tab")
        })
        jadual.addEventListener("click", () => {
            programContent.style.display = "none"
            jadualContent.style.display = "block"
            program.classList.remove("active_tab")
            jadual.classList.add("active_tab")
        })

        programCloseBtn.addEventListener("click", () => {
            programModal.style.top = "155%"
            overlay.style.display = "none"
            programCloseBtn.style.top = "155%"
        })

        overlay.addEventListener("click", () => {
            programModal.style.top = "150%"
            programCloseBtn.style.top = "155%"
        })

        function openModal(program) {
            if (changeModalView(program)) {
                $(".date-owl-program").addClass("hidden-div")
                $("#date-owl-program-" + program.id).removeClass("hidden-div")
                programModal.style.top = "45%"
                overlay.style.display = "block"
                setTimeout(() => {
                    programModal.style.top = "50%"
                }, 300);
                programCloseBtn.style.top = "8%"
            }
        }

        function onDateChange(program) {
            changeModalView(program)
        }

        function changeModalView(program) {
            if (!$.isEmptyObject(program)) {
                $('#program_frame').empty()
                $("#program_title").text(program.name)
                $('#program_frame').append(program.iframe)
                $(".description-field").removeClass("active")
                $(".date-button").removeClass("active")
                $("#date-" + program.id).addClass('active')
                $("#date-" + program.id + "-tab").addClass('active')
                return true
            } else {
                alert("No event link with this program")
                return false;
            }

        }
    </script>
@endpush
