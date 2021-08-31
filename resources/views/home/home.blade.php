@extends('layouts.main' , ['class' => 'home'])

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
            background: transparent;
            color: #0057B7;
        }
    </style>
@endpush

@section('content')

    <main>
        <div class="main-img position-relative">
            <div class="container-fluid px-md-5 pt-4 position-absolute top-0">
                <div class="d-lg-block d-none">
                    <img src="{{asset('assets/img/header-pnb.png')}}" class="img-fluid me-2">
                    <img src="{{asset('assets/img/header-asnb.png')}}" class="img-fluid">
                </div>
            </div>
            <img src="{{asset('assets/img/home-bg-mobile.png')}}" class="d-lg-none w-100 position-absolute top-0">
            <div class="home-links position-relative">
                @foreach($partners as $partner)
                    <a href="{{route('may.bank', $partner->slug)}}" class="link-{{$partner->id}}">
                        <img src="{{$partner->main_logo}}" alt="">
                    </a>
                @endforeach
            </div>
        </div>
    </main>

@endsection
