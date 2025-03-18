<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create New City') }}
            </h2>
            <a href="{{ route("cities.index") }}">
                <x-primary-button>{{ __("Back to list") }}</x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 mb-4 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route("cities.store") }}" method="POST">
                    {{ csrf_field() }}
                    <x-input-label>{{ __("Title") }}</x-input-label>
                    <x-text-input id="title" name="title" type="text" class="mt-2 mb-4 w-full" required />
                    <br>
                    <x-primary-button>{{ __("Save") }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
