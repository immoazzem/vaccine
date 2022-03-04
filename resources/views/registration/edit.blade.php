<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="w-full font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Registration Edit') }}
            </h2>
        </div>
        <div class="min-w-max">
            <a href="{{ route('registration.index') }}" class="p-2 bg-gray-800 text-white">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <form action="{{ route('registration.update', $registration->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6 mb">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->name }}">
                                        @error('name')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                        <input type="date" name="dob" id="dob" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ date('Y-m-d', strtotime($registration->dob)) }}">
                                        @error('dob')
                                        <span class="block text-red-600">{{$dob}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="id_no" class="block text-sm font-medium text-gray-700">Phone No</label>
                                        <input type="text" name="id_no" id="id_no" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->id_no }}">
                                        @error('id_no')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="center_id" class="block text-sm font-medium text-gray-700">Center</label>
                                        <input type="text" name="center_id" id="center_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->center_id }}">
                                        @error('center_id')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="upcoming_date" class="block text-sm font-medium text-gray-700">Upcoming Date</label>
                                        <input type="date" name="upcoming_date" id="upcoming_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->upcoming_date }}">
                                        @error('upcoming_date')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="v1_date" class="block text-sm font-medium text-gray-700">Vaccine-1 Date</label>
                                        <input type="date" name="v1_date" id="v1_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->v1_date }}">
                                        @error('v1_date')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="v2_date" class="block text-sm font-medium text-gray-700">Vaccine-2 Date</label>
                                        <input type="date" name="v2_date" id="v2_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->v2_date }}">
                                        @error('v2_date')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="v3_date" class="block text-sm font-medium text-gray-700">Vaccine-3 Date</label>
                                        <input type="date" name="v3_date" id="v3_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->v3_date }}">
                                        @error('v3_date')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="unique_id" class="block text-sm font-medium text-gray-700">Unique ID</label>
                                        <input type="text" name="unique_id" id="unique_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->unique_id }}">
                                        @error('unique_id')
                                        <span class="block text-red-600">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 mt-5">
                                        <label for="diabates" class="block text-sm font-medium text-gray-700">Diabates</label>
                                        <select name="diabates" id="diabates" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ $registration->diabates }}">
                                            <option value="">Select One</option>
                                            <option value="0" {{ ($registration->diabates) == 0 ? 'selected' : '' }}>No</option>
                                            <option value="1" {{ ($registration->diabates) == 1 ? 'selected' : '' }}>Yes</option>
                                        </select>
                                        @error('diabates')
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