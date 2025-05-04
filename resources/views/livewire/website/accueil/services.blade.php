<div class="servcie2 bg1" style="padding-top: 40px; padding-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="heading1">
                    <h2>Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($vservices as $vservice)
            <div class="col-lg-4 col-md-6">
                <div class="">
                    <div class="servcie2-box servcie2-box-2">
                        <div class="icon">
                            <img src="{{asset($vservice->img)}}" alt="" style="max-height: 30px; ">
                        </div>
                        <a href="/detailsservice/{{$vservice->slug}}" class="arrow"><i
                                class="fa-solid fa-arrow-right"></i></a>
                        <div class="heading1">
                            <h4><a href="/detailsservice/{{$vservice->slug}}">{{$vservice->titre}}</a></h4>
                            <div class="space16"></div>
                            <p style="text-align: justify; text-justify: inter-word;">{!! Str::limit($vservice->contenu,
                                180, ' ..') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="space40"></div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="theme-btn1" href="{{route('services')}}">Voir plus des services <span><i
                            class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>

    </div>
</div>