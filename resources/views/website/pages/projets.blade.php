@extends('website.layouts.defaultother', ['title'=>'Projets'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'Projets'])

<div class="project-boxs-area" style="padding-top: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="assets/img/others/project-page-img1.png" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="/detailsprojet/dsjdksljds">Enterprise Resource Planning Implementation</a></h4>
                        <a href="/detailsprojet/dsjdksljds" class="learn" style="color:#fd8863; ">Voir plus <span><i
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
                        <h4><a href="/detailsprojet/dsjdksljds">Enterprise Resource Planning Implementation</a></h4>
                        <a href="/detailsprojet/dsjdksljds" class="learn" style="color:#fd8863; ">Voir plus <span><i
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
                        <h4><a href="/detailsprojet/dsjdksljds">Enterprise Resource Planning Implementation</a></h4>
                        <a href="/detailsprojet/dsjdksljds" class="learn" style="color:#fd8863; ">Voir plus <span><i
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
                        <h4><a href="/detailsprojet/dsjdksljds">Enterprise Resource Planning Implementation</a></h4>
                        <a href="/detailsprojet/dsjdksljds" class="learn" style="color:#fd8863; ">Voir plus <span><i
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
                        <h4><a href="/detailsprojet/dsjdksljds">Enterprise Resource Planning Implementation</a></h4>
                        <a href="/detailsprojet/dsjdksljds" class="learn" style="color:#fd8863; ">Voir plus <span><i
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
                        <h4><a href="/detailsprojet/dsjdksljds">Enterprise Resource Planning Implementation</a></h4>
                        <a href="/detailsprojet/dsjdksljds" class="learn" style="color:#fd8863; ">Voir plus <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!--=====PROJECT BOXS END=======-->

@livewire('website.services.contact')

@endsection