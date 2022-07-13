@unless( $prototype == null )

<h1>{{ $prototype['title'] }}</h1>

<p>{{ $prototype['description'] }} </p>

@else

<p>Prototype not found.</p>

@endunless
