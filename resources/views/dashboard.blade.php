@extends('layouts.master')


@section('content')
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard </h1>
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
{{--    super admin starts--}}
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
                    <th>Person Name</th>
                    <th>Perosn Phone</th>
                    <th>Company Code</th>
                      </tr>


                    @isset($leads)
                        @foreach($leads as $lead)
                  <tr style="background-color:white">
                    <td>{{$lead->company_name}}</td>
                    <td>{{$lead->contact_name}}</td>
                    <td>{{$lead->contact_number}}</td>
                    <td>{{$lead->company_code}}</td>
                  </tr>
                        @endforeach
                   @endisset
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
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Address</th>

                  </tr>
                    @isset($creditors)
                        @foreach($creditors as $creditor)
                            <tr style="background-color:white">
                                <td>{{$creditor->name}}</td>
                                <td>{{$creditor->email}}</td>
                                <td>{{$creditor->contact_number}}</td>
                                <td>{{$creditor->postal_address}}</td>
                            </tr>
                        @endforeach
                    @endisset
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
{{--  super admin end  --}}

{{--    lead intruducer start--}}
@if(\Illuminate\Support\Facades\Auth::user()->role_id == 2)
    <link rel="stylesheet" href="admin-lte/dist/css/adminlte.min.css">

    {{--role id 1 for super admin--}}
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>
                    <p>Agents</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px"></sup></h3>
                    <p>Customer</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->

        <!-- ./col -->
    </div>
    <br>

    <!-- Main content -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {

            var today = new Date();

            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var date1 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()-1);
            var date2 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()-2);
            var date3 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()-3);
            var date4 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()-4);
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['This Week', 'Bolivia', 'Ecuador', 'Madagascar', 'Papua New Guinea', 'Rwanda', 'Average'],
                [date4 ,  165,      938,         522,             998,           450,      614.6],
                [date3 ,  135,      1120,        599,             1268,          288,      682],
                [date2,  157,      1167,        587,             807,           397,      623],
                [ date1 ,  139,      1110,        615,             968,           215,      609.4],
                [date,  136,      691,         629,             1026,          366,      569.6]
            ]);

            var options = {
                title : 'Weekly report generated by system',
                vAxis: {title: 'No of Successful Leads'},
                hAxis: {title: 'This week'},
                seriesType: 'bars',
                series: {5: {type: 'line'}}        };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>





    <!-- jQuery -->

@endif


{{--Lead introducer end--}}

{{--agent starts--}}
    @if(\Illuminate\Support\Facades\Auth::user()->role_id == 4)
        <link rel="stylesheet" href="admin-lte/dist/css/adminlte.min.css">

        {{--role id 1 for super admin--}}
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Customers</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px"></sup></h3>
                        <p>Reports</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <!-- ./col -->

            <!-- ./col -->
        </div>
        <br>

        <!-- Main content -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawVisualization);

            function drawVisualization() {

                var today = new Date();

                var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
                var date1 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()-1);
                var date2 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()-2);
                var date3 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()-3);
                var date4 = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+(today.getDate()-4);
                // Some raw data (not necessarily accurate)
                var data = google.visualization.arrayToDataTable([
                    ['This Week', 'Active', 'Pending', 'Incoming Leads', 'Successful Leads'],
                    [date4 ,  165,          614.6,  165,          614.6],
                    [date3 ,  135,          682,  165,          614.6],
                    [date2,  157,           623,  165,          614.6],
                    [ date1 ,  139,        609.4,  165,          614.6],
                    [date,  136,           569.6,  165,          614.6]
                ]);

                var options = {
                    title : 'Weekly report generated by system',
                    vAxis: {title: 'No of Customers'},
                    hAxis: {title: 'This week'},
                    seriesType: 'bars',
                    series: {4: {type: 'line'}}        };

                var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        </script>
        <div id="chart_div" style="width: 100%; height: 500px;"></div>





        <!-- jQuery -->

    @endif
{{--    agent end--}}
@endsection
