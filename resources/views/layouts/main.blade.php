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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<!--<title>{{ config('app.name', 'Mignuu Admin Panel') }}</title>-->
    <?php
    $array = explode('/', $_SERVER['REQUEST_URI']);
    $page_path = end($array);
    $pages = array(
        '' => '0',
        'msd-live' => '1',
        'program' => '2',
        'pertandingan' => '3',
        'khidmat' => '4',
        'promotion' => '5',
        'rakan-korporat' => '6',
        'faq' => '7',
        'jom-kira' => '8',
        'live-trivia' => '9',
        'draw-118' => '10',
        'cabutan-bertuah' => '11',
    );
    ?>
    @if(array_key_exists($page_path, $pages))
        <?php $current_page = $pages[$page_path]; ?>
        @if($current_page == 8)
            <title>Minggu Saham Digital 2021 - {{ __('general.the_match_button_1') }}</title>
        @elseif($current_page == 9)
            <title>Minggu Saham Digital 2021 - {{ __('general.the_match_button_2') }}</title>
        @elseif($current_page == 10)
            <title>Minggu Saham Digital 2021 - {{ __('general.the_match_button_3') }}</title>
        @elseif($current_page == 11)
            <title>Minggu Saham Digital 2021 - {{ __('general.the_match_button_4') }}</title>
        @else
            @if(Config::get('app.locale') == 'en')
                <title>Minggu Saham Digital 2021 - {{$headerMenu[$current_page]['label_en']}}</title>
            @elseif (Config::get('app.locale') == 'bm')
                <title>Minggu Saham Digital 2021 - {{$headerMenu[$current_page]['label_bm']}}</title>
            @endif
        @endif
    @else
        <title>Minggu Saham Digital 2021</title>
    @endif

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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink{{$loop->index}}"
                           role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Config::get('app.locale') == 'en' ? $menu['label_en'] : $menu['label_bm'] }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink{{$loop->index}}">
                            @foreach( $menu['child'] as $child )
                                <li>
                                    @if(Config::get('app.locale') == 'en')
                                        <a target="_blank" class="dropdown-item" href="{{ $child['link'] }}"
                                           style="color: blue !important;" title="">{{ $child['label_en'] }}</a>
                                    @elseif (Config::get('app.locale') == 'bm')
                                        <a target="_blank" class="dropdown-item" href="{{ $child['link'] }}"
                                           style="color: blue !important;" title="">{{ $child['label_bm'] }}</a>
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
                        <li><a href="{{route('user.logout')}}" style="color: blue !important;"
                               class="dropdown-item">{{ __('auth.logout') }}</a></li>
                    </ul>
                </li>
            @endauth
            <li><a href="{{ route('localization' , 'bm') }}"><small>BM</small></a> | <a
                    href="{{ route('localization' , 'en') }}"><small> EN </small></a></li>
        </ul>
    </nav><!-- /. Desktop Navbar -->

    <div class="mobile-header d-lg-none px-3 py-2">
        <div>
            <div class="d-md-none header-imgs">
                <img src="{{asset('assets/img/header-pnb-white.png')}}" class="img-fluid me-2">
                <img src="{{asset('assets/img/header-asnb-white.png')}}" class="img-fluid">
            </div>
            <small><a href="{{ route('localization' , 'bm') }}">BM</a> | <a
                    href="{{ route('localization' , 'en') }}">EN</a> </small>
        </div>

        <img id="hamburger_btn" src="{{asset('assets/img/menu-white.svg')}}" alt="">

    <!--<?php if($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php"){ ?>-->
    <!--<img id="hamburger_btn" src="{{asset('assets/img/menu.svg')}}" alt="">-->
    <!--<?php } else{ ?>-->
    <!--<img id="hamburger_btn" src="{{asset('assets/img/menu-white.svg')}}" alt="">-->
    <!--<?php } ?>-->
    </div>

    <nav class="mobile_nav">
        <div class="text-end">
            <i id="close_btn" class="bi bi-x"></i>
        </div>
        <ul class="mb-3">
            @guest('user')
                <li><a id="mobile_register" class="pop-btns">{{ __('auth.register') }}</a></li>
                <li><a id="mobile_login" class="pop-btns">{{ __('auth.login') }}</a></li>
            @endguest
            @if(\Illuminate\Support\Facades\Auth::guard('user')->check())
                <li> {{Auth::guard('user')->user()->name}} </li>
                <li><a href="{{route('user.logout')}}" style="color: blue !important;"
                       class="dropdown-item">{{ __('auth.logout') }}</a></li>
            @endif
        </ul>
        <ul>
            @foreach($headerMenu as $menu)
                @if( $menu['child'] )
                    <li class="drop_down">
                        @if(Config::get('app.locale') == 'en')
                            {{ $menu['label_en'] }}
                        @else
                            {{ $menu['label_bm'] }}
                        @endif

                        <div class="dropdown_content">
                            <ul>
                                @foreach( $menu['child'] as $child )
                                    @if(Config::get('app.locale') == 'en')
                                        <li class=""><i class="bi bi-chevron-right"></i> <a target="_blank" href="{{ $child['link'] }}"
                                                                                            title="">{{ $child['label_en'] }}</a>
                                        </li>
                                    @elseif (Config::get('app.locale') == 'bm')
                                        <li class=""><i class="bi bi-chevron-right"></i> <a target="_blank" href="{{ $child['link'] }}"
                                                                                            title="">{{ $child['label_bm'] }}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul><!-- /.sub-menu -->
                        </div>
                    </li>
                @else
                    <li>
                    @if(Config::get('app.locale') == 'en')
                        <li class=""><a href="{{ $menu['link'] }}" title="">{{ $menu['label_en'] }}</a></li>
                    @elseif (Config::get('app.locale') == 'bm')
                        <li><a href="{{ $menu['link'] }}" title="">{{ $menu['label_bm'] }}</a></li>
                    @endif
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
            <i class="bi bi-x close_btn" id="login_close_button"></i>
        </div>
        <div class="row">
            <div class="col-8">
                <form action="{{route('user_login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <input class="custom_inputs" type="email" name="email" placeholder="{{ __('auth.email') }}"
                               value="{{  old('email')  }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-md-5 mb-3">
                        <input class="custom_inputs" type="password" name="password"
                               placeholder="{{ __('auth.password') }}" value="{{  old('password')  }}">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="mb-md-5 mb-3">
                        <input class="submit-btn" type="submit" value="{{ __('auth.send') }}">
                    </div>
                    <!--<a class="forget" href="{{ route('password.request') }}">{{ __('auth.forgotPassword') }}?</a>-->
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
                <form action="{{ route('user_register') }}" method="POST" class="scrol">
                    @csrf
                    <div class="mb-3">
                        <input class="custom_inputs" type="text" value="{{ old('full_name') }}" name="full_name"
                               placeholder="{{ __('auth.name') }}">
                        @if ($errors->has('full_name'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('full_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input class="custom_inputs" type="email" value="{{ old('email') }}" name="email"
                               placeholder="{{ __('auth.email') }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input class="custom_inputs" type="text" value="{{ old('phone') }}" name="phone"
                               placeholder="{{ __('auth.phoneNumber') }}">
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <input class="custom_inputs" type="text" value="{{ old('ic_number') }}" name="ic_number"
                               placeholder="{{ __('auth.icn') }}">
                        @if ($errors->has('ic_number'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('ic_number') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <input class="custom_inputs" type="password" name="password"
                               placeholder="{{ __('auth.password') }}">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
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
                    <div class="mb-4">
                        <p class="mb-2">{{ __('auth.registerStatement') }}</p>
                        <a href="">{{ __('auth.terms&condition') }}</a>
                    </div>
                    <div class="mb-3">
                        <input class="submit-btn" type="submit" value="{{ __('auth.send') }}">
                    </div>
                </form>
            </div>
            <div class="col-3 pe-0">
                <img src="{{ asset('assets/front/img/drone1_1.png') }}" class="drone1" alt="">
                <img src="{{ asset('assets/front/img/drone2_2.png') }}" class="drone2" alt="">
            </div>
        </div>
    </div>
@endguest

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>


@if (Session::get('error'))
    {{ Session::first() }}
@endif

@if(session()->has('msg'))
    <script>
        alert("{{session()->get('msg')}}")
    </script>
@endif
@if(session()->has('from'))
    @if(session()->get('from') == "login")
        <script>
            overlay.style.display = "block"
            loginModal.style.bottom = "55%"
            setTimeout(() => {
                loginModal.style.bottom = "50%"
            }, 300);
        </script>
    @endif
    @if(session()->get('from') == "register")
        <script>
            overlay.style.display = "block"
            registerModal.style.bottom = "55%"
            setTimeout(() => {
                registerModal.style.bottom = "50%"
            }, 300);
        </script>
    @endif
@endif
@stack('js')


</body>
</html>
