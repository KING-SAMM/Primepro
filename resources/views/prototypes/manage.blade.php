<x-layout>
    <x-card>
        <header>
            <h1 class="text-3xl text-center font-bold my-6">
                Manage Prototypes
            </h1>
        </header>

        <table class="w-full table-auto rounded">
            <tbody>
                @unless($prototypes->isEmpty())
                
                @foreach($prototypes as $prototype)

                <tr class="border-blue-300">
                    <td class="px-4 py-4 border-t border-b border-blue-300 text-md">
                        <a href="/prototypes/{{ $prototype->id }}"> {{ $prototype->title }} </a>
                    </td>
                    <td class="px-4 py-4 border-t border-b border-blue-300 text-md">
                        <a 
                            href="/prototypes/{{ $prototype->id }}/edit"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                        >
                            <i class="fa-solid fa-pen-to-square"></i>
                            Edit
                        </a>
                    </td>
                    <td class="px-4 py-4 border-t border-b border-blue-300 text-md">
                        <form method="POST" action="/prototypes/{{ $prototype->id }}">
                            @csrf
                            @method('DELETE')
            
                            <button class="text-red-400">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>

                @endforeach

                @else

                <tr class="text-blue-300">
                    <td class="px-4 py-4 border-t border-b border-blue-300 text-md">
                        <p class="text-center">
                            No portotypes found
                        </p>
                    </td>
                </tr>

                @endunless
            </tbody>
        </table>
    </x-card>
</x-layout>