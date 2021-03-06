<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="facebook-domain-verification" content="n8y1zuw9o7cyetgowao76gk2oga5o6" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MSD Admin</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->

    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

@stack('style')

<!-- Toasts CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/jquery-toast/toast.css">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Styles CSS -->
    <link type="text/css" href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets') }}/css/styles.css" rel="stylesheet">

    @include('component.google-analaytics')
</head>
<body class="{{ $class ?? '' }}">
<!-- Logout Form For Super Admin -->
@auth('superAdmin')
    <form id="logout-form" action="{{ route('star.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endauth
<!-- Logout Form For Admin -->
@auth('admin')
    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endauth
<!-- Logout Form For Partner -->
@auth('partner')
    <form id="logout-form" action="{{ route('partner.logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endauth
@auth
    @include('layouts.navbars.sidebar')
@endauth
<div class="main-content">
    @auth
        @include('layouts.navbars.navs.auth')
    @endauth
    @yield('content')
</div>

<!-- jQuery -->
<script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/vendor/jquery-toast/toast.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function validateUploadImage(input) {
        var validExtensions = ['jpg', 'png', 'jpeg', 'gif']; //array of valid extensions
        var fileName = input.files[0].name;
        var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
        fileNameExt = fileNameExt.toLowerCase();
        if ($.inArray(fileNameExt, validExtensions) == -1) {
            input.type = ''
            input.type = 'file'
            $(input).attr('src',"");
            swal("", "Only these file types are accepted : " + validExtensions.join(', '), "error");
            return false;
        }
    }
    function clearFormInputField() {
        $('#store-admin input[type="text"]').val('');
        $('#store-admin input[type="email"]').val('');
        $('#store-admin input[type="password"]').val('');
        $('#store-admin input[type="number"]').val('');
        $('#store-admin textarea').val('');
        $('#store-admin select').val('');

    }
</script>
@stack('js')

<!-- Argon JS -->
<script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
<script src="{{ asset('assets') }}/js/functions.js"></script>

<!-- If we have any msg to Show -->
@if (Session::has('msg'))
    @if(Session::has('type'))
        <script> var type = '{{ Session::get("type") }}'; </script>
    @else
        <script> var type = 'success'; </script>
    @endif
    <script>
        jQuery.toast({
            text: '{{ Session::get("msg") }}',
            position: 'top-right',
            allowToastClose: false,
            loader: false,
            textColor: 'white',
            icon: type
        });

    </script>
@endif
</body>
</html>
