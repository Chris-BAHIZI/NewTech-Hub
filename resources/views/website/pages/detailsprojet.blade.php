@extends('website.layouts.defaultother', ['title'=>'Details projet'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'Details projet'])

<div class="service-details-area-all" style="padding-top: 35px; padding-bottom: 35px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="service-details-post">
                    <article>
                        <div class="details-post-area">
                            <div class="image">
                                <img src="{{asset('assets/img/others/case8-img4.png')}}" alt="">
                            </div>
                            <div class="space20"></div>
                            <div class="heading1">
                                <h2>Streamline Your Business Operations with (ERP) Systems</h2>
                                <div class="space16"></div>
                                <p>Enterprise Resource Planning (ERP) systems are powerful tools designed to integrate
                                    and streamline various business processes, from finance and human resources to
                                    supply chain management and customer relationship management. At [Company Name], we
                                    specialize in ERP implementation, helping businesses of all sizes optimize their
                                    operations, improve efficiency, and drive growth.</p>
                            </div>
                        </div>
                    </article>

                    <div class="space50"></div>

                    <article>
                        <div class="details-post-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="heading1">
                                        <h5>Our (ERP) Implementation Process</h5>
                                        <div class="space16"></div>
                                        <div class="boxs-area">
                                            <ul>
                                                <li><span class="check"><i class="fa-solid fa-check"></i></span> Needs
                                                    Assessment</li>
                                                <li><span class="check"><i class="fa-solid fa-check"></i></span>
                                                    Solution Design</li>
                                                <li><span class="check"><i class="fa-solid fa-check"></i></span> Data
                                                    Migration </li>
                                            </ul>
                                            <ul>
                                                <li><span class="check"><i class="fa-solid fa-check"></i></span> Change
                                                    Management</li>
                                                <li><span class="check"><i class="fa-solid fa-check"></i></span> Testing
                                                    & Quality</li>
                                                <li><span class="check"><i class="fa-solid fa-check"></i></span> Go Live
                                                    & Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

        </div>
    </div>
</div>


@livewire('website.services.contact')

@endsection