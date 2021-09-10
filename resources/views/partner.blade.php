@extends('layouts.main')

@push('style')

@endpush

@section('content')

    <main>
        <div class="main-bg position-relative">
            <div class="container-fluid px-md-5 pt-4 position-absolute top-0">
                <h1 class="text-white mb-0 d-lg-block d-none">PNB &nbsp; ASNB</h1>
            </div>
            <div class="d-flex pt-5 justify-content-center m-auto ">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[5]->slug)}}">
                        <img src="{{$partners[5]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5 me-md-5 pe-md-5 pe-3">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[4]->slug)}}}">
                        <img src="{{$partners[4]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[3]->slug)}}">
                        <img src="{{$partners[3]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center">
                    <p class="text-white text-uppercase mb-0 mt-3"> {{ __('general.partner_rakan') }} <span class="fw-bold">{{ __('general.partner_premier') }} </span></p>
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[6]->slug)}}">
                        <img src="{{$partners[6]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[8]->slug)}}">
                        <img src="{{$partners[8]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex pt-md-5 justify-content-center m-auto rakan-utama">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[4]->slug)}}">
                        <img src="{{$partners[4]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[13]->slug)}}">
                        <img src="{{$partners[13]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[2]->slug)}}">
                        <img src="{{$partners[2]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0"> {{ __('general.partner_rakan') }} <span class="fw-bold">{{ __('general.partner_utama') }}</span></p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[1]->slug)}}">
                        <img src="{{$partners[1]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[10]->slug)}}">
                        <img src="{{$partners[10]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex pt-md-5 justify-content-center m-auto rakan">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[0]->slug)}}">
                        <img src="{{$partners[0]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[7]->slug)}}">
                        <img src="{{$partners[7]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[11]->slug)}}">
                        <img src="{{$partners[11]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0"> {{ __('general.partner_rakan') }}</p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[12]->slug)}}">
                        <img src="{{$partners[12]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[14]->slug)}}">
                        <img src="{{$partners[14]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex pt-md-5 justify-content-center m-auto rakan-acara">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[16]->slug)}}">
                        <img src="{{$partners[16]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[17]->slug)}}">
                        <img src="{{$partners[17]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[18]->slug)}}">
                        <img src="{{$partners[18]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0"> {{ __('general.partner_rakan') }} <span class="fw-bold">{{ __('general.partner_acara') }}</span> </p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[19]->slug)}}">
                        <img src="{{$partners[19]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[20]->slug)}}">
                        <img src="{{$partners[20]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex pt-md-5 justify-content-center m-auto ejen">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[21]->slug)}}">
                        <img src="{{$partners[21]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[22]->slug)}}">
                        <img src="{{$partners[22]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon " alt=""> <br>
                    <a href="{{route('may.bank', $partners[3]->slug)}}">
                        <img src="{{$partners[3]->store_logo}}" class="img-fluid partner-logo " alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0">{{ __('general.partner_ejen') }}</p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[23]->slug)}}">
                        <img src="{{$partners[23]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[24]->slug)}}">
                        <img src="{{$partners[24]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center m-auto">
                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[25]->slug)}}">
                        <img src="{{$partners[25]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[26]->slug)}}">
                        <img src="{{$partners[26]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[27]->slug)}}">
                        <img src="{{$partners[27]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>

                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank', $partners[28]->slug)}}">
                        <img src="{{$partners[28]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>

                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[29]->slug)}}">
                        <img src="{{$partners[29]->store_logo}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="{{route('may.bank',  $partners[30]->slug)}}">
                        <img src="{{$partners[30]->store_logo}}" class="img-fluid partner-logo" alt="">
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
