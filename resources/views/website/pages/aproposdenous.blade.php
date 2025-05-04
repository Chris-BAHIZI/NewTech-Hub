@extends('website.layouts.defaultother', ['title'=>'A propos de nous'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'A propos de nous'])
<div class="about2 about-page-sec" style="padding: 30px 0px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about2-images">
                    <div class="image1">
                        <img src="assets/img/about/about2-img1.png" alt="">
                    </div>
                    <div class="image2">
                        <img src="assets/img/about/about2-img2.png" alt="">
                    </div>
                    <div class="image3">
                        <img src="assets/img/about/about2-img3.png" alt="">
                    </div>
                    <div class="counter-box">
                        <h3>5</h3>
                        <p>Années <br> d'expérience</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="heading1">
                    <span class="span"><img src="assets/img/newdesign/span1.png" alt=""> Qui sommes-nous ?</span>
                    <h2 >Dynamisez votre entreprise avec nos solutions informatiques complètes</h2>
                    <div class="space16"></div>
                    <p style="text-align: justify; text-justify: inter-word;">
                        NEW TECHNOLOGY HUB SARL est une entreprise multidisciplinaire basée en République Démocratique du Congo, active à
                        l’échelle nationale et internationale. Elle opère dans plusieurs secteurs : production et vente d’eau en bouteille
                        (750ml à 20L), fabrication de pavés écologiques à base de plastique recyclé, technologies de l'information (TIC),
                        sécurité électronique (vidéosurveillance, contrôle d’accès), énergies renouvelables (systèmes photovoltaïques), BTP,
                        services divers (gardiennage, maintenance, gestion de parkings), import-export, impression personnalisée, agriculture,
                        élevage et exploitation minière.
                        
                    </p>

                    <div class="space30"></div>
                    <div class="button">
                        <a class="theme-btn1" href="{{route('contact')}}">Contactez-nous <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<div class="solution bg1" style="padding-top: 40px; ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="heading1">
                    {{-- <span class="span"><img src="assets/img/icons/span1.png" alt=""> Our Mission</span>
                    <h2>Innovating for Success: Our Technology Mission</h2>
                    <div class="space16"></div> --}}
                    <p style="text-align: justify; text-justify: inter-word;">
                    <span class="span"><img src="{{asset('assets/img/newdesign/span1.png')}}" alt=""> Notre mission</span><br>
                    Offrir des solutions durables et innovantes en RDC et à l’international, à travers la production d’eau de qualité, la
                    fabrication de matériaux écologiques, les TIC, les énergies renouvelables, la sécurité, le BTP, les services généraux et
                    le commerce, en répondant efficacement aux besoins de nos clients.</p><br>
                    <p style="text-align: justify; text-justify: inter-word;">
                    <span class="span"><img src="{{asset('assets/img/newdesign/span1.png')}}" alt=""> Notre vision</span><br>
                    Devenir un acteur de référence en RDC et au-delà, reconnu pour sa polyvalence, son engagement envers le développement
                    durable et sa capacité à proposer des solutions intégrées au service des communautés et de l’avenir.
                    
                    VALEURS FONDAMENTALES NEW TECHNOLOGY HUB Sarl : <span style="color: #191860; ">Performance</span>, <span style="color: #191860; ">Innovation</span>, <span style="color: #191860; ">Travail d'équipe</span> et <span style="color: #191860; ">Traiter le client comme nous aimerions être traités.</span></p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="solution-images">
                    <div class="image1">
                        <img src="assets/img/others/solution-img1.png" alt="">
                    </div>
                    <div class="image2">
                        <img src="assets/img/others/solution-img2.png" alt="">
                    </div>
                    <div class="image3">
                        <img src="assets/img/others/solution-img3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="team2 about-page-team bg1" style="padding-top: 40px; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="heading1">
                    <span class="span"><img src="{{asset('assets/img/newdesign/span1.png')}}" alt=""> Notre équipe</span>
                    <h2>Rencontrez notre équipe d'experts</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row" style="padding-bottom: 35px; ">
            <div class="col-lg-3 col-md-6">
                <div class="team-box">
                    <div class="image-area">
                        <div class="image">
                            <img src="assets/img/team/team2-img1.png" alt="">
                        </div>
                        <div class="icon-area">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="space30"></div>
                    <div class="heading1">
                        <h4><a href="#">John Doe</a></h4>
                        <div class="space10"></div>
                        <p>CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-box">
                    <div class="image-area">
                        <div class="image">
                            <img src="assets/img/team/team2-img2.png" alt="">
                        </div>
                        <div class="icon-area">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="space30"></div>
                    <div class="heading1">
                        <h4><a href="#">Jane Smith</a></h4>
                        <div class="space10"></div>
                        <p>Chef Technology Officer</p>
                    </div>

                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="team-box">
                    <div class="image-area">
                        <div class="image">
                            <img src="assets/img/team/team2-img3.png" alt="">
                        </div>
                        <div class="icon-area">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="space30"></div>
                    <div class="heading1">
                        <h4><a href="#">Sarah Thompson </a></h4>
                        <div class="space10"></div>
                        <p>Head of Project Management</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-box">
                    <div class="image-area">
                        <div class="image">
                            <img src="assets/img/team/team2-img4.png" alt="">
                        </div>
                        <div class="icon-area">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="space30"></div>
                    <div class="heading1">
                        <h4><a href="#">David Garcia</a></h4>
                        <div class="space10"></div>
                        <p>Lead Software Engineer</p>
                    </div>

                </div>
            </div>


        </div>

    </div>
</div>

<!--=====TEAM AREA END=======-->

@livewire('website.services.contact')
@endsection