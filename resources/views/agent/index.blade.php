@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header">
      <br>
      <div class="col-md-12">
          <div style="float: left">
            <h3 class="box-title">Agents</h3>
          </div>
          <div style="float: right;">
            <a class="btn btn-success" href="/agents/create"><i class="ion-ios-plus"></i> Add Agent</a>
          </div>
      </div>
        <br>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Agent Name</th>
          <th>Email</th>
          <th>Contact Number</th>

          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach($agents as $agent)
          <tr>
            <td>{{ $agent->name }}</td>
            <td>{{ $agent->email }}</td>
            <td>{{ $agent->contact_number }}</td>

            <td>
            <a style="margin-right:20px" href="/agents/edit/{{$agent->id}}"><i class="nav-icon fas fa-edit"></i></a>
            {{-- <a style="margin-right:20px" href=""> --}}
              {{-- <i class="nav-icon fas fa-trash"> --}}
                  <a onclick="clicked({{$agent->id}})" href="#" style="text-decoration: none">
                    <i class="nav-icon fas fa-trash">
                      <form method="POST" id="del{{$agent->id}}" action="/agent/{{$agent->id}}">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                      </form>
                    </i>
                  </a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <script>
    function clicked(id){
        if(confirm("Are You Sure ?")){
            document.getElementById('del'+id).submit();
        }
        else{
        }
    }
  </script>
@endsection
