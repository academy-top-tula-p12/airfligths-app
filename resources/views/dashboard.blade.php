<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 px-6 mb-4 h-20 overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    City
                </div>
                <a href="{{ route("cities.index") }}">
                    <x-primary-button>{{ __("View") }}</x-primary-button>
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 px-6 mb-4 h-20 overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    Airline
                </div>
                <a href="{{ route("airlines.index") }}">
                    <x-primary-button>{{ __("View") }}</x-primary-button>
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 px-6 mb-4 h-20 overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    Airports
                </div>
                <a href="{{ route("airports.index") }}">
                    <x-primary-button>{{ __("View") }}</x-primary-button>
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 px-6 mb-4 h-20 overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100 text-3xl">
                    <p class="text-3xl">Flights</p>
                </div>
                <a href="{{ route("flights.index") }}">
                    <x-primary-button>{{ __("View") }}</x-primary-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
