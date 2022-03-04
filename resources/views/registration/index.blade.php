<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registration') }}
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
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">DOB</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">ID No</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Phone No</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Ceneter</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">UC Date</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">V1 Date</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">V2 Date</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">V3 Date</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Unique ID</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-left">Diabates</th>
                                <th scope="col" class="border-l border-t px-2 py-1 text-center">Actions</th>
                            </tr>

                        </thead class="border-b">
                        <tbody>
                            @foreach($reg as $key => $info)
                            <tr>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $key+1 }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->name }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->dob  }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->id_no  }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->phone_no  }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->center_id }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->upcoming_date }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->v1_date }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->v2_date }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->v3_date }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->unique_id }}</td>
                                <td class="border-l border-t px-1 py-2 text-center whitespace-nowrap">{{ $info->diabates }}</td>
                                <!-- <td class="border-l border-t px-1 py-2 text-left">
                                    @if($info->enabled == 0) <del> @endif
                                    {{ $info->enabled }}
                                    @if($info->enabled == 0) </del> @endif
                                </td> -->
                                <td class="border-l border-t px-1 py-2 whitespace-nowrap">
                                    <a href="{{ route('registration.edit', $info->id) }}" class="inline-block">Edit</a>
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