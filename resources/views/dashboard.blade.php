@extends('layouts.master')


@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
{{--role id 1 for super admin--}}
    <!-- Small boxes (Stat box) -->                
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Lead Introducer's</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                    <a href="/lead-introducers" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px"></sup></h3>
                    <p>Creditor's</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/creditors" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>Customers</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>

                    <p>Super Agents</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>            
    <br>    
    <div class="row">
        <div class="col-md-11">                  
            <div class="box">
              {{-- <div class="box-header">
                <h3 class="box-title">Lead Introducer Companies</h3>
                <br>
              </div> --}}
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-condensed">                                    
                  <tr>
                    <th>Introducer</th>
                    <th>TL</th>
                    <th>AGD</th>
                    <th>Label</th>
                    <th>Label</th>
                    <th>Label</th>
                    <th>Label</th>
                  </tr>
                  <tr  style="background-color:white">
                    <td>RB</td>
                    <td>20</td>
                    <td>8</td>
                    <td>300</td>
                    <td>30</td>
                    <td>12</td>                                    
                    <td>12</td>
                  </tr>
                  <tr style="background-color:white">                    
                    <td>BG</td>
                    <td>40</td>
                    <td>8</td>
                    <td>800</td>
                    <td>30</td>
                    <td>72</td>
                    <td>72</td>                                
                  </tr>
                  {{-- <tr>
                    <td>3.</td>
                    <td>Cron</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-light-blue">30%</span></td>
                  </tr> --}}
                  <tr style="background-color:white">
                    <td>XVZ</td>
                    <td>20</td>
                    <td>8</td>
                    <td>300</td>
                    <td>30</td>
                    <td>12</td>
                    <td>12</td>
                  </tr>
                  <tr style="background-color:white">
                    <td>GR</td>
                    <td>20</td>
                    <td>8</td>
                    <td>300</td>
                    <td>30</td>
                    <td>12</td>
                    <td>12</td>
                  </tr>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-11">                  
            <div class="box">
              <br>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <table class="table table-condensed">                                    
                  <tr>
                    <th>Creditor</th>
                    <th>TL</th>
                    <th>AGD</th>
                    <th>Label</th>
                    <th>Label</th>
                    <th>Label</th>
                    <th>Label</th>
                  </tr>
                  <tr  style="background-color:white">
                    <td>RB</td>
                    <td>20</td>
                    <td>8</td>
                    <td>300</td>
                    <td>30</td>
                    <td>12</td>
                    <td>12</td>
                  </tr>
                  <tr style="background-color:white">                    
                    <td>BG</td>
                    <td>40</td>
                    <td>8</td>
                    <td>800</td>
                    <td>30</td>
                    <td>72</td>
                    <td>12</td>                                
                  </tr>
                  {{-- <tr>
                    <td>3.</td>
                    <td>Cron</td>
                    <td>
                      <div class="progress progress-xs progress-striped active">
                        <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                      </div>
                    </td>
                    <td><span class="badge bg-light-blue">30%</span></td>
                  </tr> --}}
                  <tr style="background-color:white">
                    <td>XVZ</td>
                    <td>20</td>
                    <td>8</td>
                    <td>300</td>
                    <td>30</td>
                    <td>12</td>
                    <td>12</td>
                  </tr>
                  <tr style="background-color:white">
                    <td>GR</td>
                    <td>20</td>
                    <td>8</td>
                    <td>300</td>
                    <td>30</td>
                    <td>12</td>
                    <td>12</td>
                  </tr>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-11">
          <div class="box">
            <br>
            <div class="box-body table-responsive no-padding"  style="background-color:white">
              <table class="table table-hover">
                <tr>
                  <th>Lead ID</th>
                  <th>Lead Name</th>
                  <th>lead Provider</th>
                  <th>Created At</th>
                  <th>Status</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>Bacon ipsum</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>Bacon ipsum</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>Bacon ipsum</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>Bacon ipsum</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>Bacon ipsum</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>Bacon ipsum</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-success">Approved</span></td>
                  </tr>  
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@endif    
{{--super admin--}}
@endsection