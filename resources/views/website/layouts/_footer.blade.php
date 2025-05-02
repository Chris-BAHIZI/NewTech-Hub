<div class="footer1 _relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-footer-items footer-logo-area">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('assets/img/newdesign/footer-logo1.png') }}" alt=""></a>
                    </div>
                    <div class="space20"></div>
                    <div class="heading1">
                        <p style="text-align: justify; text-justify: inter-word;">
                            Chez NewTech Hub IT Solutions, nous nous engageons à fournir des solutions technologiques innovantes adaptées aux besoins
                            uniques des entreprises comme la vôtre.
                        </p>
                    </div>
                    <ul class="social-icon">
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg col-md-6 col-12">
                <div class="single-footer-items">
                    <h3>Services</h3>
                    @php 
                        use App\Models\Service;
                        $services = Service::get()->take(5);
                    @endphp
                    <ul class="menu-list">
                        @foreach ($services as $service)
                            <li><a href="#">{!! Str::limit($service->titre, 25, ' ..') !!}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg col-md-6 col-12">
                <div class="single-footer-items">
                    <h3>Raccourcis</h3>

                    <ul class="menu-list">
                        <li><a href="{{route('accueil')}}">Accueil </a></li>
                        <li><a href="{{route('aproposdenous')}}">A propos de nous </a></li>
                        <li><a href="{{route('services')}}">Services </a></li>
                        {{-- <li><a href="{{route('projets')}}">Projets </a></li> --}}
                        <li><a href="{{route('contact')}}">Contact </a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-12">
                <div class="single-footer-items">
                    <h3>Contact</h3>

                    <div class="contact-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/footer1-icon1.png') }}" alt="">
                        </div>
                        <div class="pera">
                            <a href="tel:+31 6 27470753">+31 6 27470753</a>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/footer1-icon2.png') }}" alt="">
                        </div>
                        <div class="pera">
                            <a href="tel:+31 6 27470753">+31 6 27470753</a>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/footer1-icon3.png') }}" alt="">
                        </div>
                        <div class="pera">
                            <a href="contact@newtechhub.org">contact@newtechhub.org</a>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/footer1-icon4.png') }}" alt="">
                        </div>
                        <div class="pera">
                            <a href="contact@newtechhub.org">www.newtechhub.org</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="space40"></div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12" style="padding-top:15px;  padding-bottom:15px;">
                    <div class="coppyright">
                        <center>Copyright @ {{date('Y')}} <span style="color:#fe6442; ">NewTech</span> Hub.All Rights Reserved</center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>