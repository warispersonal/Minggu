@extends('layouts.main')

@push('style')

@endpush

@section('content')

<main>
    <div class="main-bg">
        <div class="container-fluid px-md-5 pt-4">
            <div class="d-flex justify-content-between">
                <h1 class="text-white">PNB &nbsp; ASNB</h1>
                <div class="text-white">
                    <small>EM | EN</small>
                </div>
            </div>
        </div>
        <div class="container mt-5 text-white">
            <div class="row gy-3">
                <div class="col-md-4">
                    <img src="{{asset('assets/img/msd_logo.png')}}" class="img-fluid" alt="">
                    <h1 class="msd_title mb-4">MSD 2021</h1>
                    <h2 class="mb-4">Tonton Secara Langsung di</h2>
                    <div class="social_address">
                        <p>
                            <img src="{{ asset('assets/front/img/facbook.png') }}" class="img-fluid" alt=""> &nbsp;
                            / MingguSahamDigital
                        </p>
                        <p>
                            <img src="{{ asset('assets/front/img/insta.png') }}" alt=""> &nbsp;
                            @MingguSahamDigital
                        </p>
                        <p>
                            <img src="{{ asset('assets/front/img/youtube.png') }}" alt=""> &nbsp;
                            Minggu Saham Digital
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ratio ratio-16x9">
                        <iframe src="{{ $data['link']->value }}"
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
