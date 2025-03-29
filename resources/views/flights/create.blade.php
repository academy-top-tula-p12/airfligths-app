<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create New Flight') }}
            </h2>
            <a href="{{ route("flights.index") }}">
                <x-primary-button>{{ __("Back to list") }}</x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 mb-4 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route("flights.store") }}"
                      method="POST"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <x-input-label>{{ __("Title") }}</x-input-label>
                    <x-text-input id="title" name="title" type="text" class="mt-2 mb-4 w-full" required />
                    <br>

                    <x-input-label>{{ __("Date") }}</x-input-label>
                    <x-text-input id="date" name="date" type="date" class="mt-2 mb-4 w-full" required />
                    <br>

                    <x-input-label>{{ __("Time") }}</x-input-label>
                    <x-text-input id="time" name="time" type="time" class="mt-2 mb-4 w-full" required />
                    <br>

                    <x-input-label>{{ __("Airline") }}</x-input-label>
                    <select id="airline" name="airline">
                        @foreach($airlines as $airline)
                        <option value="{{ $airline->id }}">{{ $airline->title }}</option>
                        @endforeach
                    </select>
                    <br>

                    <x-input-label>{{ __("Airport departure") }}</x-input-label>
                    <select id="departure" name="departure">
                        @foreach($airports as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->title }}</option>
                        @endforeach
                    </select>
                    <br>

                    <x-input-label>{{ __("Airport arrival") }}</x-input-label>
                    <select id="arrival" name="arrival">
                        @foreach($airports as $airport)
                        <option value="{{ $airport->id }}">{{ $airport->title }}</option>
                        @endforeach
                    </select>
                    <br>

                    <x-input-label>{{ __("Passangers Count") }}</x-input-label>
                    <x-text-input id="passangers_count"
                                    name="passangers_count"
                                    type="number" class="mt-2 mb-4 w-full" required />
                    <br>

                    <x-input-label>{{ __("Price") }}</x-input-label>
                    <x-text-input id="price"
                                    name="price"
                                    type="number"
                                    step="0.01"
                                    class="mt-2 mb-4 w-full" required />
                    <br>

                    <x-input-label>{{ __("Duration") }}</x-input-label>
                    <x-text-input id="duration" name="duration" type="number" class="mt-2 mb-4 w-full" required />
                    <br>

                    <x-input-label>{{ __("Activity") }}</x-input-label>
                    <input type="checkbox" name="activity" id="activity" checked />
                    <br>

                    <x-primary-button>{{ __("Save") }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
