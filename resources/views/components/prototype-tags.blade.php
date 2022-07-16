@props(['tagsCsv'])

@php
    $tags = explode(' ', $tagsCsv);
@endphp

<ul class="flex justify-center">

    @foreach($tags as $tag)

    <li {{ $attributes->merge(['class' => 'flex items-center justify-center proto-card text-white rounded-xl py-1 px-3 mr-2 text-xs']) }}>
        <a href="/?tag={{$tag}}">
            {{$tag}}
        </a>
    </li>

    @endforeach

</ul>