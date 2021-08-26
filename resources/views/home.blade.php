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

        .main-img {
            background: url({{asset('assets/img/home-bg.png')}});
        }
    </style>
@endpush

@section('content')

    <main>
        <div class="main-img">
            <div class="home-links position-relative">
                <a href="{{route('may.bank')}}" class="link-1">
                    <img src="{{asset('assets/img/duopharma.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-2">
                    <img src="{{asset('assets/img/simeberhad.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-3">
                    <img src="{{asset('assets/img/setia.png')}}" alt="">
                </a>

                <a href="{{route('may.bank')}}" class="link-4">
                    <img src="{{asset('assets/img/maybank-2.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-5">
                    <img src="{{asset('assets/img/asnb-2.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-6">
                    <img src="{{asset('assets/img/pnb.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-7">
                    <img src="{{asset('assets/img/sime-plant.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-8">
                    <img src="{{asset('assets/img/mnrb.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-9">
                    <img src="{{asset('assets/img/umw.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-10">
                    <img src="{{asset('assets/img/midf.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-11">
                    <img src="{{asset('assets/img/sime-prop.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-12">
                    <img src="{{asset('assets/img/prolintas.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-13">
                    <img src="{{asset('assets/img/sapura.png')}}" alt="">
                </a>
                <a href="{{route('may.bank')}}" class="link-14">
                    <img src="{{asset('assets/img/perodua.png')}}" alt="">
                </a>
            </div>
        </div>
    </main>

@endsection
