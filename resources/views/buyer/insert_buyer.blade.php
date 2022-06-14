@extends('layout.conquer2')
@section('content')
<form  enctype='multipart/from-data' role='from' method ='POST' action="{{route('buyer.store')}}">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="" class="form-control" id="name" name='name' aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name ='address' aria-describedby="emailHelp" placeholder="Enter Address">
    
  </div>
  <div class="form-group">
    <label>Logo</label>
    <input type="file" class="form-control" id="logo" name ='logo'>
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
