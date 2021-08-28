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
        <div class="main-img">
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
