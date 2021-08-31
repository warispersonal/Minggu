@extends('layouts.main')

@push('style')

@endpush

@section('content')
    <main>
        <div class="main-bg">
            <div class="container-fluid px-md-5 pt-4">
                <div class="d-lg-block d-none">
                    <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">
                    <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">
                </div>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="heading">Promosi</h1>
                        <div class="mt-5 tabss">
                            <ul class="nav nav-pills mb-3" id="promotion_tabs" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active"
                                            id="pills-tab-all"
                                            data-bs-toggle="pill"
                                            data-bs-target="#pills-all"
                                            type="button"
                                            role="tab"
                                            aria-controls="pills-all"
                                            aria-selected="true">
                                        <img src="{{asset(\App\Constant\FileConstant::PARTNER_LOGO.'/all.png')}}" alt="">
                                    </button>
                                </li>
                                @foreach($partners as $partner)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link"
                                                id="pills-tab-{{$partner->id}}"
                                                data-bs-toggle="pill"
                                                data-bs-target="#pills-{{$partner->id}}"
                                                type="button" role="tab"
                                                aria-controls="pills-{{$partner->id}}"
                                                aria-selected="false">
                                            <img class="promosi-image-details-page promosi-img-logo" src="{{$partner->promosi_logo}}" alt="">
                                        </button>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <button id="tabss_popup_btn">Pilih Rakan Kongsi <i class="bi bi-chevron-down"></i></button>
                        <div class="tab-content" id="promotion_tabs_content">
                            <div class="tab-pane fade show active"
                                 id="pills-all"
                                 role="tabpanel"
                                 aria-labelledby="pills-tab-all">
                                @foreach($sliders as $slider)
                                    <img src="{{$slider->slider_image}}" class="img-fluid" alt="">
                                @endforeach
                            </div>


                            @foreach($partners as $partner)
                                <div class="tab-pane fade"
                                     id="pills-{{$partner->id}}"
                                     role="tabpanel"
                                     aria-labelledby="pills-tab-{{$partner->id}}">
                                    @foreach($partner->sliders as $slider)
                                        <img src="{{$slider->slider_image}}" class="img-fluid" alt="">
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@push('js')
    <script>
        const tabss_popup_btn = document.querySelector("#tabss_popup_btn")
        const promotion_tabs = document.querySelector("#promotion_tabs")
        const promotion_tab = document.querySelectorAll("#promotion_tabs .nav-link")

        tabss_popup_btn.addEventListener("click", () => {
            if (promotion_tabs.style.display == "flex") {
                promotion_tabs.style.display = "none"
            } else {
                promotion_tabs.style.display = "flex"
            }
        })
        let windowSizee = window.matchMedia("(max-width: 991px)")
        if (windowSizee.matches) {
            promotion_tab.forEach(tab => {
                tab.addEventListener("click", () => {
                    promotion_tabs.style.display = "none"
                })
            })
        }
    </script>
@endpush
