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
            <div class="container mt-5 text-white">
                <div class="row gy-3">
                    <div class="col-md-4">

                        <img src="{{asset('assets/img/msd-logo.png')}}" class="img-fluid w-75" alt="">
                        <h4 class="my-4">Boleh juga ditonton menerusi:</h4>
                        <div class="social_address">
                            <p>
                                <img src="{{asset('assets/img/facbook.png')}}" class="img-fluid " alt=""> &nbsp;
                                / MingguSahamDigital
                            </p>
                            <p>
                                <img src="{{asset('assets/img/insta.png')}}" alt=""> &nbsp;
                                @MingguSahamDigital
                            </p>
                            <p>
                                <img src="{{asset('assets/img/youtube.png')}}" alt=""> &nbsp;
                                Minggu Saham Digital
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://player.vimeo.com/video/6268154"
                                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection


@push('js')

@endpush
