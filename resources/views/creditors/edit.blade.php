@extends('layouts.master')

@section('content')
<br>
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title" style="padding-left: 10px">Edit Creditors</h3>
    </div>
    <br>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="/creditors/update/{{$creditor->id}}" enctype="multipart/form-data" class="form-horizontal">
      @csrf
      <div class="box-body">
        <br>    
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="control-label" style="padding-left:50px">Creditor Name</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="name" id="name" value="{{ $creditor->name }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="email" class="control-label" style="padding-left:50px">Email Address</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="email" id="email" value="{{ $creditor->email }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="postal_address" class="control-label" style="padding-left:50px">Postal Address</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="postal_address" id="postal_address" value="{{ $creditor->postal_address }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="contact_number" class="control-label" style="padding-left:50px">Contact Number</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="contact_number" id="contact_number" value="{{ $creditor->contact_number }}">
            </div>
        </div>
        <br>
        
        {{-- <input type="hidden" class="form-control" name="company_id" id="company_id" value="{{$company->id }}"> --}}
      </div>
      <br>
      <!-- /.box-body -->
      <div class="box-footer">
        <button class="btn btn-info">
            <a href="/lead-introducers" style="color:white">Cancel</a>
        </button>
        <button type="submit" class="btn btn-success">Update</button>
        
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