<x-layout class="py-1 ">

    @include('partials._search')
    
    <div class="u-valign-middle u-sheet m-bottom">
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-gallery-1">
            <h1>{{ $heading }}</h1>
          <div class="grid h-[450px] gap-4 gap-y-4 grid-cols-3">
                
                @unless( count($prototypes) == 0 )

                @foreach($prototypes as $prototype)
                    <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
                        <div class="u-back-slide">
                            <img 
                            class="u-back-image u-expanded h-64" 
                            src="{{ $prototype->image
                            ? asset('storage/' . $prototype->image) 
                            : asset('images/placeholder.png')}}"
                            alt="Porototype Image">
                        </div>
                        <div class="pt-[30px] u-over-slide u-shading u-over-slide-{{ $prototype->id }} ">
                            <h3 class="u-gallery-heading ">
                                {{ $prototype->title }}
                            </h3>
                            <p class="u-gallery-text">
                                {{ $prototype->tags }}
                            </p>
                        </div>
                    </div>

                @endforeach

                @else

                    <p>No products found</p>

                @endunless
            
            </div>
        </div>
    </div>

</x-layout>