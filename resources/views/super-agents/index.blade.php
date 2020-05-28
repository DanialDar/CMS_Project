@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header">
      <br>
      <div class="col-md-12">
          <div style="float: left">  
            <h3 class="box-title">Super Agents</h3>
          </div>
          <div style="float: right;">
            <a class="btn btn-success" href="/super-agents/create"><i class="ion-ios-plus"></i> Add Super Agents</a>
          </div>
      </div>
        <br>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Super Agent Name</th>
          <th>Email</th>
          <th>Contact Number</th>
          <th>Designation</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>          
          @foreach($s_agents as $s_agent)
          <tr>
            <td>{{ $s_agent->name }}</td>
            <td>{{ $s_agent->email }}</td>
            <td>{{ $s_agent->contact }}</td>
            <td>{{ $s_agent->designation }}</td>
            <td>
              <a style="margin-right:20px" href="/super-agents/edit/{{$s_agent->id}}"><i class="nav-icon fas fa-edit"></i></a>
              <a onclick="clicked({{$s_agent->id}})" href="#" style="text-decoration: none"> 
                <i class="nav-icon fas fa-trash">
                  <form method="POST" id="del{{$s_agent->id}}" action="/super-agent/{{$s_agent->id}}">
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