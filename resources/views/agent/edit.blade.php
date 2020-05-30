@extends('layouts.master')

@section('content')
<br>
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title" style="padding-left: 10px">Edit Lead Introducers Company</h3>
    </div>
    <br>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="/lead-introducers/update/{{$company->id}}" enctype="multipart/form-data" class="form-horizontal">
      @csrf
      <div class="box-body">
        <br>    
        <div class="row">
            <div class="col-md-3">
                <label for="company_name" class="control-label" style="padding-left:50px">Company Name</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="company_name" id="company_name" value="{{ $company->company_name }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="address" class="control-label" style="padding-left:50px">Company Address</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="address" id="address" value="{{ $company->address }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="contact_name" class="control-label" style="padding-left:50px">Company Contact Person</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="contact_name" id="contact_name" value="{{ $company->contact_name }}">
            </div>
        </div>
        <br>
        @foreach($loginUsers as $lu)
        <div class="row">
            <div class="col-md-3">
                <label for="contact_email" class="control-label" style="padding-left:50px">Contact Person Login Email</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="contact_email" id="contact_email" value="{{ $lu->email }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="contact_password" class="control-label" style="padding-left:50px">Contact Person Password</label>
            </div>          
            <div class="col-md-8">
                <input type="password" class="form-control" name="contact_password" id="contact_password" value="{{ $lu->password }}">
            </div>
        </div>
        <br>
        @endforeach
        <div class="row">
            <div class="col-md-3">
                <label for="contact_number" class="control-label" style="padding-left:50px">Contact Number</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="contact_number" id="contact_number" value="{{ $company->contact_number }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="company_code" class="control-label" style="padding-left:50px">Company Code</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="company_code" id="company_code" value="{{ $company->company_code }}">
            </div>
        </div>
        <br>
        <input type="hidden" class="form-control" name="company_id" id="company_id" value="{{$company->id }}">
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