<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- <table class="w-full border-r border-b">
                        <thead>
                            <tr>
                                <th class="border-l border-t px-1 py-2 text-left">Sl</th>
                                <th class="border-l border-t px-1 py-2 text-center"> Vaccine Name</th>
                                <th class="border-l border-t px-1 py-2 text-center">Minimum Age</th>
                                <th class="border-l border-t px-1 py-2 text-center">Actions</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach($categories as $key => $category)
                            <tr>
                                <td class="border-l border-t px-1 py-2 text-center">{{ $key+1 }}</td>
                                <td class="border-l border-t px-1 py-2 text-left">{{ $category->name }}</td>
                                <td class="border-l border-t px-1 py-2 text-center">{{ $category->min_age }}</td>
                                <td class="border-l border-t px-1 py-2 text-center"><a href="{{ route('categories.edit', $category->id) }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-1 px-4 border border-gray-400 rounded shadow">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> -->
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Sl</th>
                                <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Vaccine Name</th>
                                <th scope="col" class="px-6 py-3 text-left font-medium text-gray-500 uppercase tracking-wider">Minimum Age</th>
                                <th scope="col" class="relative px-6 py-3">
                                    <a href="href=" {{ route('categories.edit', $category->id) }}""><span class="sr-only">Edit</span></a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($categories as $key => $category)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">{{ $key+1 }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">{{ $category->name }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-900">{{ $category->min_age }}</div>

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>