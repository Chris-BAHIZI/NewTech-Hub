<div>
    <div class="service-details-area-all">
        <div class="container">
            <div class="row">
    
                <div class="col-lg-8 m-auto">
                    <div class="service-details-post">
                        <article>
                            <div class="details-post-area">
                                <div class="image">
                                    <img src="{{asset($service->picturefront)}}" alt="">
                                </div>
                                <div class="space30"></div>
                                <div class="heading1">
                                    <h2>{{$service->titre}}</h2>
                                    <div class="space16"></div>
                                    <p>{{$service->contenu}}</p>
                                </div>
                            </div>
                        </article>
                        
    
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    @livewire('website.services.voir-plus', ['slug' => $slug])
</div>