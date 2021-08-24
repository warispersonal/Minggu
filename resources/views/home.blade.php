@extends('layouts.main' , ['class' => 'home'])

@push('style')
    <style>
        .desktop_nav{
            background-color: #0057B7;
        }
        .desktop_nav li{
            color: white;
        }
        .desktop_nav li a{
            color: white;
        }
        .dropdown_content li a{
            color: #0057B7;
        }
    </style>
@endpush

@section('content')

<main>
    <div class="main-img">
        <div class="home-links position-relative">
            <img src="" class="img-fluid d-none d-lg-block desktopImage" usemap="#workmap" alt="">
            <img src="" class="img-fluid d-lg-none mobileImage" usemap="#workmap" alt="">
            <a href="{{route('may.bank')}}" class="link-1">
                <img src="{{ asset('assets/front/img/duopharma.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-2">
                <img src="{{ asset('assets/front/img/simeberhad.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-3">
                <img src="{{ asset('assets/front/img/sime-prop.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-4">
                <img src="{{ asset('assets/front/img/maybank-2.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-5">
                <img src="{{ asset('assets/front/img/asnb-2.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-6">
                <img src="{{ asset('assets/front/img/pnb.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-7">
                <img src="{{ asset('assets/front/img/sime-plant.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-8">
                <img src="{{ asset('assets/front/img/mnrb.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-9">
                <img src="{{ asset('assets/front/img/umw.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-10">
                <img src="{{ asset('assets/front/img/midf.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-11">
                <img src="{{ asset('assets/front/img/setia.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-12">
                <img src="{{ asset('assets/front/img/prolintas.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-13">
                <img src="{{ asset('assets/front/img/sapura.png') }}" alt="">
            </a>
            <a href="{{route('may.bank')}}" class="link-14">
                <img src="{{ asset('assets/front/img/perodua.png') }}" alt="">
            </a>
        </div>
    </div>
</main>
@endsection
