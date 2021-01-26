<div class="container-fluid">
  <div class="row justify-content-center">
    {{-- enctype attribute is important if your form contains file upload --}}
    {{-- Please check https://www.w3schools.com/tags/att_form_enctype.asp for further info --}}
    <x-success/>
    <form class="m-2" method="post" action="/photos" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label for="name">{{ __('photo.file-name') }}</label>
        <input type="text" class="rounded-md @error('name') is-invalid @enderror" id="name" placeholder="{{ __('photo.file-name') }}" name="name" required maxlength="40">
        @error('name')
        <div class="text-red-900 font-bold">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image">{{ __('photo.file') }}</label>
        <input id="image" class="rounded @error('name') is-invalid @enderror" type="file" name="image" required>
        @error('image')
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
      <button type="submit" class="bg-green-900 p-2 rounded-md text-white">{{ __('photo.upload') }}</button>
    </form>
  </div>
</div>