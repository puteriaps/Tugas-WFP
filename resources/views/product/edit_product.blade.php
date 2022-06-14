@extends('layout.conquer2')
@section('content')
<form method ='POST' action="{{url('obat/'.$data->id)}}">
  @csrf
  @method("PUT")
  <div class="form-group">
    <label for="generic_name">Generic Name</label>
    <input type="text" class="form-control" id="generic_name" name ="generic_name" aria-describedby="emailHelp" placeholder="Enter Generic Name" value="{{$data->generic_name}}">
  </div>
  <div class="form-group">
    <label for="medicines_form">Medicines Form</label>
    <input type="text" class="form-control" id="medicines_form" name="medicines_form" aria-describedby="emailHelp" placeholder="Enter Medicines Form" value="{{$data->medicines_form}}">
  </div>
  <div class="form-group">
    <label for="restriction_formula">Restriction Formula</label>
    <input type="text" class="form-control" id="restriction_formula" name ="restriction_formula" aria-describedby="emailHelp" placeholder="Enter Retristic Formula" value="{{$data->restriction_formula}}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="Enter Description" value="{{$data->description}}">
  </div>


  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" id="faskes_tk1" name="faskes_tk1" {{$data->faskes_tk1 == '1'? 'checked' : ''}}>
    <label class="form-check-label" for="faskes_tk1">
      Faskes tk1
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" id="faskes_tk2" name="faskes_tk2" {{$data->faskes_tk2 == '1'? 'checked' : ''}}> 
    <label class="form-check-label" for="faskes_tk2">
      Faskes tk2
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="1" id="faskes_tk3" name="faskes_tk3" {{$data->faskes_tk3 == '1'? 'checked' : ''}}>
    <label class="form-check-label" for="faskes_tk3">
      Faskes tk3
    </label>
  </div>


  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Enter Medicines Form" value="{{$data-> price}}">
  </div>

  <div class="form-group">
        <label class="col-sm-2 col-form-label" for="category">Category</label>
        <select name="category" class="select2 form-control col-sm-4" required>
            <option value="{{ $data->category_id}}">{{ $data->category_id}} - {{$data->category->categories_name}}</option>
            @foreach($categories as $categori)
            <option value="{{ $categori->id }}"{{ old('categori')==$categori->id?' selected':'' }}>{{ $categori->id }} - {{ $categori->categories_name}}</option>
            @endforeach
        </select>
        <span class="help-block">{{ $errors->first('categori', ':message') }}</span>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
