@extends('layouts.main')

@push('style')

@endpush

@section('content')
    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 pt-4">
                <h1 class="text-white mb-0 d-lg-block d-none">PNB &nbsp; ASNB</h1>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="heading">Promosi</h1>
                        <div class="mt-5 tabss">
                            <ul class="nav nav-pills mb-3" id="promotion_tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-pnb-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-pnb" type="button" role="tab" aria-controls="pills-pnb"
                                            aria-selected="true"><img src="{{asset('assets/img/pnb-2.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-asnb-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-asnb" type="button" role="tab"
                                            aria-controls="pills-asnb" aria-selected="false"><img src="{{asset('assets/img/asnb-3.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-maybank-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-maybank" type="button" role="tab"
                                            aria-controls="pills-maybank" aria-selected="false"><img src="{{asset('assets/img/maybank-4.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-plantation-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-plantation" type="button" role="tab"
                                            aria-controls="pills-plantation" aria-selected="false"><img src="{{asset('assets/img/sime-plant')}}-2.png" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-umw-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-umw" type="button" role="tab"
                                            aria-controls="pills-umw" aria-selected="false"><img src="{{asset('assets/img/umw-2.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-berhad-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-berhad" type="button" role="tab"
                                            aria-controls="pills-berhad" aria-selected="false"><img src="{{asset('assets/img/sime-darby.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-property-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-property" type="button" role="tab"
                                            aria-controls="pills-property" aria-selected="false"><img src="{{asset('assets/img/sime-prop')}}-2.png" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-setia-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-setia" type="button" role="tab"
                                            aria-controls="pills-setia" aria-selected="false"><img src="{{asset('assets/img/setia-2.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-midf-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-midf" type="button" role="tab"
                                            aria-controls="pills-midf" aria-selected="false"><img src="{{asset('assets/img/midf-2.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-perodua-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-perodua" type="button" role="tab"
                                            aria-controls="pills-perodua" aria-selected="false"><img src="{{asset('assets/img/perodua-2.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-duopharma-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-duopharma" type="button" role="tab"
                                            aria-controls="pills-duopharma" aria-selected="false"><img src="{{asset('assets/img/duopharma-2.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-mnrb-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-mnrb" type="button" role="tab"
                                            aria-controls="pills-mnrb" aria-selected="false"><img src="{{asset('assets/img/mnrb-2.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-velesto-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-velesto" type="button" role="tab"
                                            aria-controls="pills-velesto" aria-selected="false"><img src="{{asset('assets/img/velesto.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-sapura-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-sapura" type="button" role="tab"
                                            aria-controls="pills-sapura" aria-selected="false"><img src="{{asset('assets/img/sapura-2.png')}}" alt=""></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-prolintas-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-prolintas" type="button" role="tab"
                                            aria-controls="pills-prolintas" aria-selected="false"><img src="{{asset('assets/img/prolintas-2.png')}}" alt=""></button>
                                </li>


                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <button id="tabss_popup_btn">Pilih Rakan Kongsi <i class="bi bi-chevron-down"></i></button>
                        <div class="tab-content" id="promotion_tabs_content">
                            <div class="tab-pane fade show active" id="pills-pnb" role="tabpanel"
                                 aria-labelledby="pills-pnb-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-asnb" role="tabpanel"
                                 aria-labelledby="pills-asnb-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-maybank" role="tabpanel"
                                 aria-labelledby="pills-maybank-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-plantation" role="tabpanel"
                                 aria-labelledby="pills-plantation-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-umw" role="tabpanel"
                                 aria-labelledby="pills-umw-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-berhad" role="tabpanel"
                                 aria-labelledby="pills-berhad-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-property" role="tabpanel"
                                 aria-labelledby="pills-property-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-setia" role="tabpanel"
                                 aria-labelledby="pills-setia-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-midf" role="tabpanel"
                                 aria-labelledby="pills-midf-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-perodua" role="tabpanel"
                                 aria-labelledby="pills-perodua-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-duopharma" role="tabpanel"
                                 aria-labelledby="pills-duopharma-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-mnrb" role="tabpanel"
                                 aria-labelledby="pills-mnrb-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-velesto" role="tabpanel"
                                 aria-labelledby="pills-velesto-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-sapura" role="tabpanel"
                                 aria-labelledby="pills-sapura-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                            </div>
                            <div class="tab-pane fade" id="pills-prolintas" role="tabpanel"
                                 aria-labelledby="pills-prolintas-tab">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank2.png')}}" class="img-fluid" alt="">
                                <img src="{{asset('assets/img/maybank.png')}}" class="img-fluid" alt="">
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
