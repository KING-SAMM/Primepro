@props(['prototype'])

<div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
    <x-card class="proto-card rounded-r-lg">
        <img 
            class="proto-card-image" 
            src="{{ $prototype->image 
            ? asset('storage/' . $prototype->image)
            : asset('/images/placeholder.png') }}"
            >

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