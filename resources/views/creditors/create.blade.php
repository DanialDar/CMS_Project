@extends('layouts.master')

@section('content')
<br>
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title" style="padding-left: 10px">Create Creditors</h3>
    </div>
    <br>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="/creditor" enctype="multipart/form-data" class="form-horizontal">
      @csrf  
      <div class="box-body">
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="control-label" style="padding-left:50px">Creditor Name</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Creditor Name">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="email" class="control-label" style="padding-left:50px">Email Address</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email Address">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="postal_address" class="control-label" style="padding-left:50px">Postal Address</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="postal_address" id="postal_address" placeholder="Enter Postal Address">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="contact_number" class="control-label" style="padding-left:50px">Contact Number</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="Enter Contact Number">
            </div>
        </div>
        <br>
      </div>
      <br>
      <!-- /.box-body -->
      <div class="box-footer">
        <button class="btn btn-info">
            <a href="/creditors" style="color:white">Cancel</a>
        </button>
        <button type="submit" class="btn btn-success">Create</button>
        
      </div>
      <!-- /.box-footer -->
    </form>
  </div>

  <link rel="stylesheet" href="/css/ionicons.min.css">  
<script src="/js/adminlte.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/app.js"></script>
<script src="/js/fastclick.js"></script>
{{-- <!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script> --}}
  @endsection