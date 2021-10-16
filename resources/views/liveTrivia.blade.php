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
            <div class="container-fluid px-md-5 mt-5">
                <!--<h1 class="heading mb-5 px-md-5">-->
                <!--    {{ __('general.livetrivia_mainheading') }}-->
                <!--</h1>-->
                <div class="row px-md-5 gy-4">
                    <div class="col-lg-5 text-white text-center">
                        <img src="{{asset('assets/img/Live-Trivia-Logo.png')}}" class="img-fluid">
                        <h3>
                            {{ __('general.livetrivia_title') }}
                        </h3>
                        <p class=" mt-3">
                            {!! __('general.livetrivia_description') !!}
                        </p>
                        <a href="https://msd2021demo.com/terms/termadansyarat.pdf" class="text-white">{{ __('general.pdf_livetrivia') }}</a> <br>
                        <a href="{{route('pertandingan')}}" class="tonton-btn d-lg-inline-block d-none"> <i class="bi bi-chevron-left"></i>
                            {{ __('general.back_button_age') }}
                        </a>
                    </div>
                    <div class="col-lg-7 px-5 ">
                        <h2 class="text-white text-center mt-5 mb-3">{{ __('general.livetrivia_prize') }}</h2>
                        <div class="coin-box p-md-5 p-2">
                            <h5 class="">
                                {{ __('general.livetrivia_worth') }} 
                            </h5>
                            <h1 class="fw-bolder"> RM20,000</h1>
                            <div class="pb-5 mb-3"></div>
                        </div>
                        <div class="text-center family-img">
                            <img src="{{asset('assets/img/family.png')}}" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class=" pt-4 pb-4 ps-md-5 d-lg-none text-center">
                    <a href="{{route('pertandingan')}}" class="tonton-btn"> <i class="bi bi-chevron-left"></i>
                        {{ __('general.back_button_age') }}
                    </a>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
@endsection


@push('js')

@endpush
