<div class="project-boxs-area">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="heading1">
                    <h2>Projets</h2>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach ($projets as $projet)
            <div class="col-lg-4 col-md-6">
                <div class="project-page-box">
                    <div class="image">
                        <img src="{{asset($projet->image)}}" alt="">
                    </div>
                    <div class="heading2">
                        <h4><a href="/detailsprojet/{{$projet->slug}}">{!! Str::limit($projet->title, 40, ' ...') !!}</a></h4>
                        <a href="/detailsprojet/{{$projet->slug}}" class="learn" style="color:#fd8863; ">Voir plus <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>


        <div class="row">
            <div class="col-lg-12 text-center">
                <a class="theme-btn1" href="{{route('projets')}}">Voir plus des projets <span><i
                            class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
        <div class="space30"></div>
    </div>
</div>