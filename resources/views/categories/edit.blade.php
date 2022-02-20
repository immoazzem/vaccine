<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="w-full font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Category Edit') }}
            </h2>
        </div>
        <div class="min-w-max">
            <a href="" class="p-2 bg-gray-800 text-white">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{$categories}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>