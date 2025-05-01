@extends('website.layouts.defaultother', ['title'=>'Details service'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'Details service'])

@livewire('website.services.detailsservice', ['slug' => $service])

<div class="cta">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="heading1-w">
                    <h2>At TechXen IT Solutions, We're Committed To Businesses</h2>
                    <div class="space16"></div>
                    <p>Take the first step towards achieving your business goals by contacting us today. Schedule a
                        consultation with one of our IT specialists to discuss your objectives and explore how our
                        innovative solutions can propel.</p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="buttons">
                    <a class="cta-btn1" href="service.html">Request a Consultaion <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                    <a class="cta-btn2" href="service.html">Explore Solution <span><i
                                class="fa-solid fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection