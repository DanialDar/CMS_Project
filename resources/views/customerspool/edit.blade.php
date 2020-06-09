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
    <form method="POST" action="/customerspool/updateforcustomerpool/{{$customer->id}}" enctype="multipart/form-data" class="form-horizontal">

      @csrf
      <div class="box-body">
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="title" class="control-label" style="padding-left:50px">Customer Title</label>
            </div>
            <div class="col-md-8">
            <input type="text" class="form-control" name="title" id="title" disabled value="{{ $customer->title }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="control-label" style="padding-left:50px">Customer Name</label>
            </div>
            <div class="col-md-8">
            <input type="text" class="form-control" name="name" id="name" disabled value="{{ $customer->name }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="email" class="control-label" style="padding-left:50px">Customer Email</label>
            </div>
            <div class="col-md-8">
            <input type="text" class="form-control" name="email" id="email"  disabled value="{{ $customer->email }}">
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-3">
                <label for="contact_number" class="control-label" style="padding-left:50px">Contact Number</label>
            </div>
            <div class="col-md-8">
            <input type="text" class="form-control" name="contact_number" disabled id="contact_number" value="{{ $customer->contact_number }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="marital_status" class="control-label" style="padding-left:50px">Marital Status </label>
            </div>
            <div class="col-md-8">
                <select class="form-control" disabled name="marital_status" id="marital_status">
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
            <input type="text" class="form-control" name="birth_date" disabled id="datepicker" value="{{ $customer->birth_date }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="postal_address" class="control-label" style="padding-left:50px">Postal Address</label>
            </div>
            <div class="col-md-8">
            <input type="text" class="form-control" name="postal_address" disabled id="postal_address" value="{{ $customer->postal_address }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="city" class="control-label" style="padding-left:50px">City</label>
            </div>
            <div class="col-md-8">
            <input type="text" class="form-control" name="city" id="city" disabled value="{{ $customer->city }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="country" class="control-label" style="padding-left:50px">Country</label>
            </div>
            <div class="col-md-8">
            <input type="text" class="form-control" name="country" id="country" disabled value="{{ $customer->country }}">
            </div>
        </div>
        <br>
          <br>
          <div class="row">
              <div class="col-md-3">
                  <label for="total_income" class="control-label" style="padding-left:50px">Total Income</label>
              </div>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="total_income" id="total_income"  value="">
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-3">
                  <label for="total_expenditure" class="control-label" style="padding-left:50px">Total Expenditure</label>
              </div>
              <div class="col-md-8">
                  <input type="text" class="form-control" name="total_expenditure" id="total_expenditure"  value="">
              </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-3">
                  <label for="creditor" class="control-label" style="padding-left:50px">Creditor </label>
              </div>
              <div class="col-md-8">
                  <select class="form-control"  name="creditor" id="creditor">
                      <option value="none" selected> Please Select Creditor</option>
                  @foreach($creditors as $creditor)
                      <option  value="{{$creditor->name}}">{{$creditor->name}}</option>
                  @endforeach
                  </select>
              </div>
          </div>
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
