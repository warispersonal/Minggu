@extends('layouts.main' , ['class' => 'home'])

@if(Config::get('app.locale') == 'en')
    @section('title',$headerMenu[0]['label_en'])
@elseif (Config::get('app.locale') == 'bm')
    @section('title',$headerMenu[0]['label_bm'])
@endif
@push('style')
    <style>
        .desktop_nav {
            background-color: #0057B7;
        }

        .desktop_nav li {
            color: white;
        }

        .desktop_nav li a {
            color: white;
        }

        .mobile-header {
            /*background: transparent;*/
            /*position:static;*/
            color: #0057B7;
        }
        .main-img{
            margin-top:37px;
        }
        
    </style>
@endpush

@section('content')

    <main>
        <div class="main-img position-relative">
            <div class="container-fluid px-md-5 pt-lg-4 header-imgs">
                <div class="d-lg-block d-none">
                    <img src="{{asset('assets/img/header-pnb.png')}}" class="img-fluid me-2">
                    <img src="{{asset('assets/img/header-asnb.png')}}" class="img-fluid">
                </div>
            </div>
            <!--<img src="{{asset('assets/img/mobile-home-bg.png')}}" class="d-lg-none w-100 position-absolute top-0">-->
            <div class="home-links position-relative mt-5  mt-md-0" >
                <img src="{{asset('assets/img/desktop-home-bg.png')}}" class="d-none d-md-block ">
                <img src="{{asset('assets/img/mobile-home-bg.png')}}" class=" d-md-none ">
                @foreach($partners as $partner)
                    <a href="{{route('may.bank', $partner->slug)}}" class="link-{{$partner->id}}">
                        <img src="{{$partner->main_logo}}" alt="">
                    </a>
                @endforeach
            </div>
            <div class="info-btn"><i class="bi bi-info"></i></div>
            <div class="about-us-box">
                Minggu Saham Digital adalah sebuah acara mesra keluarga yang dipenuhi dengan program pendidikan dan literasi kewangan. MSD bersiaran langsung selama 7 hari melalui laman Facebook dan YouTube.
            </div>
        </div>
    </main>

@endsection
