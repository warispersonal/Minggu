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
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div class="tabs">
                                <h1 id="program" class="active_tab">Program</h1>
                                <h1 id="jadual">Jadual</h1>
                            </div>
                            <a href="{{route("user.msdLive")}}" class="tonton-btn m-0">Tonton semu episod lalo &gt;</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div id="program_content">
                            <img src="{{asset('assets/img/img1.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img2.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img3.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img4.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img5.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img1.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img2.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img3.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img4.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img5.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img1.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img2.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img3.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img4.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img5.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img1.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img2.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img3.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img4.png')}}" class="cursor-pointer" alt="">
                            <img src="{{asset('assets/img/img5.png')}}" class="cursor-pointer" alt="">
                        </div>
                        <div id="jadual_content">
                            <div class="d-lg-flex d-none align-items-start ">
                                <div class="nav flex-column nav-pills me-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-rabu-tab" data-bs-toggle="pill" data-bs-target="#v-pills-rabu" type="button" role="tab" aria-controls="v-pills-rabu" aria-selected="true">Rabu, 1 Sep 2021</button>
                                    <button class="nav-link" id="v-pills-khamis-tab" data-bs-toggle="pill" data-bs-target="#v-pills-khamis" type="button" role="tab" aria-controls="v-pills-khamis" aria-selected="false">Khamis, 2 Sep 2021</button>
                                    <button class="nav-link" id="v-pills-jumaat-tab" data-bs-toggle="pill" data-bs-target="#v-pills-jumaat" type="button" role="tab" aria-controls="v-pills-jumaat" aria-selected="false">Jumaat, 3 Sep 2021</button>
                                    <button class="nav-link" id="v-pills-sabtu-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sabtu" type="button" role="tab" aria-controls="v-pills-sabtu" aria-selected="false">Sabtu, 4 Sep 2021</button>
                                    <button class="nav-link" id="v-pills-ahad-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ahad" type="button" role="tab" aria-controls="v-pills-ahad" aria-selected="false">Ahad, 5 Sep 2021</button>
                                    <button class="nav-link" id="v-pills-isinin-tab" data-bs-toggle="pill" data-bs-target="#v-pills-isinin" type="button" role="tab" aria-controls="v-pills-isinin" aria-selected="false">Isinin, 6 Sep 2021</button>
                                    <button class="nav-link" id="v-pills-selasa-tab" data-bs-toggle="pill" data-bs-target="#v-pills-selasa" type="button" role="tab" aria-controls="v-pills-selasa" aria-selected="false">Selasa, 4 Sep 2021</button>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-rabu" role="tabpanel" aria-labelledby="v-pills-rabu-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je!
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-khamis" role="tabpanel" aria-labelledby="v-pills-khamis-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je!
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-jumaat" role="tabpanel" aria-labelledby="v-pills-jumaat-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je!
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-sabtu" role="tabpanel" aria-labelledby="v-pills-sabtu-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je!
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-ahad" role="tabpanel" aria-labelledby="v-pills-ahad-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je!
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-isinin" role="tabpanel" aria-labelledby="v-pills-isinin-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je!
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-selasa" role="tabpanel" aria-labelledby="v-pills-selasa-tab">
                                        <div class="row">
                                            <div class="col-3">
                                                <span class="time">12.30 tghr</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Sembang-Sembang ASNB
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB SALES
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">2.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASB-Iclif MBA MasterClass
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">3.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">4.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Attana
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">5.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.00 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Pedestrian Question
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">6.30 ptg</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Rakan Korporat Kami
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">8.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    ASNB Casual Talkshow
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.00 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lepak Je!
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <span class="time">9.30 mlm</span>
                                            </div>
                                            <div class="col-9">
                                                <p>
                                                    Lets Get Quizzical
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="owl-carousel d-lg-none nav nav-pills mb-3 owl-loaded owl-drag" id="pills-tab" role="tablist" style="">













                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Rabu, 1 Sep 2021</button>
                                                </li>
                                            </div></div><div class="owl-item"><div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Khamis, 2 Sep
                                                        2021</button>
                                                </li>
                                            </div></div><div class="owl-item"><div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Jumaat, 3 Sep
                                                        2021</button>
                                                </li>
                                            </div></div><div class="owl-item"><div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Sabtu, 4 Sep
                                                        2021</button>
                                                </li>
                                            </div></div><div class="owl-item"><div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact3-tab" data-bs-toggle="pill" data-bs-target="#pills-contact3" type="button" role="tab" aria-controls="pills-contact3" aria-selected="false">Ahad, 5 Sep
                                                        2021</button>
                                                </li>
                                            </div></div><div class="owl-item"><div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact4-tab" data-bs-toggle="pill" data-bs-target="#pills-contact4" type="button" role="tab" aria-controls="pills-contact4" aria-selected="false">Isinin, 6 Sep
                                                        2021</button>
                                                </li>
                                            </div></div><div class="owl-item"><div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact5-tab" data-bs-toggle="pill" data-bs-target="#pills-contact5" type="button" role="tab" aria-controls="pills-contact5" aria-selected="false">Selasa, 7 Sep
                                                        2021</button>
                                                </li>
                                            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></ul>
                            <div class="tab-content d-lg-none" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je!
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je!
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je!
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je!
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je!
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact4-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je!
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact5-tab">
                                    <div class="row">
                                        <div class="col-3">
                                            <span class="time">12.30 tghr</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Sembang-Sembang ASNB
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB SALES
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">2.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASB-Iclif MBA MasterClass
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">3.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">4.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Attana
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">5.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.00 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Pedestrian Question
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">6.30 ptg</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Rakan Korporat Kami
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">8.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                ASNB Casual Talkshow
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.00 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lepak Je!
                                            </p>
                                        </div>
                                        <div class="col-3">
                                            <span class="time">9.30 mlm</span>
                                        </div>
                                        <div class="col-9">
                                            <p>
                                                Lets Get Quizzical
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
    <div id="program-modal">
        <div class="program-modal-content">
            <span id="close-btn" class="bi bi-x"></span>
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

@endpush
