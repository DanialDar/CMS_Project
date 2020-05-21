<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("node_modules/admin-lte/dist/css/adminlte.css")}}">

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

@include('layouts.header')
    <!-- /.navbar -->

@include('layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
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
        <!-- /.content-header -->





        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
        <div class="row">

            @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
{{--                role id 1 for super admin--}}
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
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Creditor's</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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

{{--                 super admin--}}

        @endif






        </div>
        <div class="row">


            <!-- STACKED BAR CHART -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
{{--                            <!-- AREA CHART -->--}}
{{--                            <div class="card card-primary">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h3 class="card-title">Area Chart</h3>--}}

{{--                                    <div class="card-tools">--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>--}}
{{--                                        </button>--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="chart">--}}
{{--                                        <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /.card-body -->--}}
{{--                            </div>--}}
                            <!-- /.card -->

                            <!-- DONUT CHART -->
                            <div class="card card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Donut Chart</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- PIE CHART -->
{{--                            <div class="card card-danger">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h3 class="card-title">Pie Chart</h3>--}}

{{--                                    <div class="card-tools">--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>--}}
{{--                                        </button>--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
{{--                                </div>--}}
{{--                                <!-- /.card-body -->--}}
{{--                            </div>--}}
                            <!-- /.card -->

                        </div>
                        <!-- /.col (LEFT) -->
                        <div class="col-md-6">
                            <!-- LINE CHART -->
{{--                            <div class="card card-info">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h3 class="card-title">Line Chart</h3>--}}

{{--                                    <div class="card-tools">--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>--}}
{{--                                        </button>--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="chart">--}}
{{--                                        <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /.card-body -->--}}
{{--                            </div>--}}
                            <!-- /.card -->

                            <!-- BAR CHART -->
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Bar Chart</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- STACKED BAR CHART -->
{{--                            <div class="card card-success">--}}
{{--                                <div class="card-header">--}}
{{--                                    <h3 class="card-title">Stacked Bar Chart</h3>--}}

{{--                                    <div class="card-tools">--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>--}}
{{--                                        </button>--}}
{{--                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="chart">--}}
{{--                                        <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <!-- /.card-body -->--}}
{{--                            </div>--}}
                            <!-- /.card -->

                        </div>
                        <!-- /.col (RIGHT) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.card -->
        </div>



        </div></section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<script src="/js/app.js"></script>

<!-- jQuery -->
<script src="{{asset('admin-lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin-lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-lte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin-lte/dist/js/demo.js')}}"></script>
<script>

    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */
        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData        = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [
                {
                    data: [700,500,400,600,300,100],
                    backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }
            ]
        }
        var donutOptions     = {
            maintainAspectRatio : false,
            responsive : true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        var donutChart = new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })
        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $('#barChart').get(0).getContext('2d')
        var barChartData = jQuery.extend(true, {}, areaChartData)
        var temp0 = areaChartData.datasets[0]
        var temp1 = areaChartData.datasets[1]
        barChartData.datasets[0] = temp1
        barChartData.datasets[1] = temp0

        var barChartOptions = {
            responsive              : true,
            maintainAspectRatio     : false,
            datasetFill             : false
        }

        var barChart = new Chart(barChartCanvas, {
            type: 'bar',
            data: barChartData,
            options: barChartOptions
        })
        // //--------------
        // //- AREA CHART -
        // //--------------
        //
        // // Get context with jQuery - using jQuery's .get() method.
        // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
        //
        // var areaChartData = {
        //     labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        //     datasets: [
        //         {
        //             label               : 'Digital Goods',
        //             backgroundColor     : 'rgba(60,141,188,0.9)',
        //             borderColor         : 'rgba(60,141,188,0.8)',
        //             pointRadius          : false,
        //             pointColor          : '#3b8bba',
        //             pointStrokeColor    : 'rgba(60,141,188,1)',
        //             pointHighlightFill  : '#fff',
        //             pointHighlightStroke: 'rgba(60,141,188,1)',
        //             data                : [28, 48, 40, 19, 86, 27, 90]
        //         },
        //         {
        //             label               : 'Electronics',
        //             backgroundColor     : 'rgba(210, 214, 222, 1)',
        //             borderColor         : 'rgba(210, 214, 222, 1)',
        //             pointRadius         : false,
        //             pointColor          : 'rgba(210, 214, 222, 1)',
        //             pointStrokeColor    : '#c1c7d1',
        //             pointHighlightFill  : '#fff',
        //             pointHighlightStroke: 'rgba(220,220,220,1)',
        //             data                : [65, 59, 80, 81, 56, 55, 40]
        //         },
        //     ]
        // }
        //
        // var areaChartOptions = {
        //     maintainAspectRatio : false,
        //     responsive : true,
        //     legend: {
        //         display: false
        //     },
        //     scales: {
        //         xAxes: [{
        //             gridLines : {
        //                 display : false,
        //             }
        //         }],
        //         yAxes: [{
        //             gridLines : {
        //                 display : false,
        //             }
        //         }]
        //     }
        // }
        //
        // // This will get the first returned node in the jQuery collection.
        // var areaChart       = new Chart(areaChartCanvas, {
        //     type: 'line',
        //     data: areaChartData,
        //     options: areaChartOptions
        // })
        //
        // //-------------
        // //- LINE CHART -
        // //--------------
        // var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        // var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
        // var lineChartData = jQuery.extend(true, {}, areaChartData)
        // lineChartData.datasets[0].fill = false;
        // lineChartData.datasets[1].fill = false;
        // lineChartOptions.datasetFill = false
        //
        // var lineChart = new Chart(lineChartCanvas, {
        //     type: 'line',
        //     data: lineChartData,
        //     options: lineChartOptions
        // })
        //
        //
        //
        // //-------------
        // //- PIE CHART -
        // //-------------
        // // Get context with jQuery - using jQuery's .get() method.
        // var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
        // var pieData        = donutData;
        // var pieOptions     = {
        //     maintainAspectRatio : false,
        //     responsive : true,
        // }
        // //Create pie or douhnut chart
        // // You can switch between pie and douhnut using the method below.
        // var pieChart = new Chart(pieChartCanvas, {
        //     type: 'pie',
        //     data: pieData,
        //     options: pieOptions
        // })
        //
        //
        // //---------------------
        // //- STACKED BAR CHART -
        // //---------------------
        // var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
        // var stackedBarChartData = jQuery.extend(true, {}, barChartData)
        //
        // var stackedBarChartOptions = {
        //     responsive              : true,
        //     maintainAspectRatio     : false,
        //     scales: {
        //         xAxes: [{
        //             stacked: true,
        //         }],
        //         yAxes: [{
        //             stacked: true
        //         }]
        //     }
        // }
        //
        // var stackedBarChart = new Chart(stackedBarChartCanvas, {
        //     type: 'bar',
        //     data: stackedBarChartData,
        //     options: stackedBarChartOptions
        // })
    })
</script>

<!-- jQuery -->
</body>
</html>
