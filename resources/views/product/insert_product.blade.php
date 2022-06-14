@extends('layout.conquer2')
@section('content')
<form method ='POST' action="{{route('obat.store')}}">
  @csrf
  <div class="form-group">
    <label for="generic_name">Generic Name</label>
    <input type="text" class="form-control" id="generic_name" name ="generic_name" aria-describedby="emailHelp" placeholder="Enter Generic Name">
  </div>
  <div class="form-group">
    <label for="medicines_form">Medicines Form</label>
    <input type="text" class="form-control" id="medicines_form" name="medicines_form" aria-describedby="emailHelp" placeholder="Enter Medicines Form">
  </div>
  <div class="form-group">
    <label for="restriction_formula">Restriction Formula</label>
    <input type="text" class="form-control" id="restriction_formula" name ="restriction_formula" aria-describedby="emailHelp" placeholder="Enter Retristic Formula">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Enter Description">
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" id="faskes_tk1" name="faskes_tk1">
    <label class="form-check-label" for="faskes_tk1">
      Faskes tk1
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" id="faskes_tk2" name="faskes_tk2"> 
    <label class="form-check-label" for="faskes_tk2">
      Faskes tk2
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" id="faskes_tk3" name="faskes_tk3">
    <label class="form-check-label" for="faskes_tk3">
      Faskes tk3
    </label>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Enter Medicines Form">
  </div>

  <div class="form-group">
        <label class="col-sm-2 col-form-label" for="category">Category</label>
        <select name="category" class="select2 form-control col-sm-4" required>
            <option value="" selected hidden disabled>-- Pilih Category --</option>
            @foreach($categories as $categori)
            <option value="{{ $categori->id }}"{{ old('categori')==$categori->id?' selected':'' }}>{{ $categori->id }} - {{ $categori->categories_name}}</option>
            @endforeach
        </select>
        <span class="help-block">{{ $errors->first('categori', ':message') }}</span>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
