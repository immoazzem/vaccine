<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vaccination centers') }}
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
                                <th scope="col" class="border-l border-t px-2 py-1 text-center">Upazila</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Vaccine</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Available</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Enabled</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-center">Actions</th>
                            </tr>

                        </thead class="border-b">
                        <tbody>
                            @foreach($allCenter as $key => $center)
                            <tr>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $key+1 }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $center->name }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $center['upazila']['name']  }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $center['vaccine']['name']  }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $center->available }}</td>
                                <td class="border-l border-t px-1 py-2 text-left">
                                    @if($center->enabled == 0) <del> @endif
                                    {{ $center->enabled }}
                                    @if($center->enabled == 0) </del> @endif
                                </td>
                                <td class="border-l border-t px-1 py-2 whitespace-nowrap">
                                    <a href="{{ route('vaccination-centers.edit', $center->id) }}" class="inline-block">Edit</a>
                                    <form action="{{ route('center-enable-disable', $center->id) }}" method="post" class="inline-block">
                                        @csrf
                                        <button type="submit">{{ ($center->enabled == 0) ? 'Enable' : 'Disable'}}</button>
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