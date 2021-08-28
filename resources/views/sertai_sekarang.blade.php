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
                <h1 class="text-white mb-0 d-lg-block d-none">PNB &nbsp; ASNB</h1>
            </div>
            <div class="container mt-5">
                <div id="jom_kira_tabs">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                    aria-selected="true">Pra-MSD</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                    aria-selected="false">Rakan
                                Korporat</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                    aria-selected="false">MSD Live
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active pt-5" id="nav-home" role="tabpanel"
                             aria-labelledby="nav-home-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">Pra-MSD</h1>
                                            <h4 class="text-white text-center mb-3">22 Okt - 16 Nov 2021</h4>
                                            <p class="text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim culpa cum sint, unde aut cupiditate dicta possimus illum necessitatibus fuga voluptatum? Quia similique eum unde commodi, aliquam adipisci magnam excepturi!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <form action="" class="rm-form">
                                        <div class="row ps-lg-5">
                                            <div class="col-6">
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>22 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>23 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>24 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>25 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>26 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>27 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>28 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>29 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>30 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>31 Okt</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>1 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>2 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>3 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>

                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>4 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>5 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>6 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>7 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>8 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>9 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>10 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>11 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>12 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>13 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>14 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>15 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex align-items-center">
                                                    <span>16 Nov</span>
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <h2 class="text-white">Jumlah Simpanan</h2>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                    <h2 class="text-white mb-0">RM</h2>
                                                    <input type="text" name="" class="rm-imputs-2" id="">
                                                </div>
                                                <div class="text-end mt-3 ms-auto ">
                                                    <input type="submit" value="Hantar">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-5" id="nav-profile" role="tabpanel"
                             aria-labelledby="nav-profile-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">Pra-MSD</h1>
                                            <h4 class="text-white text-center mb-3">22 Okt - 16 Nov 2021</h4>
                                            <p class="text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim culpa cum sint, unde aut cupiditate dicta possimus illum necessitatibus fuga voluptatum? Quia similique eum unde commodi, aliquam adipisci magnam excepturi!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <form action="" class="rm-form">
                                        <div class="row ps-lg-5">
                                            <div class="col-6">
                                                <p>
                                                    PNB
                                                </p>
                                                <p>
                                                    ASNB
                                                </p>
                                                <p>
                                                    Maybank
                                                </p>
                                                <p>
                                                    Sime Darby Plantation
                                                </p>
                                                <p>
                                                    UMW
                                                </p>
                                                <p>
                                                    Sime Darby Berhad
                                                </p>
                                                <p>
                                                    Sime Darby Property
                                                </p>
                                                <p>
                                                    Setia
                                                </p>
                                                <p>
                                                    MIDF
                                                </p>
                                                <p>
                                                    Perodua
                                                </p>
                                                <p>
                                                    MNRB
                                                </p>
                                                <p>
                                                    Duopharma
                                                </p>
                                                <p>
                                                    Velesto Energy
                                                </p>
                                                <p>
                                                    Sapura Energy
                                                </p>
                                                <p>
                                                    Prolintas
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input class="rm-imputs" type="text" name="" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <h2 class="text-white">Jumlah Simpanan</h2>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                    <h2 class="text-white mb-0">RM</h2>
                                                    <input type="text" name="" class="rm-imputs-2" id="">
                                                    <div class="text-end mt-3 mt-md-0">
                                                        <input type="submit" value="Hantar">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-5" id="nav-contact" role="tabpanel"
                             aria-labelledby="nav-contact-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">Pra-MSD</h1>
                                            <h4 class="text-white text-center mb-3">22 Okt - 16 Nov 2021</h4>
                                            <p class="text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim culpa cum sint, unde aut cupiditate dicta possimus illum necessitatibus fuga voluptatum? Quia similique eum unde commodi, aliquam adipisci magnam excepturi!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <form action="" class="side-tabs rm-form">
                                        <div  class="d-flex  align-items-start flex-column flex-lg-row ">
                                            <div id="owlCarousel" class="nav flex-column nav-pills me-5 mb-3 mb-lg-0" id="v-pills-tab" role="tablist"
                                                 aria-orientation="vertical">
                                                <button class="nav-link active" id="v-pills-rabu-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-rabu" type="button" role="tab"
                                                        aria-controls="v-pills-rabu" aria-selected="true">Rabu, 17 Nov 2021</button>
                                                <button class="nav-link" id="v-pills-khamis-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-khamis" type="button" role="tab"
                                                        aria-controls="v-pills-khamis" aria-selected="false">Khamis, 18 nov  2021</button>
                                                <button class="nav-link" id="v-pills-jumaat-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-jumaat" type="button" role="tab"
                                                        aria-controls="v-pills-jumaat" aria-selected="false">Jumaat, 19 Nov  2021</button>
                                                <button class="nav-link" id="v-pills-sabtu-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-sabtu" type="button" role="tab"
                                                        aria-controls="v-pills-sabtu" aria-selected="false">Sabtu, 20 Nov  2021</button>
                                                <button class="nav-link" id="v-pills-ahad-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-ahad" type="button" role="tab"
                                                        aria-controls="v-pills-ahad" aria-selected="false">Ahad, 21 Nov 2021</button>
                                                <button class="nav-link" id="v-pills-isinin-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-isinin" type="button" role="tab"
                                                        aria-controls="v-pills-isinin" aria-selected="false">Isinin, 22 Nov 2021</button>
                                                <button class="nav-link" id="v-pills-selasa-tab" data-bs-toggle="pill"
                                                        data-bs-target="#v-pills-selasa" type="button" role="tab"
                                                        aria-controls="v-pills-selasa" aria-selected="false">Selasa, 23 Nov 2021</button>
                                            </div>
                                            <div class="tab-content" id="msd-live-section">
                                                <div class="tab-pane fade show active" id="v-pills-rabu" role="tabpanel"
                                                     aria-labelledby="v-pills-rabu-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Attana
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-khamis" role="tabpanel"
                                                     aria-labelledby="v-pills-khamis-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Attana
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-jumaat" role="tabpanel"
                                                     aria-labelledby="v-pills-jumaat-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Attana
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-sabtu" role="tabpanel"
                                                     aria-labelledby="v-pills-sabtu-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Attana
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-ahad" role="tabpanel"
                                                     aria-labelledby="v-pills-ahad-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Attana
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-isinin" role="tabpanel"
                                                     aria-labelledby="v-pills-isinin-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Attana
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-selasa" role="tabpanel"
                                                     aria-labelledby="v-pills-selasa-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Attana
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input class="rm-imputs" type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <h4 class="text-white">Jumlah Simpanan</h4>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="d-flex justify-content-end flex-md-nowrap flex-wrap">
                                                            <h4 class="text-white mb-0">RM</h4>
                                                            <input type="text" name="" class="rm-imputs-2" id="">
                                                        </div>
                                                        <div class="text-end ms-auto mt-3">
                                                            <input type="submit" value="Hantar">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection


@push('js')

@endpush
