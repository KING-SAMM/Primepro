@extends('layout')

@section('content')

<div class="u-clearfix u-sheet">

@unless( $prototype == null )

<h1>{{ $prototype['title'] }}</h1>
<p>tags: {{ $prototype['tags'] }}</p>

<p style="font-size: 18px;">{{ $prototype['description'] }} </p>

<h4>{{ $prototype['company'] }}</h4>
<p>{{ $prototype['location'] }}</p>
<p style="font-size: 14px;">{{ $prototype['email'] }}</p>
<p style="font-size: 14px;">https://{{ $prototype['website'] }}</p>

@else

<p>Prototype not found.</p>

@endunless

</div>

@endsection