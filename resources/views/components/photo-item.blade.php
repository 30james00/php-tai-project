<div class="pt-2 pb-2 mt-1 mb-1 rounded hover:bg-gray-200 flex flex-row justify-between items-center ">
    <div class="flex flex-row items-center">
        <p class="font-bold text-lg">{{$photo->name}}</p>
        @if($photo->public)
        <p class="ml-2 font-light text-xs text-gray-700">{{__('photo.public')}}</p>
        @endif
    </div>
    <div class="flex flex-row">
        <a class="p-2 ml-3 mr-3 bg-blue-600 rounded-lg text-white font-bold" href="{{ route('photos.show', ['photo' => $photo->id]) }}"> {{ __('photo.view') }}</a>
        <a class="p-2 ml-3 mr-3 bg-blue-600 rounded-lg text-white font-bold" href="{{ route('photos.edit', ['photo' => $photo->id]) }}">{{ __('photo.edit') }}</a>
        <form class='flex' action="{{ route('photos.destroy', $photo->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <input type="submit" class="p-2 ml-3 mr-3 bg-red-600 rounded-lg text-white font-bold" value="{{ __('photo.delete') }}">
        </form>
    </div>
</div>