@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header">
      <br>
      <div class="col-md-12">
          <div style="float: left">  
            <h3 class="box-title">Lead Introducers</h3>
          </div>
          <div style="float: right;">
            <a class="btn btn-success" href="/lead-introducers/create"><i class="ion-ios-plus"></i> Add Company</a>
          </div>
      </div>
        <br>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Company Name</th>
          <th>Contact Name</th>
          <th>Contact Number</th>
          <th>Company Code</th>
          <th>Adress</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>          
          @foreach($companies as $company)
          <tr>
            <td>{{ $company->company_name }}</td>
            <td>{{ $company->contact_name }}</td>
            <td>{{ $company->contact_number }}</td>
            <td>{{ $company->company_code }}</td>
            <td>{{ $company->address }}</td>
            <td>
            <a style="margin-right:20px" href="/lead-introducers/edit/{{$company->id}}"><i class="nav-icon fas fa-edit"></i></a>
            {{-- <a style="margin-right:20px" href=""> --}}
              {{-- <i class="nav-icon fas fa-trash"> --}}                
                  <a onclick="clicked({{$company->id}})" href="#" style="text-decoration: none"> 
                    <i class="nav-icon fas fa-trash">
                      <form method="POST" id="del{{$company->id}}" action="/lead-introducer/{{$company->id}}">
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