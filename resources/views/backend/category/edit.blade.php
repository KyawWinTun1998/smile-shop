@extends('layouts.backendtemplate')
@section('content')

  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Category Edit Form</h1>

    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary d-inline-block">Edit category form data</h6>
        <a href="{{route('category.index')}}" class="btn btn-outline-primary float-right"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
      </div>
      <div class="card-body">
        <form method="post" action="{{route('category.update',$category->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group row {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="inputName" name="name" value="{{$category->name}}">
              <span class="text-danger">{{ $errors->first('name') }}</span>
            </div>
          </div>
          <div class="form-group row {{ $errors->has('photo') ? 'has-error' : '' }}">
            <label for="inputPhoto" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-5">
              <input type="file" id="inputPhoto" name="photo">
              <span class="text-danger">{{ $errors->first('photo') }}</span>
              <img src="{{$category->photo}}" alt="photo" class="img-fluid m-5" width="200">
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  
@endsection