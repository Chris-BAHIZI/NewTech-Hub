<header>
    <div class="header-area header-area1 header-area-all d-none d-lg-block" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{route('accueil')}}">
                                <img src="{{asset('assets/img/newdesign/header-logo1.png')}}" alt="">
                            </a>
                        </div>


                        <div class="main-menu-ex main-menu-ex1">
                            <ul>
                                <li><a href="{{route('accueil')}}">Accueil </a></li>
                                <li><a href="{{route('aproposdenous')}}">A propos de nous </a></li>
                                <li><a href="{{route('services')}}">Services </a></li>
                                {{-- <li><a href="{{route('projets')}}">Projets </a></li> --}}
                                <li><a href="{{route('contact')}}">Contact </a></li>
                            </ul>
                        </div>



                        <div class="header1-buttons">
                            <div class="contact-btn">
                                <div class="icon">
                                    <img src="{{asset('assets/img/icons/header1-icon.png')}}" alt="">
                                </div>
                                <div class="headding">
                                    <p>Passer un appel</p>
                                    <a href="tel:+243 834 007 970">+243 834 007 970</a>
                                </div>
                            </div>
                            <div class="button">
                                <a class="theme-btn1" href="{{route('contact')}}">Contactez-nous<span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>