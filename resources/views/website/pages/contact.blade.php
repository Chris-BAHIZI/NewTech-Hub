@extends('website.layouts.defaultother', ['title'=>'Contact'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'Contact'])

<div class="contact-page" style="padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-boxs">
                    <div class="heading1">
                        <h2>Contact Information</h2>
                        <div class="space16"></div>
                        <p>We’ve grown up with the internet revolution, and we <br> know how to deliver on its</p>
                    </div>
                    <div class="contact-box">
                        <div class="icon">
                            <img src="assets/img/icons/contact-page-icon1.png" alt="">
                        </div>
                        <div class="heading">
                            <h5>Contact Us</h5>
                            <a href="tel:(124)555-6565" class="text">(124) 555-6565</a>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class="icon">
                            <img src="assets/img/icons/contact-page-icon2.png" alt="">
                        </div>
                        <div class="heading">
                            <h5>Send Us a Mail</h5>
                            <a href="mailto:admin@techxen.org " class="text">admin@techxen.org </a>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class="icon">
                            <img src="assets/img/icons/contact-page-icon3.png" alt="">
                        </div>
                        <div class="heading">
                            <h5>Office Location</h5>
                            <a href="tel:(124)555-6565" class="text">73 Bridge St Brooklyn Arakansas <br> 85032 United
                                States, NY 10018</a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-form-details">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <input type="text" placeholder=" Votre nom">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input">
                                    <input type="text" placeholder=" Votre post-nom">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-input">
                                    <input type="email" placeholder=" Votre adresse mail">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-input">
                                    <input type="number" placeholder=" Numero téléphone">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <input type="text" placeholder=" Sujet">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="single-input">
                                    <textarea cols="30" rows="5" placeholder=" Votre message"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button class="theme-btn1">Envoyer message <span><i
                                            class="fa-solid fa-arrow-right"></i></span></button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=====CONACT AREA END=======-->
<div class="space100"></div>

<div class="contact-map-page">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196064.65881483705!2d88.93201515862421!3d24.061083775097945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39febca82f6a21ed%3A0x4040980d7c6874f8!2sKushtia%20District!5e0!3m2!1sen!2sbd!4v1673751720794!5m2!1sen!2sbd"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@livewire('website.services.contact')

@endsection