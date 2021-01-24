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
                    <form action="/photo-upload/edit/{$id}" method="post">
                        <label for="name">File Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter file Name" name="name">
                        <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- TODO: success component -->
</x-app-layout>