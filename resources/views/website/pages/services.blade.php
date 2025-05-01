@extends('website.layouts.defaultother', ['title'=>'services'])
@section('content')
@include('website.layouts._sliderother', ['title'=>'services'])

    @livewire('website.services.services')
    <br>
    @livewire('website.services.contact')

@endsection