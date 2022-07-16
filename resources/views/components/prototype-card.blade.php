@props(['prototype'])

<div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
    <x-card class="rounded-r-lg">
        <img class="proto-card-image" src="{{asset('images/logo-mockup-black-facade-sign_145275-281.jpg')}} ">

        <div class="proto-card-text">
            <a href="/prototypes/{{ $prototype->id }}">
                <h4 class="u-gallery-heading mt-2">{{ $prototype->title }}</h4>
                <p class="u-gallery-text">{{ $prototype->company }}</p>
            </a>
            <x-prototype-tags :tagsCsv="$prototype->tags" class="bg-[#142443]" />
            <p class="u-gallery-text">{{ $prototype->location }}</p>
            
        </div>
    </x-card>
</div>