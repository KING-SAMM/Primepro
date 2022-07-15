@extends('layout')

@section('content')

<section class="u-align-center u-clearfix u-palette-1-dark-2 u-section-1" id="carousel_4e31">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <div class="u-listings u-listings-1">
            
                @unless( count($prototypes) == 0 )

                    @foreach($prototypes as $prototype)

                        {{-- <h2>
                            <a href="/prototypes/{{ $prototype['id'] }} ">{{ $prototype['title'] }}</a>
                        </h2>

                        <p>
                            {{ $prototype['description'] }}
                        </p> --}}
                        <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
                            <div class="u-back-slide">
                                <img class="u-back-image u-expanded" src="images/logo-mockup-black-facade-sign_145275-281.jpg">
                            </div>
                            <div class="u-over-slide u-shading u-over-slide-1">
                                <h3 class="u-gallery-heading"></h3>
                                <p class="u-gallery-text"></p>
                            </div>
                        </div>
                        <div class="u-gallery-item">
                            <div class="u-over-slide u-shading u-over-slide-2">
                                <a href="/prototypes/{{ $prototype->id }} ">
                                    <h3 class="u-gallery-heading">{{ $prototype->title }}</h3>
                                </a>
                                <p class="u-gallery-text">Text description for image 1</p>
                            </div>
                        </div>

                    @endforeach

                @else

                    <p>No products found</p>

                @endunless

            </div>
        </div>  
    </div>
</section>

@endsection