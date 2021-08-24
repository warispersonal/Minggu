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
                <div class="d-flex justify-content-md-between align-items-center">
                    <h1 class="text-white mb-0">PNB &nbsp; ASNB</h1>
                    <div class="text-white ms-3">
                        <small>EM | EN</small>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h1 class="heading">Pertandingan</h1>
                    </div>
                    <div class="col-lg-6  order-lg-2 order-4  d-flex align-items-center">
                        <div class="match_links">
                            <a href="{{route('jom.kira')}}" class="cursor-pointer">Jom... Kira Duit</a>
                            <a href="" class="cursor-pointer">Quiz Trivia</a>
                            <a href="" class="cursor-pointer">Draw 118</a>
                        </div>
                    </div>
                    <div class="col-lg-7 order-3 px-0 px-lg-3">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://player.vimeo.com/video/19198496" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5  order-2 order-lg-4">
                        <div class="side-text">
                            <h1>Hadiah-hadiah
                                Bernilai Lebih
                                Daripada
                                <span class="oyen">RM500,000</span>
                                Untuk
                                Dimenangi</h1>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>
@endsection


@push('js')

@endpush
