<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('photo.gallery') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div>
            <p class='font-bold text-2xl'>{{ __('photo.private') }}</p>
            @forelse($private as $image)
            <x-photo-item :photo="$image" />
            @empty
            <p class="mt-4 font-light text-gray-500">{{ __('photo.empty') }}</p>
            @endforelse
          <div class="p-5"><hr></div>
          </div>
          <div >
            <p class="font-bold text-2xl">{{ __('photo.public') }}</p>
            @forelse($public as $image)
            <x-photo-item :photo="$image" />
            @empty
            <p class="mt-4 font-light text-gray-500">{{ __('photo.empty') }}</p>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>