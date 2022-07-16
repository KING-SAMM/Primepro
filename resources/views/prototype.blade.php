@extends('layout')

@section('content')
@include('partials._search')

<div class="u-clearfix u-sheet">

@unless( $prototype == null )
<h1>{{ $prototype['title'] }}</h1>
<div class="flex w-full flex-col md:flex-col lg:flex-row ">
    <div class="flex-auto w-full lg:w-[40%] sm:mx-auto">
        <img 
            src="{{asset('/images/logo-mockup-black-facade-sign_145275-281.jpg')}}"
            class="sm:mx-auto"
            alt="">
    </div>
    <div class="flex-auto w-full lg:w-[60%] lg:ml-10 sm:mx-auto">
        
        <p>tags: {{ $prototype['tags'] }}</p>
        
        <p style="font-size: 18px;">{{ $prototype['description'] }} </p>
        
        <h4>{{ $prototype['company'] }}</h4>
        <p>{{ $prototype['location'] }}</p>
        <p style="font-size: 14px;">{{ $prototype['email'] }}</p>
        <p style="font-size: 14px;">https://{{ $prototype['website'] }}</p>
    </div>
</div>

@else

<p>Prototype not found.</p>

@endunless

</div>

@endsection