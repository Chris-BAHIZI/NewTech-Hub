@extends('website.layouts.defaultother', ['title'=>'Contact'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'Contact'])

<div class="contact-page" style="padding: 30px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-boxs">
                    <div class="heading1">
                        <h2>Coordonnées</h2>
                        <div class="space16"></div>
                        <p>Nous avons grandi avec la révolution Internet et nous savons comment la mettre en œuvre.</p>
                    </div>
                    <div class="contact-box">
                        <div class="icon">
                            <img src="{{asset('assets/img/icons/contact-page-icon1.png')}}" alt="">
                        </div>
                        <div class="heading">
                            <h5>Contactez-nous</h5>
                            <a href="tel:+(243)834007970" class="text">+(243) 834 007 970</a>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class="icon">
                            <img src="{{asset('assets/img/icons/contact-page-icon2.png')}}" alt="">
                        </div>
                        <div class="heading">
                            <h5>Adresse mail</h5>
                            <a href="mailto:info@newtechnologyhub.org " class="text">info@newtechnologyhub.org </a>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class="icon">
                            <img src="{{asset('assets/img/icons/contact-page-icon3.png')}}" alt="">
                        </div>
                        <div class="heading">
                            <h5>Emplacement du bureau</h5>
                            <a href="tel:(243)834007970" class="text">Av. Maimoto / Com. Kasavubu / Ville Kinshasa/ RDC</a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-form-details">
                    {{-- <form action="#"> --}}
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
                                <button class="theme-btn1 col-sm-12">Envoyer message <span><i
                                            class="fa-solid fa-arrow-right"></i></span></button>
                            </div>

                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>



<div class="contact-map-page">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254595.4750363365!2d15.15792644260089!3d-4.400943252924867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a3130fe066a8b%3A0x168b7e4e1f52378d!2sKinshasa!5e0!3m2!1sen!2scd!4v1746090235549!5m2!1sen!2scd"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@livewire('website.services.contact')

@endsection