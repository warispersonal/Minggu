@extends('layouts.main')

@push('style')

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
            <div class="container mt-5">
                <div class="row gy-4">
                    <div class="col-lg-5 pt-4 pe-lg-5">
                        <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                        <p class="text-white mt-4 text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Dolorem quis, deleniti id voluptatem necessitatibus eos animi voluptatibus, amet itaque illo
                            dolorum excepturi quam aperiam blanditiis? Ipsa, ut veritatis! Cum, aut. Lorem ipsum, dolor
                            sit amet consectetur adipisicing elit. Quisquam molestiae deserunt atque dolore optio eos
                            assumenda rerum voluptates commodi impedit dicta officia dignissimos dolorum exercitationem
                            voluptatibus, asperiores quas similique vel!</p>
                        <div class="mt-4 text-center">
                            <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block">Sertai Sekarang!</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cars-row">
                            <div class="d-flex align-items-end p-md-3 p-2">
                                <div>
                                    <img src="{{asset('assets/img/car1.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>FORD Ranger</h4>
                                        <p>2.0L XLT Plus 4WD (10AT)</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/car3.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>PERODUA Aruz</h4>
                                        <p>1.5 AV (AT)</p>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/car2.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>TOYOTA Vios</h4>
                                        <p>1.5 G (AT)</p>
                                    </div>
                                </div>
                                <div class="info_iconn info_iconn_1">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>
                        </div>
                        <div class="cars-row">
                            <div class="d-flex align-items-center justify-content-around p-md-3 p-2">
                                <div>
                                    <img src="{{asset('assets/img/raiz-logo')}}.png" class="img-fluid" alt="">

                                </div>
                                <div>
                                    <div class="car-details">
                                        <h5>E-Baucar Lazada
                                            Bernilai Lebih Daripada</h5>
                                        <h1>RM180,000</h1>
                                    </div>
                                </div>
                                <div class="info_iconn info_iconn_2">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>

                        </div>
                        <div class="cars-row">
                            <a href="" class="ringgit-btn">Ringgit Emas</a>
                            <div class="d-flex align-items-end p-md-3 p-2">
                                <div>
                                    <img src="{{asset('assets/img/bike.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>HONDA Dash 125 S</h4>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/bike.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>HONDA Dash 125 S</h4>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/bike.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>HONDA Dash 125 S</h4>

                                    </div>
                                </div>
                                <div>
                                    <img src="{{asset('assets/img/bike.png')}}" class="img-fluid" alt="">
                                    <div class="car-details">
                                        <h4>HONDA Dash 125 S</h4>

                                    </div>
                                </div>
                                <div class="info_iconn info_iconn_3">
                                    <span class="bi bi-info"></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="jomkira-modal jomkira-modal-1" style="top: 150%;">
        
        <div class="jomkira-modal-content">
            <div class="d-flex justify-content-between">
                <h3>Cara Penyertaan</h3>
                <i class="bi bi-x close_btn"></i>
            </div>
            <h3 class="fw-bolder">Jom... Kira Duit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque accusantium earum, pariatur, ullam
                corporis id facilis alias aliquam aspernatur in necessitatibus impedit quisquam, itaque nihil unde. Iste
                porro recusandae optio.</p>
                <div class="mt-4">
                    <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block">Sertai sekarang!</a>
                </div>
        </div>
    </div>
    <div class="jomkira-modal jomkira-modal-2" style="top: 150%;">
        <div class="jomkira-modal-content">
            <div class="d-flex justify-content-between">
                <h3>Cara Penyertaan</h3>
                <i class="bi bi-x close_btn"></i>
            </div>
            <h3 class="fw-bolder">Jom... Kira Duit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque accusantium earum, pariatur, ullam
                corporis id facilis alias aliquam aspernatur in necessitatibus impedit quisquam, itaque nihil unde. Iste
                porro recusandae optio.</p>
            <div class="mt-4">
                    <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block">Sertai sekarang!</a>
            </div>
        </div>
    </div>
    <div class="jomkira-modal jomkira-modal-3" style="top: 150%;">
        <div class="jomkira-modal-content">
            <div class="d-flex justify-content-between">
                <h3>Cara Penyertaan</h3>
                <i class="bi bi-x close_btn"></i>
            </div>
            <h3 class="fw-bolder">Jom... Kira Duit</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque accusantium earum, pariatur, ullam
                corporis id facilis alias aliquam aspernatur in necessitatibus impedit quisquam, itaque nihil unde. Iste
                porro recusandae optio.</p>
            <div class="mt-4">
                    <a href="{{route('sertai.sekarang')}}" class="sertai-btn d-inline-block">Sertai sekarang!</a>
                </div>
        </div>
    </div>


@endsection


@push('js')
    <script>
        $(".info_iconn_1").click(function () {
            $(".jomkira-modal-1").css("top", "45%")
            setTimeout(() => {
                $(".jomkira-modal-1").css("top", "50%")
            }, 300);
            $(".overlay").show()
        })
        $(".info_iconn_2").click(function () {
            $(".jomkira-modal-2").css("top", "45%")
            setTimeout(() => {
                $(".jomkira-modal-2").css("top", "50%")
            }, 300);
            $(".overlay").show()
        })
        $(".info_iconn_3").click(function () {
            $(".jomkira-modal-3").css("top", "45%")
            setTimeout(() => {
                $(".jomkira-modal-3").css("top", "50%")
            }, 300);
            $(".overlay").show()
        })
        $(".overlay").click(function () {
            $(".overlay").hide()
            $(".jomkira-modal").css("top", "150%")
        })
        $(".close_btn").click(function () {
            $(".overlay").hide()
            $(".jomkira-modal").css("top", "150%")
        })
    </script>
@endpush
