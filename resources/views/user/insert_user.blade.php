@extends('layout.conquer2')
@section('content')
<form  method ='POST' action="{{route('category.store')}}">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="token">Remember Token</label>
    <input type="text" class="form-control" id="token" placeholder="Remember Token">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
