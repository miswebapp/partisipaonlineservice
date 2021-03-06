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

  <title>Field Reporting System</title>

  <script src="{{ asset('js/app.js') }}"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href=" {{route('admin.frs.index')}} " class="nav-link">Home</a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> --}}

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/avatar5.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
    <img src="{{ asset('/images/partisipa.png')}}" alt="Program Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
          <span class="brand-text font-weight-light">PARTISIPA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/images/vendor/admin-lte/avatar5.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">   
          <a href=" {{route('admin.frs.index')}} " class="nav-link">
              <p>Home<i class="right fa fa-home"></i></p>
            </a>
          </li>  
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fa fa-tachometer-alt"></i> --}}
              <p>Management<i class="right fa fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{ route('admin.frs.users.index') }}" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.frs.teams.index') }}" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Teams</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.frs.programs.index') }}" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Programs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.frs.activities.index') }}" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Activities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.frs.projects.index') }}" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  {{-- <i class="fa fa-circle nav-icon"></i> --}}
                  <p>Weaknesses<i class="right fa fa-angle-left"></i></p>
                </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('admin.frs.weaknesses.index') }}" class="nav-link">
                          <i class="fa fa-angle-right nav-icon"></i>
                          <p>Type</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('admin.frs.weaknessescategories.index') }}" class="nav-link">
                          <i class="fa fa-angle-right nav-icon"></i>
                          <p>Category</p>
                        </a>
                      </li>
                  </ul>
              </li> 
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  {{-- <i class="fa fa-circle nav-icon"></i> --}}
                  <p>Monitoring<i class="right fa fa-angle-left"></i></p>
                </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('admin.frs.monitoringtools.index') }}" class="nav-link">
                          <i class="fa fa-angle-right nav-icon"></i>
                          <p>Tools</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('admin.frs.monitoringratings.index') }}" class="nav-link">
                          <i class="fa fa-angle-right nav-icon"></i>
                          <p>Rating</p>
                        </a>
                      </li>
                  </ul>
              </li> 
              <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    {{-- <i class="fa fa-circle nav-icon"></i> --}}
                    <p>Counterparts<i class="right fa fa-angle-left"></i></p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ route('admin.frs.counterparts.index') }}" class="nav-link">
                          <i class="fa fa-angle-right nav-icon"></i>
                          <p>Counterparts</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('admin.frs.institutions.index') }}" class="nav-link">
                          <i class="fa fa-angle-right nav-icon"></i>
                          <p>Institutions</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('admin.frs.positions.index') }}" class="nav-link">
                          <i class="fa fa-angle-right nav-icon"></i>
                          <p>Position</p>
                        </a>
                      </li>
                  </ul>
              </li>              
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fa fa-tachometer-alt"></i> --}}
              <p>Reports<i class="right fa fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{route('module.frs.submissions.index')}}" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>My Submission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>List Team Submission</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle nav-icon"></i>
                  <p>Generate</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark">{{ $maintitle }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div id="app"></div>
          @yield('content')
        </div>
      </div><!-- /.container-fluid -->
    </div>
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

</body>
</html>
