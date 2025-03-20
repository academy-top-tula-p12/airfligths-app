<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $city->title }} {{ __('Info') }}
            </h2>
            <a href="{{ route("cities.index") }}">
                <x-primary-button>{{ __("Back to list") }}</x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 px-6 mb-4 h-20 overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <h3>Airlines:</h3>
                @foreach ($airlines as $airline)
                <div class="text-gray-900 dark:text-gray-100">
                    <a href="{{ route("airlines.show", ["airline" => $airline->id]) }}">
                        {{ $airline->title }}
                    </a>
                </div>
                @endforeach
            </div>

            <div class="bg-white dark:bg-gray-800 px-6 mb-4 h-20 overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <h3>Airports:</h3>
                @foreach ($airports as $airport)
                <div class="text-gray-900 dark:text-gray-100">
                    <a href="{{ route("airports.show", ["airline" => $airport->id]) }}">
                        {{ $airport->title }}
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>
