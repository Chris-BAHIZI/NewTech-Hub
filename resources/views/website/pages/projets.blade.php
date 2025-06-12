@extends('website.layouts.defaultother', ['title'=>'Projets'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'Projets'])

<div class="project-boxs-area" style="padding-top: 30px;">
    <div class="container">

        @livewire('website.projets.projets')

    </div>
</div>

<!--=====PROJECT BOXS END=======-->

@livewire('website.services.contact')

@endsection