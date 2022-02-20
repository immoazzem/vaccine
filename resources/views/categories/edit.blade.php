<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="w-full font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Category Edit') }}
            </h2>
        </div>
        <div class="min-w-max">
            <a href="{{ route('categories.index') }}" class="p-2 bg-gray-800 text-white">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <form action="{{ route('categories.update', $category->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6 mb">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $category->name }}">
                                        @error('name')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-8">
                                        <label for="min_age" class="block text-sm font-medium text-gray-700">Minimum Age</label>
                                        <input type="number" name="min_age" id="min_age" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $category->min_age }}">
                                        @error('min_age')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mt-8 mb-5">
                                        <button type="submit" class="mx-2 my-2 bg-white transition duration-150 ease-in-out hover:bg-gray-100 hover:text-indigo-600 rounded border border-indigo-700 text-indigo-700 px-6 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-indigo-700">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>