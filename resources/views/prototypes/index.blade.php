<x-layout>

@include('partials._hero')
@include('partials._search')
    <div class="u-valign-middle u-sheet m-bottom">
        <div class="w-full mx-0 u-gallery u-lightbox u-show-text-on-hover content-start">
            <h2>Prototypes Listings</h2>
            <div class="grid h-full gap-4 grid-cols-2">
            
                @unless( count($prototypes) == 0 )

                    @foreach($prototypes as $prototype)

                        <x-prototype-card :prototype="$prototype" />

                    @endforeach

                @else

                    <p>No products found</p>

                @endunless

            </div>
        </div>  
    </div>

    {{-- Pagination links  --}}
    <div class="mt-6 p-4">
        {{ $prototypes->links() }}
    </div>

</x-layout>