<x-layout>
    <x-card class="flex flex-col w-3/5 mx-auto my-8 rounded-xl">
        <header class="mb-4">
            <h2>Add a product prototype</h2>
        </header>

        <form method="POST" action="/prototypes" class="p-6">
            @csrf

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="title">Product Title</label>
                <input class="text-gray-600 border border-indigo-200 rounded p-2 w-full" type="text" name="title" id="title" value="{{ old('title') }}">
                
                @error('title')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="image">Product Image</label>
                <input class="text-gray-600 border border-indigo-200 rounded p-2 w-full" type="file" name="image" id="image" value="{{ old('image') }}">
                
                @error('image')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div> --}}

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="company">Company Name</label>
                <input class="text-gray-600 border border-indigo-200 rounded p-2 w-full" type="text" name="company" id="company" value="{{ old('company') }}">
                
                @error('company')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="location">Company Location</label>
                <input class="text-gray-600 border border-indigo-200 rounded p-2 w-full" type="text" name="location" id="location" value="{{ old('location') }}">
                
                @error('location')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="email">Company Email</label>
                <input class="text-gray-600 border border-indigo-200 rounded p-2 w-full" type="text" name="email" id="email" value="{{ old('email') }}">
                
                @error('email')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="website">Product Website</label>
                <input class="text-gray-600 border border-indigo-200 rounded p-2 w-full" type="text" name="website" id="website" value="{{ old('website') }}">
                
                @error('website')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="tags">Tags (comma separated)</label>
                <input class="text-gray-600 border border-indigo-200 rounded p-2 w-full" type="text" name="tags" id="tags" value="{{ old('tags') }}">
                
                @error('tags')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="logo">Company Logo</label>
                <input class="text-gray-600 border border-indigo-200 rounded p-2 w-full" type="text" name="logo" id="logo" value="{{ old('logo') }}">
                
                @error('logo')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div> --}}
            
            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="description">Prototype Desccription</label>
                <textarea 
                    name="description" 
                    id="description" 
                    cols="30" 
                    rows="10" 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full"
                    value="{{ old('description') }}">
                </textarea>
                
                @error('description')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-[#3E4E8D] rounded py-2 px-4 text-white hover:bg-[#1A2A39]">Create Prototype</button>
            </div>
        </form>
    </x-card>
</x-layout>