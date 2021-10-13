@extends('layouts.main')

@push('style')
<style>
        .answer{
        max-height: 0px;
        overflow: hidden;
        transition: max-height 0.3s ease-in;  
        }
        .accordion_item{
            color: white;
        }
        .question{
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top:15px;
        }
        .accordion_item:nth-child(1) .question{
            margin-top:0px;
        }
        .question p{
            padding-right: 15px;
            color:#F5841F;
            margin-bottom:5px;
        }
        .fa-chevron-right{
            /* transform: rotate(90deg); */
            /* transform-origin: left; */
            /* padding-right: 35px; */
            transition: all .3s;
            color:#F5841F;
        }
    </style>
@endpush

@section('content')


    <main>
        <div class="main-bg position-relative">
            <!--<div class="container-fluid px-md-5 pt-4">-->
            <!--    <div class="d-lg-block d-none">-->
            <!--        <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">-->
            <!--        <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">-->
            <!--    </div>-->
            <!--</div>-->
            <div class="container-fluid px-md-5 mt-5">
                <div class="row px-md-5">
                    @if(Config::get('app.locale') == 'en')
                        <div class="col-lg-5">
                    @else
                        <div class="col-lg-4">
                    @endif
                        <h1 class="heading mt-3 mb-2">{{ __('general.qa_1') }} <br class="d-none d-lg-block">{{ __('general.qa_2') }}</h1>
                    </div>
                    @if(Config::get('app.locale') == 'en')
                        <div class="col-lg-7">
                    @else
                        <div class="col-lg-8">
                    @endif
                        <div id="jom_kira_tabs">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active ms-0" id="nav-home-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                            aria-selected="true">Minggu Saham Digital
                                    </button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-profile" type="button" role="tab"
                                            aria-controls="nav-profile"
                                            aria-selected="false">{{ __('general.pertandingan_title') }}
                                    </button>

                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active py-4" id="nav-home" role="tabpanel"
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

 <script>
        const accordionItem = document.querySelectorAll(".question")
    
        accordionItem.forEach(accordion_item => {
            accordion_item.addEventListener("click", function () {
                if (this.nextElementSibling.style.maxHeight == "500px") {
                    this.nextElementSibling.style.maxHeight = "0px"
                    this.nextElementSibling.style.transition = "max-height 0.3s ease-out"
                    this.querySelector(".fa-chevron-right").style.transform = "rotate(0deg)"
                }
                else{
                    this.nextElementSibling.style.maxHeight = "500px"
                    this.nextElementSibling.style.transition = "max-height 0.6s ease-in"
                    this.querySelector(".fa-chevron-right").style.transform = "rotate(90deg)"
                }
            })
        });
    
    </script>

@endpush
