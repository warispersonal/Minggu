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
                            <a href="{{route('user.msdLive')}}" class="tonton-btn m-0 d-none d-lg-block">Tonton semu
                                episod lalo </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="program_content">
                            @foreach($programs as $program)
                                <img onclick="openModal({{$program}})"
                                     src="{{$program->program_image}}"
                                     alt="">
                            @endforeach
                        </div>
                        <div id="jadual_content">
                            <div class="d-lg-flex d-none align-items-start  jadual-desktop">
                                <div class="nav flex-column nav-pills me-5" id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    @foreach($jaduals as $jadual)
                                        <button class="nav-link {{$loop->index == 0 ? "active" : ""}}"
                                                id="v-pills-rabu-tab-{{$jadual->id}}" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-rabu{{$jadual->id}}" type="button" role="tab"
                                                aria-controls="v-pills-rabu{{$jadual->id}}" aria-selected="true">Rabu, 1
                                            Sep 2021
                                        </button>
                                    @endforeach
                                </div>
                                <div class="tab-content" id="jadual_tabs_content">
                                    <?php $count = 0; ?>
                                    @foreach($jaduals as $jadual)
                                        <div class="tab-pane fade show {{$count ==0 ? "active" : ""}}"
                                             id="v-pills-rabu{{$jadual->id}}" role="tabpanel"
                                             aria-labelledby="v-pills-rabu-tab-{{$jadual->id}}">
                                            @foreach($jadual->jadual_info as $info)
                                                <div class="row">
                                                    <div class="col-3">
                                                        <span class="time">{{$info->time}}</span>
                                                    </div>
                                                    <div class="col-9">
                                                        <p>
                                                            {{$info->name}}<small> {{$info->description}}</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                        <?php $count++; ?>

                                    @endforeach
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
                <iframe id="program_frame" frameborder="0"
                        allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div>
            <h2 class="my-3" id="program_title"></h2>
            <ul class="owl-carousel  nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                @foreach($programs as $program)
                    <div>
                        <li class="nav-item" role="presentation">
                            <button onclick="onDateChange({{$program}})" class="nav-link date-button"
                                    id="date-{{$program->id}}-tab" data-bs-toggle="pill"
                                    data-bs-target="#date-{{$program->id}}"
                                    type="button" role="tab" aria-controls="date-{{$program->id}}"
                                    aria-selected="true">{{$program->date}}
                            </button>
                        </li>
                    </div>
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent-2">
                @foreach($programs as $program)
                    <div class="tab-pane fade show description-field" id="date-{{$program->id}}" role="tabpanel"
                         aria-labelledby="date-{{$program->id}}-tab">
                        <p>
                            {{$program->description}}
                        </p>
                    </div>
                @endforeach
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

        programCloseBtn.addEventListener("click", () => {
            programModal.style.top = "155%"
            overlay.style.display = "none"
            programCloseBtn.style.top = "155%"
        })

        overlay.addEventListener("click", () => {
            programModal.style.top = "150%"
            programCloseBtn.style.top = "155%"
        })

        function openModal(program) {
            changeModalView(program)
            programModal.style.top = "45%"
            overlay.style.display = "block"
            setTimeout(() => {
                programModal.style.top = "50%"
            }, 300);
            programCloseBtn.style.top = "8%"
        }

        function onDateChange(program) {
            changeModalView(program)
        }

        function changeModalView(program) {
            $("#program_title").text(program.name)
            $('#program_frame').attr('src', program.video_link)
            $(".description-field").removeClass("active")
            $(".date-button").removeClass("active")
            $("#date-" + program.id).addClass('active')
            $("#date-" + program.id + "-tab").addClass('active')

        }
    </script>
@endpush
