<x-layout>
    <x-card class="flex flex-col w-3/5 mx-auto my-8 rounded-xl">
        <header class="mb-4">
            <h2>Add a product prototype</h2>
        </header>

        <form method="POST" action="/prototypes" class="p-6">
            @csrf
            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="company">Company</label>
                <input class="border border-indigo-200 rounded p-2 w-full" type="text" name="company" id="company">
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="job-title">Job Title</label>
                <input class="border border-indigo-200 rounded p-2 w-full" type="text" name="job-title" id="job-title">
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="job-location">Job Location</label>
                <input class="border border-indigo-200 rounded p-2 w-full" type="text" name="job-location" id="job-location">
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="website">Website</label>
                <input class="border border-indigo-200 rounded p-2 w-full" type="url" name="website" id="website">
            </div>
            
            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="tags">Tags (comma separated)</label>
                <input class="border border-indigo-200 rounded p-2 w-full" type="text" name="tags" id="tags">
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="company">Company</label>
                <input class="border border-indigo-200 rounded p-2 w-full" type="text" name="company" id="company">
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="logo">Company Logo</label>
                <input class="border border-indigo-200 rounded p-2 w-full" type="file" name="logo" id="logo">
            </div>
            
            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="description">Prototype Desccription</label>
                <textarea 
                    name="description" 
                    id="description" 
                    cols="30" 
                    rows="10" 
                    class="border border-indigo-200 rounded p-2 w-full">
                </textarea>
            </div>

            <div class="mb-6">
                <button class="bg-[#3E4E8D] rounded py-2 px-4 text-white hover:bg-[#1A2A39]">Create Prototype</button>
            </div>
        </form>
    </x-card>
</x-layout>