<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   <a href="index3.html" class="brand-link">
       {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
       <span>Company Name</span>
    </a>

@if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="pull-left image">
                <img src="admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p style="color:white">Super Admin</p>
                <div class="" aria-labelledby="">
                    <a class="" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div> {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a>  --}}

            </div>

        </div>




        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="/lead-introducers" class="nav-link">
                        <i class="nav-icon fas fa-industry"></i>
                        <p>
                           Lead Introducers
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="/creditors" class="nav-link">
                        <i class="nav-icon fas fa-calculator"></i>
                        <p>
                           Creditors
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="/super-agents" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                           Super Agents
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="/customers" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                           Cutomers
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="/reports" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                           Reports
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="/payments" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>
                           Payments
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link active">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Active Page</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Inactive Page</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    </ul>
{{--            </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Simple Link--}}
{{--                            <span class="right badge badge-danger">New</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--        </ul>--}}
        </nav>
        <!-- /.sidebar-menu -->
    </div>

@endif

@if(\Illuminate\Support\Facades\Auth::user()->role_id == 2)
    <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="pull-left image">
                    <img src="admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p style="color:white">Lead Introducer</p>
                    <div class="" aria-labelledby="">
                        <a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div> {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a>  --}}

                </div>

            </div>




            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="/agent" class="nav-link">
                            <i class="nav-icon fas fa-industry"></i>
                            <p>
                                Agents
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="/" class="nav-link">
                            <i class="nav-icon fas fa-calculator"></i>
                            <p>
                                Customers
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview menu-open">
                        <a href="/" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Reports
                            </p>
                        </a>
                    </li>

                </ul>
                <ul class="nav nav-treeview">
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a href="#" class="nav-link active">--}}
                    {{--                                <i class="far fa-circle nav-icon"></i>--}}
                    {{--                                <p>Active Page</p>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a href="#" class="nav-link">--}}
                    {{--                                <i class="far fa-circle nav-icon"></i>--}}
                    {{--                                <p>Inactive Page</p>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                </ul>
                {{--            </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="#" class="nav-link">--}}
                {{--                        <i class="nav-icon fas fa-th"></i>--}}
                {{--                        <p>--}}
                {{--                            Simple Link--}}
                {{--                            <span class="right badge badge-danger">New</span>--}}
                {{--                        </p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--        </ul>--}}
            </nav>
            <!-- /.sidebar-menu -->
        </div>

@endif

@if(\Illuminate\Support\Facades\Auth::user()->role_id == 4)
    <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="pull-left image">
                    <img src="admin-lte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p style="color:white">Agent</p>
                    <div class="" aria-labelledby="">
                        <a class="" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div> {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a>  --}}

                </div>

            </div>




            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview menu-open">
                        <a href="/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview menu-open">
                        <a href="/customers" class="nav-link">
                            <i class="nav-icon fas fa-calculator"></i>
                            <p>
                                Customers
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview menu-open">
                        <a href="/" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Reports
                            </p>
                        </a>
                    </li>

                </ul>
                <ul class="nav nav-treeview">
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a href="#" class="nav-link active">--}}
                    {{--                                <i class="far fa-circle nav-icon"></i>--}}
                    {{--                                <p>Active Page</p>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a href="#" class="nav-link">--}}
                    {{--                                <i class="far fa-circle nav-icon"></i>--}}
                    {{--                                <p>Inactive Page</p>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                </ul>
                {{--            </li>--}}
                {{--                <li class="nav-item">--}}
                {{--                    <a href="#" class="nav-link">--}}
                {{--                        <i class="nav-icon fas fa-th"></i>--}}
                {{--                        <p>--}}
                {{--                            Simple Link--}}
                {{--                            <span class="right badge badge-danger">New</span>--}}
                {{--                        </p>--}}
                {{--                    </a>--}}
                {{--                </li>--}}
                {{--        </ul>--}}
            </nav>
            <!-- /.sidebar-menu -->
        </div>

@endif
<!-- /.sidebar -->
</aside>
