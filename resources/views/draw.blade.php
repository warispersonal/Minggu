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
                <h1 class="text-white mb-0 d-lg-block d-none">PNB &nbsp; ASNB</h1>
            </div>
            <div class="container mt-5">
                <h1 class="heading mb-5">{{ __('general.draw_mainheading') }}</h1>
                <div class="row gy-4">
                    <div class="col-lg-5 text-white">
                        <h3>
                            {{ __('general.draw_title') }}
                        </h3>
                        <p class=" mt-3">
                            {{ __('general.draw_description') }}
                        </p>
                    </div>
                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="cars-row h-100 my-0">
                            <div class="d-flex align-items-center justify-content-around p-md-3 p-2">
                                <div>
                                    <img src="{{asset('assets/img/raiz-logo.png')}}" class="img-fluid" alt="">
                                </div>
                                <div>
                                    <div class="car-details">
                                        <h5>
                                            {{ __('general.draw_worth') }}
                                        </h5>
                                        <h1>RM180,000</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 pt-5">
                    <a href="{{route('sertai.sekarang')}}" class="tonton-btn"> <i class="bi bi-chevron-left"></i>
                        {{ __('general.draw_text') }}
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')

@endpush
