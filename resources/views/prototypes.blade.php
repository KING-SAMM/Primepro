@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
    <div class="u-clearfix u-valign-middle u-sheet m-bottom">
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
            <h1>Prototypes Listings</h1>
            <div class="u-listings u-listings-1">
            
                @unless( count($prototypes) == 0 )

                    @foreach($prototypes as $prototype)

                        <div class="u-effect-fade u-effect-hover-zoom u-gallery-item">
                            <div class="proto-card">
                                <img class="proto-card-image" src="{{asset('images/logo-mockup-black-facade-sign_145275-281.jpg')}} ">

                                <div class="proto-card-text" style="margin-left: 0px;">
                                    <a href="/prototypes/{{ $prototype->id }}">
                                        <h4 class="u-gallery-heading">{{ $prototype->title }}</h4>
                                        <p class="u-gallery-text">{{ $prototype->company }}</p>
                                        <p class="u-gallery-text">{{ $prototype->tags }}</p>
                                        <p class="u-gallery-text">{{ $prototype->location }}</p>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>

                    @endforeach

                @else

                    <p>No products found</p>

                @endunless

            </div>
        </div>  
    </div>

@endsection