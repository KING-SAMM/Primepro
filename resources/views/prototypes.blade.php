<h1>{{ $heading }}</h1>

@unless( count($prototypes) == 0 )

    @foreach($prototypes as $prototype)

        <h2>
            <a href="/prototypes/{{ $prototype['id'] }} ">{{ $prototype['title'] }}</a>
        </h2>

        <p>
            {{ $prototype['description'] }}
        </p>

    @endforeach

@else

    <p>No products found</p>

@endunless