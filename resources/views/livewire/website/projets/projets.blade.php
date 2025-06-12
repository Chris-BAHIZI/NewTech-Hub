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
