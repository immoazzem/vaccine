<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Divisions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full border-r border-b">
                        <thead>
                            <tr>
                                <th class="border-l border-t px-1 py-2 text-left">Sl</th>
                                <th class="border-l border-t px-1 py-2 text-center">Name</th>
                                <th class="border-l border-t px-1 py-2 text-center">Url</th>
                                <th class="border-l border-t px-1 py-2 text-center">Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($divisions as
                            $key => $division)
                            <tr>
                                <td class="border-l border-t px-1 py-2 text-left">{{ $key+1 }}</td>
                                <td class="border-l border-t px-1 py-2 text-center">{{ $division->name }}</td>
                                <td class="border-l border-t px-1 py-2 text-center">{{ $division->url }}</td>
                                <td class="border-l border-t px-1 py-2">
                                    <a href="{{ route('categories.edit', $division->id) }}" class="inline-block bg-white hover:bg-gray-100 text-gray-800 font-semibold py-1 px-4 border border-gray-400 rounded shadow">Edit</a>
                                    <form action="{{ route('divisions-enable-disable', $division->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-1 px-4 border border-gray-400 rounded shadow">Archive</button>
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