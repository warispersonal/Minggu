@extends('layouts.main')

@push('style')
    <style>
        .main-bg {
            background-color: #0057B7 !important;
        }
    </style>
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
                <div class="row">
                    <div class="col-lg-3">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div class="tabs">
                                <h1 id="program" class="active_tab">Program</h1>
                                <h1 id="jadual">Jadual</h1>
                            </div>
                            <a href="{{route('user.msdLive')}}" class="tonton-btn m-0 d-none d-lg-block">Tonton semu episod lalo
                                ></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="program_content">
                            <img src="{{asset('assets/img/img1.png')}}" class="img1" alt="">
                            <img src="{{asset('assets/img/img2.png')}}" class="img2" alt="">
                            <img src="{{asset('assets/img/img3.png')}}" class="img3" alt="">
                            <img src="{{asset('assets/img/img4.png')}}" class="img4" alt="">
                            <img src="{{asset('assets/img/img5.png')}}" class="img5" alt="">
                            <img src="{{asset('assets/img/img6.png')}}" class="img6" alt="">
                            <img src="{{asset('assets/img/img7.png')}}" class="img7" alt="">
                            <img src="{{asset('assets/img/img8.png')}}" class="img8" alt="">
                            <img src="{{asset('assets/img/img9.png')}}" class="img9" alt="">
                            <img src="{{asset('assets/img/img10.png')}}" class="img10" alt="">
                            <img src="{{asset('assets/img/img11.png')}}" class="img11" alt="">
                            <img src="{{asset('assets/img/img12.png')}}" class="img12" alt="">
                            <img src="{{asset('assets/img/img13.png')}}" class="img13" alt="">
                            <img src="{{asset('assets/img/img14.png')}}" class="img14" alt="">
                            <img src="{{asset('assets/img/img15.png')}}" class="img15" alt="">
                            <img src="{{asset('assets/img/img16.png')}}" class="img16" alt="">
                            <img src="{{asset('assets/img/img17.png')}}" class="img17" alt="">
                            <img src="{{asset('assets/img/img18.png')}}" class="img18" alt="">
                            <img src="{{asset('assets/img/img19.png')}}" class="img19" alt="">
                            <img src="{{asset('assets/img/img20.png')}}" class="img20" alt="">
                        </div>
                        <div id="jadual_content">
                            <div class="d-lg-flex d-none align-items-start  jadual-desktop">
                                <div class="nav flex-column nav-pills me-5" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-rabu-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-rabu" type="button" role="tab"
                                            aria-controls="v-pills-rabu" aria-selected="true">Rabu, 1 Sep 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-khamis-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-khamis" type="button" role="tab"
                                            aria-controls="v-pills-khamis" aria-selected="false">Khamis, 2 Sep 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-jumaat-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-jumaat" type="button" role="tab"
                                            aria-controls="v-pills-jumaat" aria-selected="false">Jumaat, 3 Sep 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-sabtu-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-sabtu" type="button" role="tab"
                                            aria-controls="v-pills-sabtu" aria-selected="false">Sabtu, 4 Sep 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-ahad-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-ahad" type="button" role="tab"
                                            aria-controls="v-pills-ahad" aria-selected="false">Ahad, 5 Sep 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-isinin-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-isinin" type="button" role="tab"
                                            aria-controls="v-pills-isinin" aria-selected="false">Isinin, 6 Sep 2021
                                    </button>
                                    <button class="nav-link" id="v-pills-selasa-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-selasa" type="button" role="tab"
                                            aria-controls="v-pills-selasa" aria-selected="false">Selasa, 4 Sep 2021
                                    </button>
                                </div>
                                <div class="tab-content" id="jadual_tabs_content">
                                    <div class="tab-pane fade show active" id="v-pills-rabu" role="tabpanel"
                                         aria-labelledby="v-pills-rabu-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je! <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-khamis" role="tabpanel"
                                         aria-labelledby="v-pills-khamis-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je! <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-jumaat" role="tabpanel"
                                         aria-labelledby="v-pills-jumaat-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je! <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-sabtu" role="tabpanel"
                                         aria-labelledby="v-pills-sabtu-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je! <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-ahad" role="tabpanel"
                                         aria-labelledby="v-pills-ahad-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je! <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-isinin" role="tabpanel"
                                         aria-labelledby="v-pills-isinin-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je! <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-selasa" role="tabpanel"
                                         aria-labelledby="v-pills-selasa-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je! <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical <small>Dibawakan khas oleh PNB</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="owl-carousel d-lg-none nav nav-pills mb-3 jadual-mobile" id="pills-tab"
                                role="tablist">
                                <div>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true">Rabu, 1 Sep 2021
                                        </button>
                                    </li>
                                </div>

                                <div>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">Khamis, 2 Sep
                                            2021
                                        </button>
                                    </li>
                                </div>

                                <div>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact" type="button" role="tab"
                                                aria-controls="pills-contact" aria-selected="false">Jumaat, 3 Sep
                                            2021
                                        </button>
                                    </li>
                                </div>

                                <div>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact2" type="button" role="tab"
                                                aria-controls="pills-contact2" aria-selected="false">Sabtu, 4 Sep
                                            2021
                                        </button>
                                    </li>
                                </div>

                                <div>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact3-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact3" type="button" role="tab"
                                                aria-controls="pills-contact3" aria-selected="false">Ahad, 5 Sep
                                            2021
                                        </button>
                                    </li>
                                </div>

                                <div>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact4-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact4" type="button" role="tab"
                                                aria-controls="pills-contact4" aria-selected="false">Isinin, 6 Sep
                                            2021
                                        </button>
                                    </li>
                                </div>
                                <div>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact5-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact5" type="button" role="tab"
                                                aria-controls="pills-contact5" aria-selected="false">Selasa, 7 Sep
                                            2021
                                        </button>
                                    </li>
                                </div>

                            </ul>
                            <div class="tab-content d-lg-none" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                     aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                     aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                     aria-labelledby="pills-contact-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel"
                                     aria-labelledby="pills-contact2-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact3" role="tabpanel"
                                     aria-labelledby="pills-contact3-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact4" role="tabpanel"
                                     aria-labelledby="pills-contact4-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact5" role="tabpanel"
                                     aria-labelledby="pills-contact5-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je! <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical <br> <small>Dibawakan khas oleh PNB</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <span id="close-btn" class="bi bi-x"></span>
    <div id="program-modal">
        <div class="program-modal-content">

            <div class="ratio ratio-16x9">
                <iframe src="https://player.vimeo.com/video/19198496" frameborder="0"
                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h2 class="my-3">Sembang-Sembang ASNB</h2>
            <ul class="owl-carousel  nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                <div>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="date-1-tab" data-bs-toggle="pill" data-bs-target="#date-1"
                                type="button" role="tab" aria-controls="date-1" aria-selected="true">Rabu, 1 Sep
                            2021</button>
                    </li>
                </div>

                <div>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="date-2-tab" data-bs-toggle="pill" data-bs-target="#date-2"
                                type="button" role="tab" aria-controls="date-2" aria-selected="false">Khamis, 2 Sep
                            2021</button>
                    </li>
                </div>

                <div>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="date-3-tab" data-bs-toggle="pill" data-bs-target="#date-3"
                                type="button" role="tab" aria-controls="date-3" aria-selected="false">Jumaat, 3 Sep
                            2021</button>
                    </li>
                </div>

                <div>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="date-4-tab" data-bs-toggle="pill" data-bs-target="#date-4"
                                type="button" role="tab" aria-controls="date-4" aria-selected="false">Sabtu, 4 Sep
                            2021</button>
                    </li>
                </div>

                <div>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="date-5-tab" data-bs-toggle="pill" data-bs-target="#date-5"
                                type="button" role="tab" aria-controls="date-5" aria-selected="false">Ahad, 5 Sep
                            2021</button>
                    </li>
                </div>

                <div>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="date-6-tab" data-bs-toggle="pill" data-bs-target="#date-6"
                                type="button" role="tab" aria-controls="date-6" aria-selected="false">Isinin, 6 Sep
                            2021</button>
                    </li>
                </div>
                <div>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="date-7-tab" data-bs-toggle="pill" data-bs-target="#date-7"
                                type="button" role="tab" aria-controls="date-7" aria-selected="false">Selasa, 7 Sep
                            2021</button>
                    </li>
                </div>

            </ul>
            <div class="tab-content" id="pills-tabContent-2">
                <div class="tab-pane fade show active" id="date-1" role="tabpanel" aria-labelledby="date-1-tab">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo placeat corrupti eum quod corporis
                        quas commodi, at cum cupiditate iusto recusandae eveniet incidunt ipsam enim facere minus eaque
                        voluptatibus accusamus?</p>
                </div>
                <div class="tab-pane fade" id="date-2" role="tabpanel" aria-labelledby="date-2-tab">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo placeat corrupti eum quod corporis
                        quas commodi, at cum cupiditate iusto recusandae eveniet incidunt ipsam enim facere minus eaque
                        voluptatibus accusamus?</p>
                </div>
                <div class="tab-pane fade" id="date-3" role="tabpanel" aria-labelledby="date-3-tab">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo placeat corrupti eum quod corporis
                        quas commodi, at cum cupiditate iusto recusandae eveniet incidunt ipsam enim facere minus eaque
                        voluptatibus accusamus?</p>
                </div>
                <div class="tab-pane fade" id="date-4" role="tabpanel" aria-labelledby="date-4-tab">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo placeat corrupti eum quod corporis
                        quas commodi, at cum cupiditate iusto recusandae eveniet incidunt ipsam enim facere minus eaque
                        voluptatibus accusamus?</p>
                </div>
                <div class="tab-pane fade" id="date-5" role="tabpanel" aria-labelledby="date-5-tab">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo placeat corrupti eum quod corporis
                        quas commodi, at cum cupiditate iusto recusandae eveniet incidunt ipsam enim facere minus eaque
                        voluptatibus accusamus?</p>
                </div>
                <div class="tab-pane fade" id="date-6" role="tabpanel" aria-labelledby="date-6-tab">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo placeat corrupti eum quod corporis
                        quas commodi, at cum cupiditate iusto recusandae eveniet incidunt ipsam enim facere minus eaque
                        voluptatibus accusamus?</p>
                </div>
                <div class="tab-pane fade" id="date-7" role="tabpanel" aria-labelledby="date-7-tab">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo placeat corrupti eum quod corporis
                        quas commodi, at cum cupiditate iusto recusandae eveniet incidunt ipsam enim facere minus eaque
                        voluptatibus accusamus?</p>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>

    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                loop: true,
                nav: true,
                items: 3,
                dots: false
            });
            $(".nav-link").click(function () {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });

        });
    </script>


    <script>
        const program = document.querySelector("#program")
        const jadual = document.querySelector("#jadual")
        const programContent = document.querySelector("#program_content")
        const jadualContent = document.querySelector("#jadual_content")
        const programModal = document.querySelector("#program-modal")
        const programImg1 = document.querySelector(".img1")
        const programModalContent = document.querySelector(".program-modal-content")
        const programCloseBtn = document.querySelector("#close-btn")


        program.addEventListener("click", () => {
            programContent.style.display = "flex"
            jadualContent.style.display = "none"
            program.classList.add("active_tab")
            jadual.classList.remove("active_tab")
        })
        jadual.addEventListener("click", () => {
            programContent.style.display = "none"
            jadualContent.style.display = "block"
            program.classList.remove("active_tab")
            jadual.classList.add("active_tab")
        })

        programImg1.addEventListener("click", () => {
            programModal.style.top = "45%"
            overlay.style.display = "block"
            setTimeout(() => {
                programModal.style.top = "50%"
            }, 300);
            programCloseBtn.style.top = "8%"

        })

        programCloseBtn.addEventListener("click", () => {
            programModal.style.top = "155%"
            overlay.style.display = "none"
            programCloseBtn.style.top = "155%"
        })

        overlay.addEventListener("click", () => {
            programModal.style.top = "150%"
            programCloseBtn.style.top = "155%"
        })

    </script>
@endpush
