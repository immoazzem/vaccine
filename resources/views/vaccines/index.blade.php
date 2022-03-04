<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaccines') }}
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
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Name</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-center">Origin name</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Alternate Name</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Type</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-center">Actions</th>
                            </tr>

                        </thead class="border-b">
                        <tbody>
                            @foreach($vaccines as $key => $vaccine)
                            <tr>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $key+1 }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $vaccine->name }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $vaccine->org_name }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $vaccine->alt_name }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $vaccine->type }}</td>

                                <td class="border-l border-t px-1 py-2 whitespace-nowrap">
                                    <a href="{{ route('vaccines.edit', $vaccine->id) }}" class="inline-block">Edit</a>
                                    <!-- <form action="{{ route('people-registered-unregistered', $vaccine->id) }}" method="post" class="inline-block">
                                        @csrf
                                        <button type="submit">{{ ($vaccine->registered == 0) ? 'Enable' : 'Disable'}}</button>
                                    </form> -->
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