@extends('layouts.main')

@push('style')

@endpush

@section('content')

    <main>
        <div class="main-bg position-relative">
            <div class="container-fluid px-md-5 pt-4">
                <div class="d-lg-block d-none">
                    <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-4">
                    <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="pt-md-5 baloons-container">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[5]->slug)}}">
                        <img src="{{$partners[5]->main_logo}}" class="img-fluid partner-logo " alt="">
                    </a>
                </div>
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[4]->slug)}}">
                        <img src="{{$partners[4]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class=" pt-md-5 rakan-utama baloons-container">
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[3]->slug)}}">
                        <img src="{{$partners[3]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center">
                    <p class="text-white text-uppercase mb-0 mt-3"> {{ __('general.partner_rakan') }} <span class="fw-bold">{{ __('general.partner_premier') }} </span></p>
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[6]->slug)}}">
                        <img src="{{$partners[6]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[8]->slug)}}">
                        <img src="{{$partners[8]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class=" pt-md-5 rakan-utama baloons-container">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[9]->slug)}}">
                        <img src="{{$partners[9]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[13]->slug)}}">
                        <img src="{{$partners[13]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[2]->slug)}}">
                        <img src="{{$partners[2]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0"> {{ __('general.partner_rakan') }} <span class="fw-bold">{{ __('general.partner_utama') }}</span></p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[1]->slug)}}">
                        <img src="{{$partners[1]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[10]->slug)}}">
                        <img src="{{$partners[10]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class=" pt-md-5 rakan baloons-container">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[0]->slug)}}">
                        <img src="{{$partners[0]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[7]->slug)}}">
                        <img src="{{$partners[7]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[11]->slug)}}">
                        <img src="{{$partners[11]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0"> {{ __('general.partner_rakan') }}</p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[12]->slug)}}">
                        <img src="{{$partners[12]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[14]->slug)}}">
                        <img src="{{$partners[14]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class=" pt-md-5 rakan-acara baloons-container">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[16]->slug)}}">
                        <img src="{{$partners[16]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[17]->slug)}}">
                        <img src="{{$partners[17]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[18]->slug)}}">
                        <img src="{{$partners[18]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0"> {{ __('general.rakan_acara_1') }} <span class="fw-bold">{{ __('general.rakan_acara_2') }}</span> </p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[19]->slug)}}">
                        <img src="{{$partners[19]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[20]->slug)}}">
                        <img src="{{$partners[20]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class=" pt-md-5 ejen baloons-container">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[21]->slug)}}">
                        <img src="{{$partners[21]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[22]->slug)}}">
                        <img src="{{$partners[22]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon " alt=""> <br>
                    <a href="{{route('may.bank', $partners[3]->slug)}}">
                        <img src="{{$partners[3]->main_logo}}" class="img-fluid partner-logo " alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0">{{ __('general.partner_ejen') }}</p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[23]->slug)}}">
                        <img src="{{$partners[23]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[24]->slug)}}">
                        <img src="{{$partners[24]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class=" baloons-container">
                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[25]->slug)}}">
                        <img src="{{$partners[25]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[26]->slug)}}">
                        <img src="{{$partners[26]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[27]->slug)}}">
                        <img src="{{$partners[27]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>

                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[28]->slug)}}">
                        <img src="{{$partners[28]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[29]->slug)}}">
                        <img src="{{$partners[29]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[30]->slug)}}">
                        <img src="{{$partners[30]->main_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <footer class="partner-footer">

            </footer>
        </div>
    </main>

@endsection

@push('js')
@endpush
