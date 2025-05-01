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
                        <h3>25</h3>
                        <p>Années <br> d'expérience</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="heading1">
                    <span class="span"><img src="assets/img/newdesign/span1.png" alt=""> Qui sommes-nous ?</span>
                    <h2>Empower Your Business With Our Comprehensive IT Solutions</h2>
                    <div class="space16"></div>
                    <p>Welcome to TechXen, your premier destination for cutting-edge technology solutions and IT
                        services. At TechXen, we are passionate about harnessing the power of technology to empower
                        businesses a like.</p>

                    <div class="space10"></div>

                    <div class="porgress-line-all">
                        <div class="progress-line">
                            <div class="heading">
                                <h6>IT Consulting</h6>
                                <p>80%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress-line">
                            <div class="heading">
                                <h6>Cyber Security</h6>
                                <p>90%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>

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

<!--=====ABOUT AREA END=======-->


<!--=====TEAM AREA START=======-->

<div class="team2 about-page-team sp bg1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="heading1">
                    <span class="span"><img src="assets/img/newdesign/span1.png" alt=""> Notre équipe</span>
                    <h2>Rencontrez notre équipe d'experts</h2>
                </div>
            </div>
        </div>

        <div class="space30"></div>
        <div class="row">
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