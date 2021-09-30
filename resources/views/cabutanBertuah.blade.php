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
            <!--<div class="container-fluid px-md-5 pt-4">-->
            <!--    <div class="d-lg-block d-none">-->
            <!--        <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">-->
            <!--        <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="container-fluid px-md-5  mt-5">
                <h1 class="heading mb-5 px-md-5">{{ __('general.cabutanbertuah_mainheading') }}</h1>
                <div class="row px-md-5 gy-4">
                    <div class="col-lg-5 text-white">
                        <h3>{{ __('general.cabutanbertuah_title') }}</h3>
                        <p class=" mt-3">
                            {{ __('general.cabutanbertuah_description') }}
                        </p>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="cars-row my-0">
                            <div class=" p-md-5 p-2"> 
                                <div class="car-details justify-content-around">
                                    <h3 class="mx-auto mb-0">
                                        {{ __('general.cabutanbertuah_worth') }}
                                    </h3>
                                    <h1>RM100,000</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 pt-5 ps-md-5">
                    <a href="{{route('pertandingan')}}" class="tonton-btn"> <i class="bi bi-chevron-left"></i>
                        {{ __('general.back_button_age') }}
                    </a>
                </div>
            </div>
        </div>
    </main>

@endsection


@push('js')

@endpush
