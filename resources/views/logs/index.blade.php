@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header">
      <br>
      <div class="col-md-12">
          <div style="float: left">  
            <h3 class="box-title">System Logs</h3>
          </div>
      </div>
      <br>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Logs ID</th>
          <th>Details</th>
          <th>Created At</th>
        </tr>
        </thead>
        <tbody>          
          
          <tr>
            <td>{{ $id }}</td>
          <td>{{ $performed_by }} {{ $action }} {{ $performed_on }}</td>
            <td>{{ $created_at }}</td>
          </tr>
          
               
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>

@endsection   
