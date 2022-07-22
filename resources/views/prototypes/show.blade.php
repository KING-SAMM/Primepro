<x-layout>

    @include('partials._search')

    <div class="u-clearfix u-sheet pb-[50px]">

        @unless( $prototype == null )

            <h1>{{ $prototype['title'] }}</h1>

            <x-prototype-tags :tagsCsv="$prototype->tags" />

            <div class="flex w-full flex-col md:flex-col lg:flex-row mt-10 lg:mt-15 px-2 ">
                {{-- Image  --}}
                <div class="flex-auto w-full lg:w-[40%] flex justify-center items-center">
                    <img 
                        src="{{asset('/images/logo-mockup-black-facade-sign_145275-281.jpg')}}"
                        class="w-full"
                        alt="">
                </div>
                {{-- Details --}}
                <div class="flex-auto w-full lg:w-[60%] lg:ml-10 text-center lg:text-justify sm:mx-auto">
                            
                    <p style="font-size: 18px;">{{ $prototype['description'] }} </p>
                    
                    <h4>{{ $prototype['company'] }}</h4>
                    <p>{{ $prototype['location'] }}</p>
                    <p style="font-size: 14px;">{{ $prototype['email'] }}</p>
                    <p style="font-size: 14px;">https://{{ $prototype['website'] }}</p>
                </div>
            </div>

            @else

            <p>Prototype not found.</p>

        @endunless

    </div>

</x-layout>