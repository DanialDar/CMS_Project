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
          <th>Changed Values</th>
          <th>Created At</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($logs as $log)          
          <tr>
            <td>{{ $log->id }}</td>
            <td>{{ $log->performer_role }} "{{ $log->performed_by }}" {{ $log->action }} {{ $log->performed_on_role }} "{{ $log->performed_on }}"</td>
            <td>
              @if($log->action == "Creates")
                No Changes
              @elseif($log->action == "Updates")  
                @php $changes = unserialize($log->changes);@endphp
                @if(is_array($changes))
                  @foreach($changes as $change)
                    {{ $change }}
                    <br>
                  @endforeach
                @endif
              @endif    
            </td>
            <td>{{ $log->created_at }}</td>
          </tr>  
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>

@endsection   
