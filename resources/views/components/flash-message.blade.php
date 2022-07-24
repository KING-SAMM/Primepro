@if(session()->has('message'))
    <div 
        x-data="{ show: true }" 
        x-init="setTimeout(() => show = false, 3000)" 
        x-show="show" 
        class="fixed top-0 transform left-1/2 -translate-x-1/2 bg- text-white px-48 py-1 bg-[#3E5E6D]"
    >
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif