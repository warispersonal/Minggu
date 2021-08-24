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
                <div id="jom_kira_tabs">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Pra-MSD</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Rakan
                                Korporat</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">MSD Live
                            </button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active pt-5" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="{{asset('assets/img/jom-kira.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">Pra-MSD</h1>
                                        </div>
                                        <div class="order-1 order-lg-3 mb-5 d-flex d-lg-block">
                                            <button class="jom_kira-btns">Cara Penyertaan</button>
                                            <button class="jom_kira-btns">Hadiah Untuk Dimenangi</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 ">
                                    <form action="" class="rm-form">
                                        <div class="row ps-lg-5">
                                            <div class="col-6">
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>

                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
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
                                                    <input type="text" name="" class="border-0 border-bottom" id="">
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
                        <div class="tab-pane fade pt-5" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="img/jom-kira.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">Rakan Korporat</h1>
                                        </div>
                                        <div class="order-1 order-lg-3 mb-5 d-flex d-lg-block">
                                            <button class="jom_kira-btns">Cara Penyertaan</button>
                                            <button class="jom_kira-btns">Hadiah Untuk Dimenangi</button>
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
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
                                                </div>
                                                <div class="mb-3 d-flex">
                                                    <label for="">RM</label>
                                                    <input type="text" name="" id="">
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
                                                    <input type="text" name="" class="border-0 border-bottom" id="">
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
                        <div class="tab-pane fade pt-5" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row gy-4">
                                <div class="col-lg-5 pe-lg-5">
                                    <div class="d-flex flex-column">
                                        <div class="order-2 order-lg-1">
                                            <img src="img/jom-kira.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="order-3 order-lg-2 ">
                                            <h1 class="text-white text-center mt-5">MSD Live</h1>
                                        </div>
                                        <div class="order-1 order-lg-3 mb-5 d-flex d-lg-block">
                                            <button class="jom_kira-btns">Cara Penyertaan</button>
                                            <button class="jom_kira-btns">Hadiah Untuk Dimenangi</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <form action="" class="side-tabs rm-form">
                                        <div class="d-flex  align-items-start flex-column flex-lg-row ">
                                            <div id="owlCarousel" class="nav flex-column nav-pills me-5 mb-3 mb-lg-0" role="tablist" aria-orientation="vertical">
                                                <button class="nav-link active" id="v-pills-rabu-tab" data-bs-toggle="pill" data-bs-target="#v-pills-rabu" type="button" role="tab" aria-controls="v-pills-rabu" aria-selected="true">Rabu, 1 Sep 2021</button>
                                                <button class="nav-link" id="v-pills-khamis-tab" data-bs-toggle="pill" data-bs-target="#v-pills-khamis" type="button" role="tab" aria-controls="v-pills-khamis" aria-selected="false">Khamis, 2 Sep 2021</button>
                                                <button class="nav-link" id="v-pills-jumaat-tab" data-bs-toggle="pill" data-bs-target="#v-pills-jumaat" type="button" role="tab" aria-controls="v-pills-jumaat" aria-selected="false">Jumaat, 3 Sep 2021</button>
                                                <button class="nav-link" id="v-pills-sabtu-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sabtu" type="button" role="tab" aria-controls="v-pills-sabtu" aria-selected="false">Sabtu, 4 Sep 2021</button>
                                                <button class="nav-link" id="v-pills-ahad-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ahad" type="button" role="tab" aria-controls="v-pills-ahad" aria-selected="false">Ahad, 5 Sep 2021</button>
                                                <button class="nav-link" id="v-pills-isinin-tab" data-bs-toggle="pill" data-bs-target="#v-pills-isinin" type="button" role="tab" aria-controls="v-pills-isinin" aria-selected="false">Isinin, 6 Sep 2021</button>
                                                <button class="nav-link" id="v-pills-selasa-tab" data-bs-toggle="pill" data-bs-target="#v-pills-selasa" type="button" role="tab" aria-controls="v-pills-selasa" aria-selected="false">Selasa, 7 Sep 2021</button>
                                            </div>
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-rabu" role="tabpanel" aria-labelledby="v-pills-rabu-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                            <p>
                                                                Attana
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-khamis" role="tabpanel" aria-labelledby="v-pills-khamis-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                            <p>
                                                                Attana
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-jumaat" role="tabpanel" aria-labelledby="v-pills-jumaat-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                            <p>
                                                                Attana
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-sabtu" role="tabpanel" aria-labelledby="v-pills-sabtu-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                            <p>
                                                                Attana
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-ahad" role="tabpanel" aria-labelledby="v-pills-ahad-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                            <p>
                                                                Attana
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-isinin" role="tabpanel" aria-labelledby="v-pills-isinin-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                            <p>
                                                                Attana
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-selasa" role="tabpanel" aria-labelledby="v-pills-selasa-tab">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <p>
                                                                Sembang-Sembang ASNB
                                                            </p>
                                                            <p>
                                                                ASNB SALES
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                ASB-Iclif MBA MasterClass
                                                            </p>
                                                            <p>
                                                                Attana
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                            <p>
                                                                Pedestrian Question
                                                            </p>
                                                            <p>
                                                                ASNB Casual Talkshow
                                                            </p>
                                                            <p>
                                                                Lepak Je!
                                                            </p>
                                                            <p>
                                                                Lets Get Quizzical
                                                            </p>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                            <div class="mb-3 d-flex">
                                                                <label for="">RM</label>
                                                                <input type="text" name="" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <ul class="owl-carousel d-lg-none nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <div>
                                                <li class="nav-item active" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-home" type="button" role="tab"
                                                        aria-controls="pills-home" aria-selected="true">Rabu, 1 Sep 2021</button>
                                                </li>
                                            </div>

                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-profile" type="button" role="tab"
                                                        aria-controls="pills-profile" aria-selected="false">Khamis, 2 Sep 2021</button>
                                                </li>
                                            </div>

                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-contact" type="button" role="tab"
                                                        aria-controls="pills-contact" aria-selected="false">Jumaat, 3 Sep 2021</button>
                                                </li>
                                            </div>

                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-contact2" type="button" role="tab"
                                                        aria-controls="pills-contact2" aria-selected="false">Sabtu, 4 Sep 2021</button>
                                                </li>
                                            </div>

                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact3-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-contact3" type="button" role="tab"
                                                        aria-controls="pills-contact3" aria-selected="false">Ahad, 5 Sep 2021</button>
                                                </li>
                                            </div>

                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact4-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-contact4" type="button" role="tab"
                                                        aria-controls="pills-contact4" aria-selected="false">Isinin, 6 Sep 2021</button>
                                                </li>
                                            </div>
                                            <div>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-contact5-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-contact5" type="button" role="tab"
                                                        aria-controls="pills-contact5" aria-selected="false">Selasa, 7 Sep 2021</button>
                                                </li>
                                            </div>

                                        </ul>
                                        <div class="tab-content d-lg-none" >
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p>
                                                            Sembang-Sembang ASNB
                                                        </p>
                                                        <p>
                                                            ASNB SALES
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            ASB-Iclif MBA MasterClass
                                                        </p>
                                                        <p>
                                                            Attana
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            Pedestrian Question
                                                        </p>
                                                        <p>
                                                            ASNB Casual Talkshow
                                                        </p>
                                                        <p>
                                                            Lepak Je!
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p>
                                                            Sembang-Sembang ASNB
                                                        </p>
                                                        <p>
                                                            ASNB SALES
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            ASB-Iclif MBA MasterClass
                                                        </p>
                                                        <p>
                                                            Attana
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            Pedestrian Question
                                                        </p>
                                                        <p>
                                                            ASNB Casual Talkshow
                                                        </p>
                                                        <p>
                                                            Lepak Je!
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="pills-contact" role="tabpanel"
                                                aria-labelledby="pills-contact-tab">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p>
                                                            Sembang-Sembang ASNB
                                                        </p>
                                                        <p>
                                                            ASNB SALES
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            ASB-Iclif MBA MasterClass
                                                        </p>
                                                        <p>
                                                            Attana
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            Pedestrian Question
                                                        </p>
                                                        <p>
                                                            ASNB Casual Talkshow
                                                        </p>
                                                        <p>
                                                            Lepak Je!
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="pills-contact2" role="tabpanel"
                                                aria-labelledby="pills-contact2-tab">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p>
                                                            Sembang-Sembang ASNB
                                                        </p>
                                                        <p>
                                                            ASNB SALES
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            ASB-Iclif MBA MasterClass
                                                        </p>
                                                        <p>
                                                            Attana
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            Pedestrian Question
                                                        </p>
                                                        <p>
                                                            ASNB Casual Talkshow
                                                        </p>
                                                        <p>
                                                            Lepak Je!
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="pills-contact3" role="tabpanel"
                                                aria-labelledby="pills-contact3-tab">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p>
                                                            Sembang-Sembang ASNB
                                                        </p>
                                                        <p>
                                                            ASNB SALES
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            ASB-Iclif MBA MasterClass
                                                        </p>
                                                        <p>
                                                            Attana
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            Pedestrian Question
                                                        </p>
                                                        <p>
                                                            ASNB Casual Talkshow
                                                        </p>
                                                        <p>
                                                            Lepak Je!
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="pills-contact4" role="tabpanel"
                                                aria-labelledby="pills-contact4-tab">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p>
                                                            Sembang-Sembang ASNB
                                                        </p>
                                                        <p>
                                                            ASNB SALES
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            ASB-Iclif MBA MasterClass
                                                        </p>
                                                        <p>
                                                            Attana
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            Pedestrian Question
                                                        </p>
                                                        <p>
                                                            ASNB Casual Talkshow
                                                        </p>
                                                        <p>
                                                            Lepak Je!
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade show active" id="pills-contact5" role="tabpanel"
                                                aria-labelledby="pills-contact5-tab">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p>
                                                            Sembang-Sembang ASNB
                                                        </p>
                                                        <p>
                                                            ASNB SALES
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            ASB-Iclif MBA MasterClass
                                                        </p>
                                                        <p>
                                                            Attana
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                        <p>
                                                            Pedestrian Question
                                                        </p>
                                                        <p>
                                                            ASNB Casual Talkshow
                                                        </p>
                                                        <p>
                                                            Lepak Je!
                                                        </p>
                                                        <p>
                                                            Lets Get Quizzical
                                                        </p>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                        <div class="mb-3 d-flex">
                                                            <label for="">RM</label>
                                                            <input type="text" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
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
