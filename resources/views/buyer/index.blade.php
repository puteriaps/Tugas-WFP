@extends('layout.conquer2')
@section('content')
<h2>List Buyer</h2>  
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
        <th>Name</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($buyer as $c)
        <tr>
            <td>{{ $c -> id}}</td>
            <td class='editable' id='td_name_{{ $c -> id}}'>{{ $c -> name}}</td>
            <td class='editable' id='td_address_{{ $c -> id}}'>{{ $c -> address}}</td>
            <td> <a href = "{{ route('buyer.edit',$c ->id)}}" 
                  class = 'btn btn-xs btn-info'>edit</a>

                  <form method="POST" action="{{url('buyer/'.$c->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger btn-xs" value="delete" onclick="if(!confirm('are you sure to delete this record ?')) return false;">
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  @section('initialscript')
  <script>
    $('.editable').editable({
      closeOnEnter :true,
      callback:function(data){
        if(data.content){
          //alert(data.content)
          var s_id = $data.$el[0].id
          var fname=s_id.split('_')[1]
          var id=s_id.split('_')[2]
          $.ajax({
            type:'POST',
            url:'{{route("buyer.saveDataField")}}',
            data:{'_token':'<?php echo csrf_token() ?>',
                  'id':id,
                  'fname':fname,
                  'value':data.content
            },
            success: function(data){
              alert(data.msg)
            }
          });
        }
      }
    });
  </script>    
@endsection

