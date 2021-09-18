@extends('layouts.main')

@push('style')
    <style>
        .main-bg {
            background-color: #0057B7 !important;
        }
    </style>
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
            <div class="container mt-5 pb-5">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <h1 class="heading">{{__('general.pertandingan_title')}}</h1>
                    </div>
                    <div class="col-lg-7  order-lg-2 order-4  d-flex align-items-center">
                        <div class="match_links ">
                            <a href="{{route('jom.kira')}}">{{ __('general.the_match_button_1') }}</a>
                            <a href="{{route('liveTrivia')}}">{{ __('general.the_match_button_2') }}</a>
                            <a href="{{route('draw')}}">{{ __('general.the_match_button_3') }}</a>
                            <a href="{{route('cabutanBertuah')}}">{{ __('general.the_match_button_4') }}</a>
                        </div>
                    </div>
                    <div class="col-lg-7 order-3 px-0 px-lg-3">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://player.vimeo.com/video/469418763"  frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5  order-2 order-lg-4">
                        <div class="side-text">
                            <h1>{!! __('general.pertandingan') !!}</h1>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>
@endsection


@push('js')

@endpush
