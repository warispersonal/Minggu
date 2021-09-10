@extends('layouts.main')

@push('style')
    <style>
        .main-bg {
            background-color: {{$partner->bg_color ?? "blue"}}     !important;
        }

        .mode-fore-color {
            color: {{$partner->mode == 1 ? "#000000" : "#FFFFFF"}}     !important;
        }

        .mode-bg-color {
            background-color: {{$partner->mode == 1 ? "#fff4f4" : "#4ac4e2"}}  !important;
        }

        .mobile-header {
            background-color: #FFC600;
        }

        .embera-embed-responsive-item {
            width: 420px;
            height: 345px;
        }
     
        #may_bank_tabs .nav-link {
            color: {{$partner->mode == 1 ? "#000000" : "#FFFFFF"}}     !important;
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
            <div class="container mt-5 pb-5 px-md-0">

                <div id="may_bank_tabs">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active mode-fore-color" id="nav-maklumat-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-maklumat" type="button" role="tab" aria-controls="nav-maklumat"
                                    aria-selected="true">Maklumat
                            </button>
                            <button class="nav-link mode-fore-color" id="nav-program-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-program" type="button" role="tab" aria-controls="nav-program"
                                    aria-selected="false">Program
                            </button>
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
                                    <div class="text-center mt-4 p-4">
                                        <img src="{{$partner->store_logo}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="my-4">
                                        <p class="justify mode-fore-color">
                                            {{Config::get('app.locale') == 'en' ? $partner->description:$partner->description_bm }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-8 ps-md-4">
                                    <div class="ratio ratio-16x9">
                                        <?php
                                        print_r($partner->video_url);
                                        ?>
                                    </div>
                                    <div class="custom-links">
                                        @if($partner->fb != "")
                                            @if($partner->mode)
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->fb}}"><i class="fab fa-2x fa-facebook"></i></a>
                                            @else
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->fb}}"> <i class="fab fa-2x fa-facebook"></i></a>
                                            @endif
                                        @endif
                                        @if($partner->insta != "")
                                            @if($partner->mode)
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->insta}}"><i class="fab fa-2x fa-instagram"></i></a>
                                            @else
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->insta}}"><i class="fab fa-2x fa-instagram"></i></a>
                                            @endif
                                        @endif
                                        @if($partner->twitter != "")
                                            @if($partner->mode)
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->twitter}}"><i class="fab fa-2x fa-twitter"></i></a>
                                            @else
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->twitter}}"><i class="fab fa-2x fa-twitter"></i></a>
                                            @endif
                                        @endif
                                        @if($partner->youtube != "")
                                            @if($partner->mode)
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->youtube}}"><i class="fab fa-2x fa-youtube"></i></a>
                                            @else
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->youtube}}"><i class="fab fa-2x fa-youtube"></i></a>
                                            @endif
                                        @endif
                                        @if($partner->website != "")
                                            @if($partner->mode)
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->website}}">{{ __('general.website') }}</a>
                                            @else
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->website}}">{{ __('general.website') }}</a>
                                            @endif
                                        @endif
                                        @if($partner->careers != "")
                                            @if($partner->mode)
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->careers}}">{{ __('general.careers') }}</a>
                                            @else
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->careers}}">{{ __('general.careers') }}</a>
                                            @endif
                                        @endif
                                        @if($partner->contact_us != "")
                                            @if($partner->mode)
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->contact_us}}">{{ __('general.contact_us') }}</a>
                                            @else
                                                <a target="_blank" class="mode-fore-color mode-bg-color" href="{{$partner->contact_us}}">{{ __('general.contact_us') }}</a>
                                            @endif
                                        @endif
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
                                                <?php print_r($program->video_url); ?>
                                            </div>
                                            <h3 class="my-3 mode-fore-color">{{$program->title}}</h3>
                                            <span><strong class="mode-fore-color">{{$program->date}}</strong></span>
                                            <p class="mode-fore-color">{{$program->description}}</p>
                                            <p class="mode-fore-color">{{$program->main_program->title}}
                                                <img class="offer-by w-25" src="{{$partner->store_logo}}" alt="">
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
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
