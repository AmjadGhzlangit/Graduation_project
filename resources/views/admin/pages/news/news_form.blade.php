@extends('admin.layouts.app')


@section('content')

<form class="m-4 width:50%" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group row">
        <label for="first_name">News Title</label>
        <input type="text" class="form-control" name="title" value="{{ old('title') }}"  placeholder="Enter Title">
      </div>

      {{-- description  --}}
    <div class="form-group">
        <label for="last_name">News Description</label>
        <input type="text" class="form-control"  name="description"  placeholder="Enter News Description">
      </div>
      {{-- End description  --}}

      {{-- image news  --}}
    <div class="form-group">
        <label for="phone_number">News Image</label>
        <input type="file" class="form-control"  name="image_path"  placeholder="Upload Image">
      </div>

  <input type="submit" class="btn btn-primary" value="Add News">

      {{-- End image news  --}}
@endsection