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
            <div class="container-fluid px-md-5  mt-5">
                <!--<h1 class="heading mb-5 px-md-5">{{ __('general.cabutanbertuah_mainheading') }}</h1>-->
                <div class="row px-md-5 gy-4">
                    <div class="col-lg-5 text-white text-center">
                        <img src="{{asset('assets/img/Lucky-Draw-Logo.png')}}" class="img-fluid">
                        <h3 class="my-3">{{ __('general.cabutanbertuah_title') }}</h3>
                        <p class=" mt-3">
                            {{ __('general.cabutanbertuah_description') }}
                        </p>
                        <a href="{{route('pertandingan')}}" class="tonton-btn d-lg-inline-block d-none"> <i class="bi bi-chevron-left"></i>
                            {{ __('general.back_button_age') }}
                        </a>
                    </div>
                    <div class="col-lg-7 px-5">
                        <h2 class="text-white text-center mt-5 mb-3">{{ __('general.cabutanbertuah_prize') }}</h2>
                        <div class="coin-box p-md-5 p-2 ">
                            <h5 class=" mb-0">
                                {{ __('general.cabutanbertuah_worth') }}
                            </h5>
                            <h1 class="fw-bolder" >RM120,000</h1>
                            <div class="pb-5 mb-3"></div>
                        </div>
                        <div class="text-center family-img">
                            <img src="{{asset('assets/img/family.png')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class=" pt-4 pb-4 ps-md-5 text-center d-lg-none">
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
