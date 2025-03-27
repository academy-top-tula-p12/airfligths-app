<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Airport') }} {{$airport->title}}
            </h2>
            <a href="{{ route("airports.index") }}">
                <x-primary-button>{{ __("Back to list") }}</x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 mb-4 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route("airports.update", ["airport" => $airport->id]) }}"
                      method="POST"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field("PUT") }}
                    <x-input-label>{{ __("Title") }}</x-input-label>
                    <x-text-input id="title"
                                    name="title"
                                    type="text"
                                    class="mt-2 mb-4 w-full"
                                    value="{{ $airport->title }}"
                                    required />
                    <br>

                    <img src="{{ asset("storage/" . $airport->image) }}" width="100"/>
                    <x-input-label>{{ __("Image") }}</x-input-label>
                    <x-text-input id="image" name="image" type="file" class="mt-2 block w-full" />
                    <br>

                    <x-input-label>{{ __("City") }}</x-input-label>
                    <select id="city" name="city">
                        @foreach($cities as $city)
                        <option value="{{ $city->id }}"
                                @selected($city->id == $airport->city->id)>{{ $city->title }}</option>
                        @endforeach
                    </select>
                    <br>

                    <x-input-label>{{ __("Airlines") }}</x-input-label>
                    <select id="airlines" name="airlines[]" multiple>
                        @foreach($airlines as $airline)
                        <option value="{{ $airline->id }}"
                                @selected($airport->airlines->contains($airline))>{{ $airline->title }}</option>
                        @endforeach
                    </select>
                    <br>

                    <x-primary-button>{{ __("Save") }}</x-primary-button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
