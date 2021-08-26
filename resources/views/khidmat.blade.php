@extends('layouts.main')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
@endpush

@section('content')
    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 pt-4">
                <h1 class="text-white mb-0 d-lg-block d-none">PNB &nbsp; ASNB</h1>
            </div>
            <div class="container mt-5">
                <div class="row gy-3">
                    <div class="col-lg-4 pe-lg-5">
                        <div class="d-flex w-100">
                            <h2 class="heading2">Khidmat Nasihat <br> 1-1</h2>
                            <img src="{{asset('assets/img/nasihat2.png')}}" class="img-fluid w-50 d-lg-none" alt="">
                        </div>
                        <img src="{{asset('assets/img/nasihat.png')}}" class="img-fluid mt-5 d-none d-lg-inline-block" alt="">
                    </div>
                    <div class="col-lg-8 text-white" id="khidmat_nasihat_section">
                        <h2>Apa itu Khidmat Nasihat 1-1?</h2>
                        <p>
                            Anda boleh mendapatkan khidmat nasihat dan rundingan peribadi selama 30 minit dengan
                            penasihat-penasihat dari ASNB, AmBank, Bank Islam, CIMB & RHB. Tetapkan awal sesi anda!
                        </p>
                        <div class="khidmat_images">
                            <img src="{{asset('assets/img/ambank.png')}}" class="img-fluid" alt="">
                            <img src="{{asset('assets/img/bankislam.png')}}" class="img-fluid" alt="">
                            <img src="{{asset('assets/img/climb.png')}}" class="img-fluid" alt="">
                            <img src="{{asset('assets/img/rhb.png')}}" class="img-fluid" alt="">
                        </div>
                        <p>Penasihat daripada Ejen Bank kami yang pakar sedia membantu anda mengenai perkara-perkara
                            berikut:</p>
                        <h2>Pembiayaan ASB</h2>
                        <p>Penasihat akan berkongsi tentang faedah pembiayaan ASB dan cara memohonnya</p>
                        <h2>Unit Amanah ASNB</h2>
                        <p>Khidmat nasihat peribadi mengenai perancangan kewangan melalui Unit Amanah ASNB</p>
                        <button id="tetapkan_btn"  onclick="showForm()" class="theme-btn">Tetapkan Temujanji Anda Sekarang ></button>
                    </div>
                    <div class="col-lg-8 text-white" id="tetapkan_section">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="mb-3">Tetapkan temujanji 1-1 anda</h3>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Nama">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="" id="" placeholder="E-mel">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Nombor Telefon">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Agensi yang anda ingin menempah">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Topik yang diminati">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="" id="" placeholder="Ejen">
                                    </div>
                                </div>
                                <div class="col-md-6 px-5">
                                    <h5 class="mb-3">Tarikh</h5>
                                    <div id="datepicker" data-date="12/03/2012"></div>
                                    <input type="hidden" id="my_hidden_input">
                                    <h5 class="mt-3">Masa</h5>
                                    <div class="d-flex">
                                        <div class="owl-carousel time-piker">
                                            <div>12.00 AM</div>
                                            <div>1.00 AM</div>
                                            <div>2.00 AM</div>
                                            <div>3.00 AM</div>
                                            <div>4.00 AM</div>
                                            <div>5.00 AM</div>
                                            <div>6.00 AM</div>
                                            <div>7.00 AM</div>
                                            <div>8.00 AM</div>
                                            <div>9.00 AM</div>
                                            <div>10.00 AM</div>
                                            <div>11.00 AM</div>
                                            <div>12.00 PM</div>
                                            <div>1.00 PM</div>
                                            <div>2.00 PM</div>
                                            <div>3.00 PM</div>
                                            <div>4.00 PM</div>
                                            <div>5.00 PM</div>
                                            <div>6.00 PM</div>
                                            <div>7.00 PM</div>
                                            <div>8.00 PM</div>
                                            <div>9.00 PM</div>
                                            <div>10.00 PM</div>
                                            <div>11.00 PM</div>
                                        </div>
                                        <input class="submit-btn ms-2" type="submit" value="Hantar">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button id="back_btn" onclick="backButton()"><i class="bi bi-chevron-left"></i>Kembali</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')
    <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
            integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#datepicker').datepicker();
        $('#datepicker').on('changeDate', function () {
            $('#my_hidden_input').val(
                $('#datepicker').datepicker('getFormattedDate')
            );
        });

        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop:true,
                nav:true,
                items: 3,
                dots:false,
                center:true,
            });

        });
    </script>
    <script>
        function showForm(){
            $("#khidmat_nasihat_section").css("display","none");
            $("#tetapkan_section").css("display","block");
        }

        function backButton(){
            $("#khidmat_nasihat_section").css("display","block");
            $("#tetapkan_section").css("display","none");
        }
    </script>
@endpush
