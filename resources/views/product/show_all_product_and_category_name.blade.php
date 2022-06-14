<!-- Kalau Membuat UI untuk show jangan menggunakan tabel -->
@extends('layout.conquer2')
@section('content')
<h2>Show All Medicines</h2> 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Generic Name</th>
        <th>Medicines Form</th>
        <th>Category Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d -> id}}</td>
            <td>{{ $d -> generic_name}}</td>
            <td>{{ $d -> medicines_form}}</td>
            <td>{{ $d -> categories_name}}</td>
        </tr>
        @endforeach
    </tbody>
  </table> 
@endsection
