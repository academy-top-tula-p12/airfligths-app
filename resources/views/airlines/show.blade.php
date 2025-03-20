<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{$airline->title}} {{ __('Info') }}
            </h2>
            <a href="{{ route("airlines.index") }}">
                <x-primary-button>{{ __("Back to List") }}</x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 px-6 mb-4 overflow-hidden shadow-sm sm:rounded-lg flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    <div class="mb-5">
                        <h1 class="text-xl">{{ $airline->title }}</h1>
                        <h3>{{ $city->title}}</h3>
                    </div>
                    <div>
                        <h2 class="text-2xl">Airports:</h2>
                        @if(isset($airports))
                            @foreach($airports as $airport)
                                <h3>{{ $airport }}</h3>
                            @endforeach
                        @endif
                    </div>

                </div>
                <div class="text-gray-900 dark:text-gray-100">
                    <img src="{{ asset("storage/" . $airline->logotype) }}" width="100"/>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
