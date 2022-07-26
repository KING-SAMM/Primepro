@props(['tagsCsv'])

@php
    $tags = explode(' ', $tagsCsv);
@endphp

<ul class="flex justify-center">

    @foreach($tags as $tag)

    <x-card class="mx-1">
    <li {{ $attributes->merge(['class' => 'flex items-center justify-center proto-card text-white rounded-md py-1 px-3 mr-1 text-xs']) }}>
        <a href="/?tag={{$tag}}">
            {{$tag}}
        </a>
    </li>
    </x-card>
    
    @endforeach

</ul>