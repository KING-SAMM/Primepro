<x-layout>

@include('partials._hero')
@include('partials._search')
    <div class="u-clearfix u-valign-middle u-sheet m-bottom">
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <h1>Prototypes Listings</h1>
            <div class="u-listings u-listings-1">
            
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