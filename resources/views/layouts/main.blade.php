<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Mignuu Admin Panel') }}</title>


        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer">
        @if (Session::has('showlogin'))
            <script>
                // alert('Show Login Form');
            </script>
        @endif

        <style>
            .desktop_nav,.dropdown_content{
                background-color: {{ $themeSettings['themeMenuBG'] }} !important;
            }
            .main-bg{
                background-color: {{ $themeSettings['themePageBG'] }} !important;
            }
            .desktop_nav li,.desktop_nav li a,.drop_down{
                color: {{ $themeSettings['themeBG'] }} !important;
            }
            .mobile_nav{}
        </style>

        @stack('style')

    </head>
    <body class="{{ $class ?? '' }}">
        <header>
            <nav class="desktop_nav container-fluid">
                <ul>
                    @foreach($headerMenu as $menu)
                        @if( $menu['child'] )
                            <li class="drop_down">
                                {{ $menu['label_en'] }}
                                <i class="bi bi-chevron-down"></i>
                                <div class="dropdown_content" >
                                    <ul>
                                        @foreach( $menu['child'] as $child )
                                            <li class="">
                                                @if(Config::get('app.locale') == 'en')
                                                    <a href="{{ $child['link'] }}" title="">{{ $child['label_en'] }}</a>
                                                @elseif (Config::get('app.locale') == 'bm')
                                                    <a href="{{ $child['link'] }}" title="">{{ $child['label_bm'] }}</a>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul><!-- /.sub-menu -->
                                </div>
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
                    <li class="drop_down">
                        User
                        <i class="bi bi-chevron-down"></i>
                        <div class="dropdown_content" >
                            <ul>
                                <li><a id="logoutUser">{{ __('auth.logout') }}</a></li>
                                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            </ul><!-- /.sub-menu -->
                        </div>
                    </li>
                    @endauth
                    <li><a href="{{ route('localization' , 'bm') }}"><small>BM</small></a> | <a href="{{ route('localization' , 'en') }}"><small> EN </small></a></li>
                </ul>
            </nav><!-- /. Desktop Navbar -->

            <img id="hamburger_btn" src="{{ asset('assets/front/img/menu.svg') }} " alt="">

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
                                <div class="dropdown_content" >
                                    <ul>
                                        @foreach( $menu['child'] as $child )
                                            @if(Config::get('app.locale') == 'en')
                                                <li class=""><a href="{{ $child['link'] }}" title="">{{ $child['label_en'] }}</a></li>
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
                    <i  class="bi bi-x close_btn"></i>
                </div>
                <div class="row">
                    <div class="col-8">
                        <form action="{{ url('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input class="custom_inputs" type="email" name="email" placeholder="{{ __('auth.email') }}" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-md-5 mb-3">
                                <input class="custom_inputs" type="password" name="password" placeholder="{{ __('auth.password') }}" value="{{ old('password') }}">
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
                    <i  class="bi bi-x close_btn"></i>
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
                                <input class="custom_inputs" type="text" name="phone" placeholder="{{ __('auth.phoneNumber') }}">
                            </div>
                            <div class="mb-3">
                                <input class="custom_inputs" type="text" name="ic_number" placeholder="{{ __('auth.icn') }}">
                            </div>
                            <div class="mb-3">
                                <input class="custom_inputs" type="password" name="password" placeholder="{{ __('auth.password') }}">
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" value="terms" id="flexCheckDefault">
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

        <!-- jQuery -->
        <script src="{{asset('assets/front/js/jquery.js') }}"></script>
        <script src="{{asset('assets/front/js/bootstrap.bundle.js') }}"></script>
        <script src="{{asset('assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/front/js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function () {
                $('#datepicker').datepicker();
                $('#datepicker').on('changeDate', function () {
                    $('#my_hidden_input').val(
                        $('#datepicker').datepicker('getFormattedDate')
                    );
                });

                $(".owl-carousel").owlCarousel({
                    loop: true,
                    nav: true,
                    items: 3,
                    dots: false
                });
                $(".nav-link").click(function () {
                    $('.nav-link').removeClass('active');
                    $(this).addClass('active');
                });

            });
        </script>
        <script>

            const khidmat_nasihat_section = document.querySelector("#khidmat_nasihat_section")
            const tetapkan_section = document.querySelector("#tetapkan_section")
            const tetapkan_btn = document.querySelector("#tetapkan_btn")
            const back_btn = document.querySelector("#back_btn")

            tetapkan_btn.addEventListener("click", () => {
                khidmat_nasihat_section.style.display = "none"
                tetapkan_section.style.display = "block"
            })
            back_btn.addEventListener("click", () => {
                khidmat_nasihat_section.style.display = "block"
                tetapkan_section.style.display = "none"
            })
        </script>
        <script>
            const program = document.querySelector("#program")
            const jadual = document.querySelector("#jadual")
            const programContent = document.querySelector("#program_content")
            const jadualContent = document.querySelector("#jadual_content")
            const programModal = document.querySelector("#program-modal")
            const programImgs = document.querySelectorAll("#program_content img")
            const programModalContent = document.querySelector(".program-modal-content")
            const programCloseBtn = document.querySelector("#close-btn")



            program.addEventListener("click", () => {
                programContent.style.display = "flex"
                jadualContent.style.display = "none"
                program.classList.add("active_tab")
                jadual.classList.remove("active_tab")
            })
            jadual.addEventListener("click", () => {
                programContent.style.display = "none"
                jadualContent.style.display = "flex"
                program.classList.remove("active_tab")
                jadual.classList.add("active_tab")
            })
            programImgs.forEach(img => {
                img.addEventListener("click", () => {
                    programModal.style.bottom = "0px"
                    // overlay.style.display = "block"
                    programModalContent.style.bottom = "55%"
                    setTimeout(() => {

                        programModalContent.style.bottom = "50%"
                    }, 300);

                })
            });
            programCloseBtn.addEventListener("click", () => {
                programModalContent.style.bottom = "-155%"
                programModal.style.bottom = "-1000px"
            })


        </script>
        <script>
            $('.home .main-img .desktopImage').attr('src' , "{{ asset('uploads') }}/{{ $themeSettings['desktopImage'] }}");
            $('.home .main-img .mobileImage').attr('src' , "{{ asset('uploads') }}/{{ $themeSettings['mobileImage'] }}");
            // Logout User
            $('#logoutUser').on('click',function(){
                $('#logoutForm').submit();
            });

            /*
            * Show Login Forms Conditions
            * 1. If showlogin is set in Parameter
            * 2. If showlogin in set in errors
            */
            var set = "{{ app('request')->input("showlogin") }}";
            if(set != ""){
                var loginModal = document.querySelector("#login_modal");
                overlay.style.display = "block"
                loginModal.style.bottom = "55%"
                setTimeout(() => {
                    loginModal.style.bottom = "50%"
                }, 300);
            }
        </script>

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
