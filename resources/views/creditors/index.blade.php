@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header">
      <br>
      <div class="col-md-12">
          <div style="float: left">  
            <h3 class="box-title">Creditors</h3>
          </div>
          <div style="float: right;">
            <a class="btn btn-success" href="/creditors/create"><i class="ion-ios-plus"></i> Add Creditor</a>
          </div>
      </div>
        <br>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Creditor Name</th>
          <th>Email</th>
          <th>Contact Number</th>
          <th>Postal Adress</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>          
          @foreach($creditors as $creditor)
          <tr>
            <td>{{ $creditor->name }}</td>
            <td>{{ $creditor->email }}</td>
            <td>{{ $creditor->contact_number }}</td>
            <td>{{ $creditor->postal_address }}</td>
            <td>
              <a style="margin-right:20px" href="/creditors/edit/{{$creditor->id}}"><i class="nav-icon fas fa-edit"></i></a>
              <a onclick="clicked({{$creditor->id}})" href="#" style="text-decoration: none"> 
                <i class="nav-icon fas fa-trash">
                  <form method="POST" id="del{{$creditor->id}}" action="/creditor/{{$creditor->id}}">
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