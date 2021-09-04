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
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/pnb-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5 me-md-5 pe-md-5 pe-3">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/asnb-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/may-bank-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center">
                    <p class="text-white text-uppercase mb-0 mt-3">Rakan <span class="fw-bold">Premier</span></p>
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/plantation-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/umw-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex pt-md-5 justify-content-center m-auto rakan-utama">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/midf-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/perodua-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/setia-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0">Rakan <span class="fw-bold">Utama</span></p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/sustainable-future-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/property-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex pt-md-5 justify-content-center m-auto rakan">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/duopharma-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/mnrb-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/prolintas-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0">Rakan</p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/sapura-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/velesto-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex pt-md-5 justify-content-center m-auto rakan-acara">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/asia-school-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/attana-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/jewel-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0">Rakan <span class="fw-bold">Acara</span> </p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/merdeka-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/raiz-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex pt-md-5 justify-content-center m-auto ejen">
                <div class="text-center">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/ambank-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/climb-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon " alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/may-bank-part.png')}}" class="img-fluid partner-logo " alt="">
                    </a>
                    <p class="text-white text-uppercase mb-0">Ejen</p>
                </div>
                <div class="text-center mt-5">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/pos-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/rhb-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
            </div>
            <div class="d-flex justify-content-center m-auto">
                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/affin-bank-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/allaince-bank-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/bank-islam-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>

                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/bank-muamlat-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>

                <div class="text-center mt-4">
                    <img src="{{asset('assets/img/balloon.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/bsn-part.png')}}" class="img-fluid partner-logo" alt="">
                    </a>
                </div>
                <div class="text-center ">
                    <img src="{{asset('assets/img/balloon2.png')}}" class="img-fluid baloon" alt=""> <br>
                    <a href="">
                        <img src="{{asset('assets/img/partner-logos/hongleong-bank-part.png')}}" class="img-fluid partner-logo" alt="">
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
