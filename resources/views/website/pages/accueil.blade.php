<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
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
    @include('website.layouts._header')
    <!--=====HEADER END=======-->

    <!--=====Mobile header start=======-->
    @include('website.layouts._headermobile')
    <!--=====Mobile header end=======-->

    <!--=====HERO AREA START=======-->

    <div class="hero1"
        style="background-image: url({{ asset('assets/img/bg/hero1-bg.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="main-headding">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img
                                src="{{ asset('assets/img/icons/span1.png') }}" alt=""> TechXen Technology & It Solution</span>
                        <h1 class="title tg-element-title">Transform Your Business With Next Generation <span
                                class="after">IT Solutions</span></h1>
                        <div class="space16"></div>
                        <p>Welcome to TechXen where we specialise in delivering tailored technology and IT solutions
                            designed to propel your business forward. From streamlining operations to and driving
                            growth.</p>

                        <div class="space30"></div>
                        <div class="buttons">
                            <a class="theme-btn1" href="contact.html">Get Started Now <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                            <a class="play-btn" href="https://www.youtube.com/watch?v=kcfs1-ryKWE"><span><i
                                        class="fa-regular fa-play"></i></span> Watch Demo Video</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="hero1-all-images">
                        <div class="image1 ">
                            <img src="{{ asset('assets/img/hero/hero1-image1.png') }}" alt="">
                        </div>
                        <div class="image2 reveal">
                            <img src="{{ asset('assets/img/hero/hero1-image2.png') }}" alt="">
                        </div>
                        <div class="image3 shape-animaiton3">
                            <img src="{{ asset('assets/img/hero/hero1-image3.png') }}" alt="">
                        </div>
                        <div class="image4 shape-animaiton3">
                            <img src="{{ asset('assets/img/hero/hero1-image4.png') }}" alt="">
                        </div>
                        <div class="shape1">
                            <img src="{{ asset('assets/img/shapes/header1-shape1.png') }}" alt="">
                        </div>
                        <div class="shape2">
                            <img src="{{ asset('assets/img/shapes/header1-shape2.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====HERO AREA END=======-->

    <!--=====HERO BOTTOM AREA START=======-->

    <div class="">
        <div class="container">
            <div class="row hero-bottom-area">
                <div class="col-lg-3">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/hero-bottom-icon1.png') }}" alt="">
                        </div>
                        <div class="headding">
                            <h5>4x Award Wining</h5>
                            <p>Always ready to support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/hero-bottom-icon2.png') }}" alt="">
                        </div>
                        <div class="headding">
                            <h5>2.5k Case Solved</h5>
                            <p>It Solution case solved</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/hero-bottom-icon3.png') }}" alt="">
                        </div>
                        <div class="headding">
                            <h5>150k Optimisation</h5>
                            <p>Keywords into online</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="single-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/hero-bottom-icon4.png') }}" alt="">
                        </div>
                        <div class="headding">
                            <h5>4x Award Wining</h5>
                            <p>Always ready to support</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--=====HERO BOTTOM AREA END=======-->


    <!--=====ABOUT AREA START=======-->

    <div class="about1 sp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image">
                        <div class="image1 reveal">
                            <img src="{{ asset('assets/img/about/about1-img1.png') }}" alt="">
                        </div>
                        <div class="image2 reveal image-anime">
                            <img src="{{ asset('assets/img/about/about1-img2.png') }}" alt="">
                        </div>
                        <div class="icon-box">
                            <img src="{{ asset('assets/img/icons/about1-shape-icon.png') }}" alt="">
                            <h4>Assistance 24h/24 et 7j/7</h4>
                            <p>NewTech Hub Technologie et solution informatique</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="heading1">
                        <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img
                                src="{{ asset('assets/img/newdesign/span1.png') }}" alt=""> Qui sommes-nous</span>
                        <h2 class="title tg-element-title">Découvrez notre histoire : autonomiser les entreprises grâce à
                            l'innovation
                        </h2>
                        <div class="space16"></div>
                        <p data-aos="fade-left" data-aos-duration="800">NewTech Hub, pionnier dans le domaine des
                            technologies et des solutions informatiques, s'engage à révolutionner la façon
                            dont les entreprises prospèrent à l'ère du numérique. Notre approche repose sur la
                            collaboration, la transparence et une
                            quête constante d'excellence. Nous sommes convaincus qu'en gardant une longueur d'avance et en
                            s'adaptant au changement,
                            nous pouvons aider nos clients à garder une longueur d'avance sur la concurrence.</p>
    
                        <ul class="list" data-aos="fade-left" data-aos-duration="1100">
                            <li><span><i class="fa-solid fa-check"></i></span> Repenser radicalement le système informatique
                                à valeur ajoutée.</li>
                            <li><span><i class="fa-solid fa-check"></i></span> Mettez en évidence tous les arguments de
                                vente uniques ou différenciateurs.</li>
                            <li><span><i class="fa-solid fa-check"></i></span> Intégrez des éléments visuels tels que des
                                photos d’équipe.</li>
                        </ul>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="900">
                            <a class="theme-btn1" href="{{route('contact')}}">Contactez-nous <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====ABOUT AREA END=======-->


    @livewire('website.accueil.services')
    @livewire('website.services.contact')
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