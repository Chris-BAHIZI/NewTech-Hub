@extends('website.layouts.defaultother', ['title'=>'Details projet'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'Details projet'])

<div class="service-details-area-all" style="padding-top: 35px; padding-bottom: 35px;">
    <div class="container">
        @livewire('website.projets.details-projet', ['projet' => $projet])
    </div>
</div>


@livewire('website.services.contact')

@endsection