@extends('layout.master')
@section('title','index')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('create')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="Title_book" class="form-label">Nama</label>
      <input type="text" class="form-control" name="Nama">
    </div>
    <div class="mb-3">
        <label for="Author_book" class="form-label">Harga</label>
        <input type="text" class="form-control" name="Harga">
      </div>
      <div class="mb-3">
        <label for="Publisher_book" class="form-label">Jumlah</label>
        <input type="text" class="form-control" name="Jumlah">
      </div>
      <div class="mb-3">
        <label for="Publisher_book" class="form-label">Category ID</label>
        <input type="text" class="form-control" name="category_id">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input class="form-control" type="file" id="image" name = "image">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
