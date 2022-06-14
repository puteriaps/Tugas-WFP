@extends('layout.conquer2')
@section('content')
<h2>List Medicines</h2> 
<div>
  @if(session('status'))
  <div class="alert alert-success">{{session('status')}}</div>
  @endif

  @if(session('error'))
  <div class="alert alert-danger">{{session('error')}}</div>
  @endif
</div>  
<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
</div>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Generic Name</th>
        <th>Medicines Form</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($produk as $qb)
        <tr>
            <td>{{ $qb -> id}}</td>
            <td>{{ $qb -> generic_name}}</td>
            <td>{{ $qb -> medicines_form}}</td>
            <td>{{ $qb -> price}}</td>
            <td> <a href = "{{ route('obat.edit',$qb ->id)}}" 
                  class = 'btn btn-xs btn-info'>edit</a>

                  <form method="POST" action="{{url('obat/'.$qb->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger btn-xs" value="delete" onclick="if(!confirm('are you sure to delete this record ?')) return false;">
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>List Medicines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <style>
   img{
     width: 250px;
     height: 150px;
    }
    </style>
</head>
<body>

<div class="container">
  <h2>List Medicines</h2>
  <br><br>
  
  <div class="row">
    @foreach($produk as $qb)
    <div class="col-md-4">
      <img src="{{ asset('images/'.$qb -> image)}}"/>
      <p>{{ $qb -> generic_name}} &nbsp; {{ $qb -> medicines_form}} &nbsp; {{ $qb -> price}}</p>
      <br><br>
    </div>
    @endforeach
  </div>
  
 
</div>

</body>
</html> -->

