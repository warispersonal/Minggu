<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>{{ config('app.name', 'Mignuu Admin Panel') }}</title>
    @if (Session::has('showlogin'))
        <script>
            // alert('Show Login Form');
        </script>
    @endif
    @stack('style')

</head>
<body class="{{ $class ?? '' }}">
<header>
    <nav class="desktop_nav container-fluid">
        <ul>
            @foreach($headerMenu as $menu)
                @if( $menu['child'] )
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink{{$loop->index}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $menu['label_en'] }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink{{$loop->index}}">
                            @foreach( $menu['child'] as $child )
                                <li>
                                    @if(Config::get('app.locale') == 'en')
                                        <a  class="dropdown-item"href="{{ $child['link'] }}"  style="color: blue !important;" title="">{{ $child['label_en'] }}</a>
                                    @elseif (Config::get('app.locale') == 'bm')
                                        <a class="dropdown-item" href="{{ $child['link'] }}"  style="color: blue !important;" title="">{{ $child['label_bm'] }}</a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li>
                        @if(Config::get('app.locale') == 'en')
                            <a href="{{ $menu['link'] }}" title="">{{ $menu['label_en'] }}</a>
                        @elseif (Config::get('app.locale') == 'bm')
                            <a href="{{ $menu['link'] }}" title="">{{ $menu['label_bm'] }}</a>
                        @endif
                    </li>
                @endif
            @endforeach
        </ul>
        <ul class="ms-auto">
            @guest('user')
                <li><a id="register" class="pop-btns">{{ __('auth.register') }}</a></li>
                <li><a id="login" class="pop-btns">{{ __('auth.login') }}</a></li>
            @endguest
            @auth('user')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::guard('user')->user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a href="{{route('user.logout')}}" style="color: blue !important;" class="dropdown-item" >{{ __('auth.logout') }}</a></li>
                    </ul>
                </li>
            @endauth
            <li><a href="{{ route('localization' , 'bm') }}"><small>BM</small></a> | <a
                    href="{{ route('localization' , 'en') }}"><small> EN </small></a></li>
        </ul>
    </nav><!-- /. Desktop Navbar -->

    <div class="mobile-header d-lg-none px-3 py-2">
        <div>
            <h3 class="m-0">PNB ASNB</h3>
            <small>BM | EN</small>
        </div>


        <?php if($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php"){ ?>
        <img id="hamburger_btn" src="{{asset('assets/img/menu.svg')}}" alt="">
        <?php } else{ ?>
        <img id="hamburger_btn" src="{{asset('assets/img/menu-white.svg')}}" alt="">
        <?php } ?>
    </div>

    <nav class="mobile_nav">
        <div class="text-end">
            <i id="close_btn" class="bi bi-x"></i>
        </div>
        <ul class="mb-3">
            @guest
                <li><a id="mobile_register" class="pop-btns">{{ __('auth.register') }}</a></li>
                <li><a id="mobile_login" class="pop-btns">{{ __('auth.login') }}</a></li>
            @endguest
        </ul>
        <ul>
            @foreach($headerMenu as $menu)
                @if( $menu['child'] )
                    <li class="drop_down">
                        {{ $menu['label_en'] }}
                        <i class="bi bi-chevron-down"></i>
                        <div class="dropdown_content">
                            <ul>
                                @foreach( $menu['child'] as $child )
                                    @if(Config::get('app.locale') == 'en')
                                        <li class=""><a href="{{ $child['link'] }}"
                                                        title="">{{ $child['label_en'] }}</a></li>
                                    @elseif (Config::get('app.locale') == 'bm')
                                        <a href="{{ $menu['link'] }}" title="">{{ $menu['label_bm'] }}</a>
                                    @endif
                                @endforeach
                            </ul><!-- /.sub-menu -->
                        </div>
                    </li>
                @else
                    <li>
                    @if(Config::get('app.locale') == 'en')
                        <li class=""><a href="{{ $child['link'] }}" title="">{{ $child['label_en'] }}</a></li>
                    @elseif (Config::get('app.locale') == 'bm')
                        <a href="{{ $menu['link'] }}" title="">{{ $menu['label_bm'] }}</a>
                        @endif
                        </li>
                    @endif
                    @endforeach
        </ul>
    </nav><!-- /. Mobile Nav -->
</header>

<div class="main-content">
    @yield('content')
</div>

<!-- Login and Register Modals -->
@guest
    <div class="overlay"></div>

    <div id="login_modal" class="my_modal">
        <div class="d-flex justify-content-between">
            <h1 class="modal_heading">{{ __('auth.login') }}</h1>
            <i class="bi bi-x close_btn"></i>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input class="custom_inputs" type="email" name="email" placeholder="{{ __('auth.email') }}"
                               value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="mb-md-5 mb-3">
                        <input class="custom_inputs" type="password" name="password"
                               placeholder="{{ __('auth.password') }}" value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="mb-md-5 mb-3">
                        <input class="submit-btn" type="submit" value="{{ __('auth.send') }}">
                    </div>
                    <a class="forget" href="{{ route('password.request') }}">{{ __('auth.forgotPassword') }}?</a>
                </form>
            </div>
            <div class="col-4">
                <img src="{{ asset('assets/front/img/laptop.png') }}" class="laptop" alt="">
            </div>
        </div>
    </div>

    <div id="register_modal" class="my_modal">
        <div class="d-flex justify-content-between">
            <h1 class="modal_heading">{{ __('auth.register') }}</h1>
            <i class="bi bi-x close_btn"></i>
        </div>
        <div class="row">
            <div class="col-9">
                <form action="{{ url('register') }}" method="POST" class="scrol">
                    @csrf
                    <div class="mb-3">
                        <input class="custom_inputs" type="text" name="full_name" placeholder="{{ __('auth.name') }}">
                    </div>
                    <div class="mb-3">
                        <input class="custom_inputs" type="email" name="email" placeholder="{{ __('auth.email') }}">
                    </div>
                    <div class="mb-3">
                        <input class="custom_inputs" type="text" name="phone"
                               placeholder="{{ __('auth.phoneNumber') }}">
                    </div>
                    <div class="mb-3">
                        <input class="custom_inputs" type="text" name="ic_number" placeholder="{{ __('auth.icn') }}">
                    </div>
                    <div class="mb-3">
                        <input class="custom_inputs" type="password" name="password"
                               placeholder="{{ __('auth.password') }}">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="terms" value="terms"
                                   id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{ __('auth.terms') }}
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <p class="mb-0">{{ __('auth.registerStatement') }}</p>
                        <a href="">{{ __('auth.terms&condition') }}</a>
                    </div>
                    <div class="mb-3">
                        <input class="submit-btn" type="submit" value="{{ __('auth.send') }}">
                    </div>
                </form>
            </div>
            <div class="col-3 pe-0">
                <img src="{{ asset('assets/front/img/drone1.png') }}" class="drone1" alt="">
                <img src="{{ asset('assets/front/img/drone2.png') }}" class="drone2" alt="">
            </div>
        </div>
    </div>
@endguest

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@if ($errors->has('email') || $errors->has('password'))
    <script>
        var loginModal = document.querySelector("#login_modal");
        overlay.style.display = "block"
        loginModal.style.bottom = "55%"
        setTimeout(() => {
            loginModal.style.bottom = "50%"
        }, 300);
    </script>
@endif

@if (Session::get('error'))
    {{ Session::first() }}
@endif

@stack('js')

</body>
</html>
