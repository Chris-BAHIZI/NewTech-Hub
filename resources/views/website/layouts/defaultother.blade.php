<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ page_title($title ?? '') }}</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets/img/newdesign/titile.png') }}" type="image/x-icon">


    <!--=====CSS=======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">


    @livewireStyles

    <style type="text/css">
        body {
            zoom: 90%;
        }
    
        @media screen and (max-width: 767px) {
            body {
                zoom: 100% !important;
            }
        }
    </style>


    <!--=====JQUERY=======-->
    <script src="{{ asset('assets/js/jquery-3-7-1.min.js') }}"></script>
</head>

<body class="body tg-heading-subheading animation-style3">

    <!--=====progress END=======-->
    @include('website.layouts._paginacontainer')
    <!--=====progress END=======-->

    <!-- Preloader -->
    @include('website.layouts._preloader')


    <!--=====HEADER START=======-->
    @include('website.layouts._headertop')
    @include('website.layouts._headerother')
    <!--=====HEADER END=======-->

    <!--=====Mobile header start=======-->
    @include('website.layouts._headermobilephone')
    <!--=====Mobile header end=======-->
    
    @yield('content')

    <!--===== FOOTER AREA START =======-->
    @include('website.layouts._footer')
    <!--===== FOOTER AREA END =======-->


    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
    <script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/js/Splitetext.js') }}"></script>
    <script src="{{ asset('assets/js/text-animation.js') }}"></script>
    <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lineProgressbar.js') }}"></script>
    <script src="{{ asset('assets/js/ripple-btn.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @livewireScripts
</body>

</html>