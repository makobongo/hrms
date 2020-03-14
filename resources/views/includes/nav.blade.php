<nav class="main-header navbar navbar-expand navbar-white navbar-light mt-sm-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}&nbsp;<i class="fa fa-power-off"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="plugins/dist/img/placeholder.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <router-link to="/home" class="nav-link">
                        <i class="fa fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/employees" class="nav-link">
                        <i class="fa fa-users"></i>
                        <p>
                            Employees
                        </p>
                    </router-link>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <router-link to="/recruitment" class="nav-link">--}}
{{--                        <i class="fa fa-list-alt"></i>--}}
{{--                        <p>--}}
{{--                            Recruitment--}}
{{--                        </p>--}}
{{--                    </router-link>--}}
{{--                </li>--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-list-alt"></i>
                        <p>
                            Recruitment
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/applicants" class="nav-link">
                                <i class="fa fa-user-edit"></i>
                                <p>applicants</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/shortlisted" class="nav-link">
                                <i class="fa fa-eye"></i>
                                <p>shortlisted</p>
                            </router-link>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <router-link to="/benefits" class="nav-link">
                        <i class="fa fa-user-secret"></i>
                        <p>
                            Benefits
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/reporting" class="nav-link">
                        <i class="fa fa-envelope"></i>
                        <p>
                            Reporting
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/profile" class="nav-link">
                        <i class="fa fa-user-secret"></i>
                        <p>
                            Profile
                        </p>
                    </router-link>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i>
                        <p>
                            Logout
                        </p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
