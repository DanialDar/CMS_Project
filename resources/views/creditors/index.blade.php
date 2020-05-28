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
          <th>Company Name</th>
          <th>Contact Name</th>
          <th>Contact Number</th>
          <th>Company Code</th>
          <th>Adress</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 4.0
          </td>
          <td>Win 95+</td>
          <td> 4</td>
          <td>X</td>
          <td>
            <a style="margin-right:20px" href=""><i class="fa fa-edit"></i></a>
            <a style="margin-right:20px" href=""><i class="fa fa-trash"></i></a>
          </td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 5.0
          </td>
          <td>Win 95+</td>
          <td>5</td>
          <td>C</td>
        </tr>
        <tr>
          <td>Trident</td>
          <td>Internet
            Explorer 5.5
          </td>
          <td>Win 95+</td>
          <td>5.5</td>
          <td>A</td>
        </tr>
        
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  
@endsection   