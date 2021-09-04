@extends('layouts.main')

@push('style')
@endpush

@section('content')


    <main>
        <div class="main-bg position-relative">
            <div class="container-fluid px-md-5 pt-4">
                <div class="d-lg-block d-none">
                    <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">
                    <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-4">
                        <h1 class="faq-heading mt-3">Soalan <br class="d-none d-lg-block">Lazim</h1>
                    </div>
                    <div class="col-lg-8">
                        <div id="jom_kira_tabs">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active ps-0" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Minggu Saham Digital
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile"
                                            aria-selected="false">Pertandingan
                                    </button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active pt-5" id="nav-home" role="tabpanel"
                                     aria-labelledby="nav-home-tab">
                                    {!! Config::get('app.locale') == 'en' ? $faq['minggu_saham_digital'] : $faq['minggu_saham_digital_bm'] !!}
                                </div>
                                <div class="tab-pane fade pt-5" id="nav-profile" role="tabpanel"
                                     aria-labelledby="nav-profile-tab">
                                    {!! Config::get('app.locale') == 'en' ? $faq['pertandingan'] : $faq['pertandingan_bm'] !!}
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
