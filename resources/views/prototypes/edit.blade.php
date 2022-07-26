<x-layout>
    <x-card class="flex flex-col w-3/5 mx-auto my-8 rounded-xl">
        <header class="mb-4">
            <h2>Edit {{ $prototype->title }}</h2>
        </header>

        {{-- Begin Form --}}
        <form method="POST" action="/prototypes/{{ $prototype->id }}" enctype="multipart/form-data" class="p-6">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="title">Prototype Title</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="text" 
                    name="title" 
                    id="title" 
                    value="{{ $prototype->title }}">
                
                @error('title')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="image">Prototype Image</label>
                <input 
                    class="text-white border border-indigo-200 rounded p-2 w-full" 
                    type="file" 
                    name="image" 
                    id="image" 
                    value="{{ $prototype->image }}">

                <img 
                    src="{{ $prototype->image 
                    ? asset('storage/' . $prototype->image)
                    : asset('/images/placeholder.png') }}"
                    width="200"
                    class="mt-4 mx-auto"
                    alt="Porototype Image">
                
                @error('image')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="company">Company Name</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="text" 
                    name="company" 
                    id="company" 
                    value="{{ $prototype->company }}"
                >
                
                @error('company')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="location">Company Location</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="text" 
                    name="location" 
                    id="location" 
                    placeholder="E.g: Onitsha, Anambra, Nigeria"
                    value="{{ $prototype->location }}"
                >
                
                @error('location')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="email">Company Email</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="text" 
                    name="email" 
                    id="email" 
                    value="{{ $prototype->email }}"
                >
                
                @error('email')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="logo">Company Logo</label>
                <input 
                    class="text-white border border-indigo-200 rounded p-2 w-full" 
                    type="file" 
                    name="logo" 
                    id="logo" 
                    value="{{ $prototype->logo }}">

                <img 
                    src="{{ $prototype->logo ? asset('storage/' . $prototype->logo) : asset('/storage/logos/default-logo.png') }}" 
                    alt="Company logo"
                    width="200"
                    class="mt-4 mx-auto">
            
                @error('logo')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="website">Company/Prototype Website</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="text" 
                    name="website" 
                    id="website" 
                    placeholder="E.g: https://awesomedomain.com"
                    value="{{ $prototype->website }}"
                >
                
                @error('website')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="tags">Tags (comma separated)</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="text" 
                    name="tags" 
                    id="tags" 
                    placeholder="E.g: AI, anti-gravity"
                    value="{{ $prototype->tags }}"
                >
                
                @error('tags')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="description">Prototype Description</label>
                <textarea 
                    name="description" 
                    id="description" 
                    rows="10" 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full"
                    placeholder="Write a detailed description of the product"
                >
                    {{ $prototype->description }}
                </textarea>
                
                @error('description')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-[#3E4E8D] rounded py-2 px-4 text-white hover:bg-[#1A2A39]">Update Prototype</button>
            </div>
        </form>
    </x-card>
</x-layout>