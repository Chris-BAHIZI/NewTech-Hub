<div class="mobile-header d-block d-lg-none ">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="{{route('accueil')}}"><img src="{{asset('assets/img/logo/header-logo1.png')}}" alt=""></a>
                </div>
                <div class="mobile-nav-icon">
                    <i class="fa-duotone fa-bars-staggered"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar d-block d-lg-none">
    <div class="logo-m">
        <a href="index.html"><img src="assets/img/logo/header3-logo.png" alt=""></a>
    </div>
    <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

        <ul>
            <li><a href="{{route('accueil')}}">Accueil </a></li>
            <li><a href="{{route('aproposdenous')}}">A propos de nous </a></li>
            <li><a href="{{route('services')}}">Services </a></li>
            <li><a href="{{route('projets')}}">Projets </a></li>
            <li><a href="{{route('contact')}}">Contact </a></li>
        </ul>

        {{-- <div class="mobile-button">
            <a class="menu-btn2" href="{{route('services')}}">Voir plus <span><i class="fa-solid fa-arrow-right"></i></span></a>
        </div> --}}

        <div class="single-footer-items">
            <h3>Contactez-nous</h3>

            <div class="contact-box">
                <div class="icon">
                    <img src="{{ asset('assets/img/icons/footer1-icon1.png')}}" alt="">
                </div>
                <div class="pera">
                    <a href="tel:+31 6 27470753">+31 6 27470753</a>
                </div>
            </div>

            <div class="contact-box">
                <div class="icon">
                    <img src="{{ asset('assets/img/icons/footer1-icon2.png')}}" alt="">
                </div>
                <div class="pera">
                    <a href="tel:+31 6 27470753">+31 6 27470753</a>
                </div>
            </div>

            <div class="contact-box">
                <div class="icon">
                    <img src="{{ asset('assets/img/icons/footer1-icon3.png')}}" alt="">
                </div>
                <div class="pera">
                    <a href="mailto:contact@newtechhub.org">contact@newtechhub.org</a>
                </div>
            </div>

            <div class="contact-box">
                <div class="icon">
                    <img src="{{ asset('assets/img/icons/footer1-icon4.png')}}" alt="">
                </div>
                <div class="pera">
                    <a href="mailto:contact@newtechhub.org">www.newtechhub.org</a>
                </div>
            </div>

        </div>

        <div class="contact-infos">
            <h3>Notre emplacement</h3>
            <ul class="social-icon">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>

    </div>
</div>