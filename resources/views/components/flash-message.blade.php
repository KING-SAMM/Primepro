@if(session()->has('message'))
    <div class="fixed top-0 transform left-1/2 -translate-x-1/2 bg- text-white px-48 py-3 bg-[#3E5E6D]"">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif