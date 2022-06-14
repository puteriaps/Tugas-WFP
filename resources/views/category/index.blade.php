@extends('layout.conquer2')
@section('content')
<h2>List Categories</h2>   
<div>
  @if(session('status'))
  <div class="alert alert-success">{{session('status')}}</div>
  @endif

  @if(session('error'))
  <div class="alert alert-danger">{{session('error')}}</div>
  @endif
</div>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Categories Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($categories as $c)
        <tr>
            <td>{{ $c -> id}}</td>
            <td>{{ $c -> categories_name}}</td>
            <td>{{ $c -> description}}</td>
            <td> <a href = "{{ route('category.edit',$c ->id)}}" 
                  class = 'btn btn-xs btn-info'>edit</a>

                  <form method="POST" action="{{url('category/'.$c->id)}}">
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

