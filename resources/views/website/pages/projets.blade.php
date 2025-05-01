@extends('website.layouts.defaultother', ['title'=>'Projets'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'Projets'])

<div class="project-boxs-area" style="padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img1.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img2.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img3.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img4.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img5.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img6.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img7.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img8.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img9.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="project-details.html">Enterprise Resource Planning Implementation</a></h4>
                        <a href="project-details.html" class="learn">Learn More <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="space30"></div>
        <div class="row">
            <div class="col-12 m-auto">
                <div class="theme-pagination text-center">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li><a class="active" href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li>...</li>
                        <li><a href="#">12</a></li>
                        <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--=====PROJECT BOXS END=======-->

@livewire('website.services.contact')

@endsection