@extends('layout.conquer2')
@section('content')
<form method ='POST' action="{{url('category/'.$data->id)}}">
  @csrf
  @method("PUT")
  <div class="form-group">
    <label for="categories_name">Category Name</label>
    <input type="text" class="form-control" id="categories_name" name ="categories_name" aria-describedby="emailHelp" placeholder="Enter Category Name" value="{{$data->categories_name}}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Enter Description" value="{{$data->description}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
