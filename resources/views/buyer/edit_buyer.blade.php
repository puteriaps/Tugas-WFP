@extends('layout.conquer2')
@section('content')
<form method ='POST' action="{{url('buyer/'.$data->id)}}">
  @csrf
  @method("PUT")
  <div class="form-group">
    <label for="name">Name</label>
    <input type="" class="form-control" id="name" name='name' aria-describedby="emailHelp" placeholder="Enter Name" value="{{$data->name}}">
    
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name ='address' aria-describedby="emailHelp" placeholder="Enter Address" value="{{$data->address}}">
    
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
