@extends('layouts.main')

@push('style')
    <style>
        .main-bg{
            background-color: #FFC600;
        }
        .mobile-header{
            background-color: #FFC600;
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
            <div class="container mt-5 pb-5">
                <div id="may_bank_tabs">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-maklumat-tab" data-bs-toggle="tab" data-bs-target="#nav-maklumat" type="button" role="tab" aria-controls="nav-maklumat" aria-selected="true">Maklumat</button>
                            <button class="nav-link" id="nav-program-tab" data-bs-toggle="tab" data-bs-target="#nav-program" type="button" role="tab" aria-controls="nav-program" aria-selected="false">Program</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-maklumat" role="tabpanel" aria-labelledby="nav-maklumat-tab">
                            <div class="row mt-4">
                                <div class="col-lg-4">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{asset('assets/img/slider-img.png')}}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('assets/img/slider-img.png')}}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{asset('assets/img/slider-img.png')}}" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    <div class="text-center mt-4 p-4">
                                        <img src="{{asset('assets/img/maybank-3.png')}}" class="img-fluid" alt="">
                                    </div>
                                    <div class="my-4">
                                        <p class="justify text-dark">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur architecto eaque dolorum ab quae! Omnis harum et consequatur sint esse, pariatur ipsa voluptates provident sunt ipsum nostrum nisi odit nemo blanditiis ducimus accusantium dolorem obcaecati iste sit iure perferendis. Placeat, tempore nam? Porro amet ullam, reiciendis quibusdam quod nulla ratione.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://player.vimeo.com/video/19198496" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                    <div class="custom-links">
                                        <a href="">Pautan 1</a>
                                        <a href="">Pautan 2</a>
                                        <a href="">Pautan 3</a>
                                        <span>Custom Links</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade " id="nav-program" role="tabpanel" aria-labelledby="nav-program-tab">
                            <div class="row mt-4 gy-4">
                                <div class="col-lg-6">
                                    <div class="program_video-box ">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://player.vimeo.com/video/19198496" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                        <h3 class="my-3">Nama Program 1</h3>
                                        <span><strong>3.00 petang </strong> •  Rabu  •  1 Sep 2021</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda harum iusto neque dolor distinctio blanditiis et nesciunt consectetur corporis hic sequi cumque, repudiandae aliquam ex dolores. Adipisci aut assumenda molestias voluptas suscipit neque </p>
                                        <p>Dibawakan Khas Oleh <img src="img/asnb.png" alt=""></p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="program_video-box ">
                                        <div class="ratio ratio-16x9">
                                            <iframe src="https://player.vimeo.com/video/19198496" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe>
                                        </div>
                                        <h3 class="my-3">Nama Program 1</h3>
                                        <span><strong>3.00 petang </strong> •  Rabu  •  1 Sep 2021</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, assumenda harum iusto neque dolor distinctio blanditiis et nesciunt consectetur corporis hic sequi cumque, repudiandae aliquam ex dolores. Adipisci aut assumenda molestias voluptas suscipit neque </p>
                                        <p>Dibawakan Khas Oleh <img src="img/asnb.png" alt=""></p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('user.msdLive')}}" id="terkini-btn">Tonton Episod MSD Terkini &gt;</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')

@endpush
