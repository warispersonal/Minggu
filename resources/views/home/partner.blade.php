@extends('layouts.main')

@push('style')
    <style>
        .main-bg {
            background-color: {{$partner->bg_color ?? "blue"}}            !important;
        }

        .mode-fore-color {
            color: {{$partner->mode == 1 ? "#000000" : "#FFFFFF"}}            !important;
        }

        .mode-bg-color {
            background-color: {{$partner->mode == 1 ? "#fff4f4" : "#4ac4e2"}}         !important;
        }

        .mode-buttons-color {
            background-color: {{$partner->mode == 1 ? "#ffffff" : "#4b4b4b"}}         !important;
        }

        .mobile-header {
            background-color: #FFC600;
        }

        .embera-embed-responsive-item {
            width: 420px;
            height: 345px;
        }

        #may_bank_tabs .nav-link {
            color: {{$partner->mode == 1 ? "#000000" : "#FFFFFF"}}            !important;
        }

    </style>

@endpush

@section('content')

    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 pt-4">
                <div class="d-lg-block d-none">
                    @if($partner->mode)
                        <img src="{{asset('assets/img/header-pnb.png')}}" class="img-fluid me-2">
                        <img src="{{asset('assets/img/header-asnb.png')}}" class="img-fluid">
                    @else
                        <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">
                        <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">
                    @endif
                </div>
            </div>
            <div class="container-fluid mt-5 pb-5 px-md-5 ">
                <div id="may_bank_tabs" class="px-md-5">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active mode-fore-color" id="nav-maklumat-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-maklumat" type="button" role="tab" aria-controls="nav-maklumat"
                                    aria-selected="true">Maklumat
                            </button>
                            @if($partner->is_shown_program_tab == 1)
                                <button class="nav-link mode-fore-color" id="nav-program-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-program" type="button" role="tab"
                                        aria-controls="nav-program"
                                        aria-selected="false">Program
                                </button>
                            @endif
                        </div>
                    </nav>
                    <div class="tab-content " id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-maklumat" role="tabpanel"
                             aria-labelledby="nav-maklumat-tab">
                            <div class="row mt-4">
                                <div class="col-lg-4 pe-md-4">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            @foreach($partner->sliders as $slider)
                                                <button type="button" data-bs-target="#carouselExampleIndicators"
                                                        data-bs-slide-to="{{$loop->index}}"
                                                        class="{{$loop->index == 0 ? "active" : ""}} aria-label="
                                                        Slide{{$loop->index}}"
                                                aria-current="{{$loop->index == 0 ? true : ""}}"></button>
                                            @endforeach

                                        </div>
                                        <div class="carousel-inner">
                                            @foreach($partner->sliders as $slider)
                                                <div class="carousel-item {{$loop->index == 0 ? "active" : ""}}">
                                                    <a href="{{$slider->slider_link}}" target="_blank">
                                                        <img src="{{$slider->slider_image}}"
                                                             class="d-block w-100 partner-slider-images"
                                                             alt="...">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <div class="text-center mt-4 p-2">
                                        <img src="{{$partner->store_logo}}" class="img-fluid"
                                             style="min-height:100px; object-fit:contain;" alt="">
                                    </div>
                                    <div class="my-4">
                                        <p class="justify mode-fore-color">
                                            {{Config::get('app.locale') == 'en' ? $partner->description:$partner->description_bm }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-8 ps-md-4">
                                    <div class="ratio ratio-16x9">
                                        {!! $partner->iframe ?? "" !!}
                                    </div>
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="custom-links ">
                                                @foreach($partner->links as $link)
                                                    <a target="_blank" class="mode-fore-color mode-buttons-color mt-2"
                                                       href="{{$link->link}}">{{Config::get('app.locale') == 'en' ? $link->title : $link->title_bm}}</a>
                                                @endforeach
                                                @if($partner->website != "")
                                                    <a target="_blank" class="mode-fore-color mode-buttons-color mt-2"
                                                       href="{{$partner->website}}">{{ __('general.website') }}</a>
                                                @endif
                                                @if($partner->careers != "")
                                                    <a target="_blank" class="mode-fore-color mode-buttons-color mt-2"
                                                       href="{{$partner->careers}}">{{ __('general.careers') }}</a>
                                                @endif
                                                @if($partner->contact_us != "")
                                                    <a target="_blank" class="mode-fore-color mode-bg-color mode-buttons-color mt-2"
                                                       href="{{$partner->contact_us}}">{{ __('general.contact_us') }}</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="custom-links d-flex justify-content-end align-items-end">
                                                @if($partner->fb != "")
                                                    <a target="_blank" class="mode-fore-color mode-buttons-color mt-2"
                                                       href="{{$partner->fb}}"> <i
                                                            class="fab  fa-facebook"></i></a>
                                                @endif
                                                @if($partner->insta != "")
                                                    <a target="_blank" class="mode-fore-color mode-buttons-color mt-2"
                                                       href="{{$partner->insta}}"><i class="fab fa-instagram"></i></a>
                                                @endif
                                                @if($partner->twitter != "")
                                                    <a target="_blank" class="mode-fore-color mode-buttons-color mt-2"
                                                       href="{{$partner->twitter}}"><i class="fab  fa-twitter"></i></a>
                                                @endif
                                                @if($partner->youtube != "")
                                                    <a target="_blank" class="mode-fore-color mode-buttons-color mt-2"
                                                       href="{{$partner->youtube}}"><i class="fab  fa-youtube"></i></a>
                                                @endif
                                                @if($partner->linkedin != "")
                                                    <a target="_blank" class="mode-fore-color mode-buttons-color mt-2"
                                                       href="{{$partner->linkedin}}"><i
                                                            class="fab  fa-linkedin"></i></a>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade " id="nav-program" role="tabpanel" aria-labelledby="nav-program-tab">
                            <div class="row mt-4 gy-4">

                                @foreach($partner->programs as $program)
                                    <div class="col-lg-6">
                                        <div class="program_video-box  mode-bg-color">
                                            <div class="ratio ratio-16x9">
                                                {!! $program->iframe ?? "" !!}
                                            </div>
                                            <h3 class="my-3 mode-fore-color">{{$program->title}}</h3>
                                            <span><strong class="mode-fore-color">{{$program->date}}</strong></span>
                                            <p class="mode-fore-color">{{$program->description}}</p>
                                            <p class="mode-fore-color">{{$program->main_program->title ?? ""}}
                                                <img class="offer-by w-25" src="{{$partner->store_logo}}" alt="">
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            c
                            <a href="{{route('user.msdLive')}}" id="terkini-btn">Tonton Episod MSD Terkini &gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')

@endpush
