@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header">
      <br>
      <div class="col-md-12">
          <div style="float: left">
            <h3 class="box-title">Customers</h3>
          </div>
          <div style="float: right;">
            <a class="btn btn-success" href="/customers/create"><i class="ion-ios-plus"></i> Add Customers</a>
          </div>
      </div>
        <br>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Title</th>
          <th>Name</th>
          <th>Email</th>
          <th>Contact Number</th>
          <th>Current Status</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach($customers as $customer)
          <tr>
            <td>{{ $customer->title }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->contact_number }}</td>
            @if($customer->current_status == "pending")
                <td><span class="label label-warning">{{$customer->current_status}}</span></td>
            @elseif($customer->current_status == "processing")
                <td><span class="label label-primary">{{$customer->current_status}}</span></td>
            @elseif($customer->current_status == "confirm")
                <td><span class="label label-success">{{$customer->current_status}}</span></td>
            @endif
            <td>
            <a style="margin-right:20px" href="/customers/edit/{{$customer->id}}"><i class="nav-icon fas fa-edit"></i></a>
            {{-- <a style="margin-right:20px" href=""> --}}
              {{-- <i class="nav-icon fas fa-trash"> --}}
                  <a onclick="clicked({{$customer->id}})" href="#" style="text-decoration: none">
                    <i class="nav-icon fas fa-trash">
                      <form method="POST" id="del{{$customer->id}}" action="/customer/{{$customer->id}}">
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
