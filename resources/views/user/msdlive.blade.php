@extends('layouts.main')

@section('content')

    <main>
        <div class="main-bg">
            <!--<div class="container-fluid px-md-5 pt-4">-->
            <!--    <div class="d-lg-block d-none">-->
            <!--        <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">-->
            <!--        <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="container-fluid px-md-5 mt-5 text-white">
                <div class="row gy-3 px-md-5">
                    <div class="col-lg-4">

                        <img src="{{asset('assets/img/msd-logo.png')}}" class="img-fluid w-75  d-block" alt="">
                        <div class="social_address d-none d-lg-block">
                            <h4 class="my-4">{{ __('general.social_heading') }}</h4>
                            <p>
                                <img src="{{asset('assets/img/facbook.png')}}" class="img-fluid " alt=""> &nbsp;
                                <a target="_blank" href="https://www.facebook.com/minggusahamdigital"> @MingguSahamDigital </a>
                            </p>
                            <p>
                                <img src="{{asset('assets/img/insta.png')}}" alt=""> &nbsp;
                                <a target="_blank" href="https://www.instagram.com/minggusahamdigital/"> @MingguSahamDigital </a>
                            </p>
                            <p>
                                <img src="{{asset('assets/img/youtube.png')}}" alt=""> &nbsp;
                                <a target="_blank" href="https://www.youtube.com/channel/UCoNCjruylHYpwBYkIvRwClA"> Minggu Saham Digital </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8 px-lg-2 px-0 ">
                        <div class="ratio ratio-16x9">
                            <?php
                            use Embera\Embera;$embera = new Embera();
                            print_r($embera->autoEmbed($setting->value));
                            ?>

                        </div>
                    </div>
                    <div class="col-12 d-lg-none">
                        <div class="social_address">
                            <h4 class="my-4">{{ __('general.social_heading') }}</h4>
                            <p>
                                <img src="{{asset('assets/img/facbook.png')}}" class="img-fluid " alt=""> Facebook
                                &nbsp;
                                <a href="https://www.facebook.com/minggusahamdigital"> @MingguSahamDigital </a>
                            </p>
                            <p>
                                <img src="{{asset('assets/img/insta.png')}}" alt=""> Instagram &nbsp;
                                <a href="https://www.instagram.com/minggusahamdigital/"> @MingguSahamDigital </a>
                            </p>
                            <p>
                                <img src="{{asset('assets/img/youtube.png')}}" alt=""> Youtube &nbsp;
                                <a href="https://www.youtube.com/channel/UCoNCjruylHYpwBYkIvRwClA"> Minggu Saham Digital </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection


@push('js')

@endpush
