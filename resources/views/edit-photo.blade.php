<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('photo.edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-success />
                    <form class="m-2" method="post" action="{{ route('photos.update', ['photo' => $photo->id]) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name">{{ __('photo.file-name') }}</label>
                            <input type="text" class="rounded-md @error('name') is-invalid @enderror" id="name" value="{{ $photo->name }}" name="name" required maxlength="40">
                            @error('name')
                            <div class="text-red-900 font-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="public">{{ __('photo.public') }}</label>
                            <input id="public" class="appearance-none ml-2 rounded checked:bg-green-900 checked:border-transparent @error('name') is-invalid @enderror" type="checkbox" name="public">
                            @error('public')
                            <div class="text-red-900 font-bold">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="bg-green-900 p-2 rounded-md text-white">{{ __('photo.edit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- TODO: success component -->
</x-app-layout>