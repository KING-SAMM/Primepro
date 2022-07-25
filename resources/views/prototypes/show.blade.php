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
                        src="{{ $prototype->image 
                        ? asset('storage/' . $prototype->image)
                        : asset('/images/placeholder.png') }}"
                        class="w-full"
                        alt="">
                </div>
                {{-- Details --}}
                <div class="flex-auto w-full lg:w-[60%] lg:ml-10 text-center lg:text-justify sm:mx-auto">
                            
                    <p style="font-size: 18px;">{{ $prototype['description'] }} </p>
                    <div class="flex lg:flex-row flex-col">
                        <div class="mt-2">
                            <h4>{{ $prototype['company'] }}</h4>
                            <p>{{ $prototype['location'] }}</p>
                            <p style="font-size: 14px;">{{ $prototype['email'] }}</p>
                            <p style="font-size: 14px;">{{ $prototype['website'] }}</p>
                        </div>
                        <div class="mx-auto">
                            <img 
                                src="{{ $prototype->logo ? asset('storage/' . $prototype->logo) : asset('/storage/logos/default-logo.png') }}" 
                                alt="Company logo"
                                width="200"
                                class="mt-2">
                        </div>
                    </div>
                </div>
            </div>

            @else

            <p>Prototype not found.</p>

        @endunless

    </div>

</x-layout>