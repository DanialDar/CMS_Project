@extends('layouts.master')

@section('content')
<br>
<div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title" style="padding-left: 10px">Edit Super Agents</h3>
    </div>
    <br>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="POST" action="/super-agents/update/{{$s_agent->id}}" enctype="multipart/form-data" class="form-horizontal">
      @csrf
      <div class="box-body">
        <br>    
        <div class="row">
            <div class="col-md-3">
                <label for="name" class="control-label" style="padding-left:50px">Agent Name</label>
            </div>          
            <div class="col-md-8">
            <input type="text" class="form-control" name="name" id="name" value="{{ $s_agent->name }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="email" class="control-label" style="padding-left:50px">Email Address</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="email" id="email" value="{{ $s_agent->email }}">
            </div>
        </div>
        <br>
        @foreach($loginUsers as $lu)
        <div class="row">
            <div class="col-md-3">
                <label for="password" class="control-label" style="padding-left:50px"> Password</label>
            </div>          
            <div class="col-md-8">
                <input type="password" class="form-control" name="password" id="password" value="{{ $lu->password }}">
            </div>
        </div>
        <br>
        @endforeach
        <div class="row">
            <div class="col-md-3">
                <label for="contact" class="control-label" style="padding-left:50px">Contact Number</label>
            </div>          
            <div class="col-md-8">
                <input type="text" class="form-control" name="contact" id="contact" value="{{ $s_agent->contact }}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="designation" class="control-label" style="padding-left:50px">Agent Role</label>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="designation" id="designation">
                    <option @if($s_agent->designation == "advisor") selected @endif value="advisor">Advisor</option>
                    <option @if($s_agent->designation == "agent") selected @endif value="agent">Agent</option>
                    {{-- <option value="advisor" selected>Advisor</option> --}}
                    {{-- <option value="agent">Agent</option> --}}
                </select>
            </div>
        </div>
        <br>
        <input type="hidden" class="form-control" name="super_agent_id" id="super_agent_id" value="{{$s_agent->id }}">
      </div>
      <br>
      <!-- /.box-body -->
      <div class="box-footer">
        <button class="btn btn-info">
            <a href="/super-agents" style="color:white">Cancel</a>
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