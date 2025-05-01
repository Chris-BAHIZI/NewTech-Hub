<div class="servcie2 service-page-sec">
    <div class="container">
        <div class="row">

            @forelse ( $services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="">
                        <div class="servcie2-box">
                            <div class="icon">
                                <img src="{{asset($service->img)}}" alt="" style="max-height: 30px; ">
                            </div>
                            <a href="/detailsservice/{{$service->slug}}" class="arrow"><i class="fa-solid fa-arrow-right"></i></a>
                            <div class="heading1">
                                <h4><a href="#">{!! Str::limit($service->titre, 30, ' ..') !!}</a></h4>
                                <div class="space16"></div>
                                <p style="text-align: justify; text-justify: inter-word;">{!! Str::limit($service->contenu, 170, ' ..') !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div>