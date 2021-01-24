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
                    <form action="{{ route('photos.update', ['photo' => $photo->id]) }}" method="put">
                        @csrf
                        <label for="name">{{ __('photo.file-name') }}</label>
                        <input type="text" class="form-control" id="name" value="{{ $photo->name }}" name="name">
                        <button type="submit" class="btn btn-dark d-block w-75 mx-auto">{{ __('photo.edit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- TODO: success component -->
</x-app-layout>