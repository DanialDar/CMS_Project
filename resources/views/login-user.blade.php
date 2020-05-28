{{--@include('layouts.header')--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin Management System</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/AdminLte.min.css">
    <link rel="stylesheet" href="/css/AdminLte.css">
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/_all-skin.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {{-- <link rel="stylesheet" href="{{ asset("admin-lte/node_modules/dist/css/adminlte.css")}}"> --}}
<!-- Theme style -->
    {{-- <link rel="stylesheet" href="{{ asset("admin-lte/node_modules/dist/css/adminlte.min.css")}}"> --}}

    <link rel="stylesheet" href="{{ asset("admin-lte/node_modules/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
{{-- <link rel="stylesheet" href="{{ asset("node_modules/font-awesome/css/font-awesome.min.css")}}"> --}}
<!-- Ionicons -->
{{-- <link rel="stylesheet" href="{{ asset("node_modules/Ionicons/css/ionicons.min.css")}}"> --}}
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset("node_modules/datatables.net/css/dataTables.bootstrap.min.css")}}">
</head>
<!-- Horizontal Form -->
<br><br><br><br>
<div class="row">
    <div class="col col-md-3"></div>
    <div class="col col-md-6">

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Login Form</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->

        <form class="form-horizontal" method="POST" action="/login-user" enctype="multipart/form-data" class="form-horizontal">
            @csrf

            <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="exampleCheck2">Remember me</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
        </div>
        <!-- /.card-footer -->
    </form>
</div>
<!-- /.card -->
    </div>
    <div class="col col-md-3"></div>
</div>


