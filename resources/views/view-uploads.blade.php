<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('photo.upload') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th class="cs-p-1">Name</th>
                  <th class="cs-p-1">URL</th>
                </tr>
              </thead>

              @forelse($images as $image)
              <tr>
                <td class="cs-p-1">{{ $image->name }}</td>
                <td class="cs-p-1">{{ $image->url }}</td>
                <td class="cs-p-1"><a href="{{ route('photos.show', ['photo' => $image->id]) }}"> {{ __('photo.view') }}</a></td>
                <td class="cs-p-1"><a href="{{ route('photos.destroy', ['photo' => $image->id]) }}">{{  __('photo.delete') }}</a></td>
                <td class="cs-p-1"><a href="{{ route('photos.edit', ['photo' => $image->id]) }}">{{  __('photo.edit') }}</a></td>
              </tr>
              @empty
              <p>No Images at the moment</p>
              @endforelse
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- TODO: success component -->
</x-app-layout>