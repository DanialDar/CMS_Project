@extends('layouts.master')

@section('content')
<br>
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title" style="padding-left: 10px">Edit Customers</h3>
    </div>
    <br>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="/customers/update/{{$customer->id}}" enctype="multipart/form-data" class="form-horizontal">
      @csrf
      <div class="box-body">
        <br>    
        <div class="row">
            <div class="col-md-3">
                <label for="title" class="control-label" style="padding-left:50px">Customer Title</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="title" id="title" value="{{ $customer->title }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="control-label" style="padding-left:50px">Customer Name</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="name" id="name" value="{{ $customer->name }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="email" class="control-label" style="padding-left:50px">Customer Email</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="email" id="email" value="{{ $customer->email }}">
            </div>
        </div>
        <br>
        @foreach($loginUsers as $lu)
        <div class="row">
            <div class="col-md-3">
                <label for="password" class="control-label" style="padding-left:50px">Customer Password</label>
            </div>          
            <div class="col-md-8">
                <input type="password" class="form-control" name="password" id="password" value="{{ $lu->password }}">
            </div>
        </div>
        <br>
        @endforeach
        <div class="row">
            <div class="col-md-3">
                <label for="contact_number" class="control-label" style="padding-left:50px">Contact Number</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="contact_number" id="contact_number" value="{{ $customer->contact_number }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="marital_status" class="control-label" style="padding-left:50px">Marital Status </label>
            </div>          
            <div class="col-md-8">
                <select class="form-control" name="marital_status" id="marital_status">
                    <option @if($customer->marital_status == "Married") selected @endif value="Married">Married</option>
                    <option @if($customer->marital_status == "Un-Married") selected @endif value="Un-Married">Un-Married</option>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="birth_date" class="control-label" style="padding-left:50px">Date OF Birth</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="birth_date" id="datepicker" value="{{ $customer->birth_date }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="postal_address" class="control-label" style="padding-left:50px">Postal Address</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="postal_address" id="postal_address" value="{{ $customer->postal_address }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="city" class="control-label" style="padding-left:50px">City</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="city" id="city" value="{{ $customer->city }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="country" class="control-label" style="padding-left:50px">Country</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="country" id="country" value="{{ $customer->country }}">
            </div>
        </div>
        <br>
        <input type="hidden" class="form-control" name="customer_id" id="customer_id" value="{{$customer->id }}">
      </div>
      <br>
      <!-- /.box-body -->
      <div class="box-footer">
        <button class="btn btn-info">
            <a href="/customer" style="color:white">Cancel</a>
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