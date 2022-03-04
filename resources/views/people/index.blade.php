<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full border">
                        <thead class="border-b bg-gray-800 text-white">
                            <tr>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Sl</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">ID No</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-center">DOB</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Office</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Registered</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-center">Actions</th>
                            </tr>

                        </thead class="border-b">
                        <tbody>
                            @foreach($peoples as $key => $people)
                            <tr>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $key+1 }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $people->id_no }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $people->dob }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $people->office }}</td>
                                <td class="border-l border-t px-1 py-2 text-center">
                                    @if($people->registered == 0) <del> @endif
                                    {{ $people->registered }}
                                    @if($people->registered == 0) </del> @endif
                                </td>
                                <td class="border-l border-t px-1 py-2 whitespace-nowrap">
                                    <a href="{{ route('people.edit', $people->id) }}" class="inline-block">Edit</a>
                                    <form action="{{ route('people-registered-unregistered', $people->id) }}" method="post" class="inline-block">
                                        @csrf
                                        <button type="submit">{{ ($people->registered == 0) ? 'Enable' : 'Disable'}}</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>