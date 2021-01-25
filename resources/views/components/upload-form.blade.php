<div class="container-fluid">
  <div class="row justify-content-center">
    {{-- enctype attribute is important if your form contains file upload --}}
    {{-- Please check https://www.w3schools.com/tags/att_form_enctype.asp for further info --}}
    <form class="m-2" method="post" action="/photos" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">File Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter file Name" name="name">
      </div>
      <div class="form-group m-1">
        <label for="image">Choose Image</label>
        <input id="image" type="file" name="image">
      </div>
      <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Upload</button>
    </form>
  </div>
  <!-- TODO: error handling -->
</div>