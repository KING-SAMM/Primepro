<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold mb-1">
                Register
            </h2>
            <p class="mb-4">
                create an account to post prototypes
            </p>
        </header>

        <form method="POST" action="/users">
            @csrf

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="name">Name</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="text" 
                    name="name" 
                    id="name" 
                    value="{{ old('name') }}"
                >
                
                @error('name')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="email">Email</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="text" 
                    name="email" 
                    id="email" 
                    value="{{ old('email') }}"
                >
                
                @error('email')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="password">Password</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="password" 
                    name="password" 
                    id="password" 
                    value="{{ old('password') }}"
                >
                
                @error('password')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="inline-block text-lg mb-2" for="password_confirmation">Confirm Password</label>
                <input 
                    class="text-gray-600 border border-indigo-200 rounded p-2 w-full" 
                    type="password" 
                    name="password_confirmation" 
                    id="password_confirmation" 
                    value="{{ old('password_confirmation') }}"
                >
                
                @error('password_confirmation')
                    <p class="text-red-300 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-[#3E4E8D] rounded py-2 px-4 text-white hover:bg-[#1A2A39]">Sign Up</button>
            </div>

            <div class="mb-8">
                <p class="text-xs">
                    Already have an account?
                    <a href="/login" class="text-blue-400">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>