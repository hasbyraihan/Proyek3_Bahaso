<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CiVi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ url('') }}/bg-ryanda.png" alt="AdminLTELogo" height="300" width="300">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="/logout">
          <i class="far fa-bell"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="cursor:none;">
        <img src="{{ url('') }}/bg-ryanda.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" height="300" width="300">
      <span class="brand-text font-weight-light">CiVi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('') }}/dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->nama_users }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pengangguran" class="nav-link {{ Request::is('pengangguran') ? 'active' : ''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Pengangguran
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pendidikan" class="nav-link {{ Request::is('pendidikan') ? 'active' : ''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Riwayat Pendidikan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/portofolios" class="nav-link {{ Request::is('portofolio') ? 'active' : ''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Portofolio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pekerjaan" class="nav-link {{ Request::is('pekerjaan') ? 'active' : ''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Riwayat Pekerjaan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/skill" class="nav-link {{ Request::is('skill') ? 'active' : ''}}">
              <i class="nav-icon far fa-image"></i>
              <p>
                Skill
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
    @yield('konten')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">CiVi.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ url('') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ url('') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ url('') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('') }}/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ url('') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ url('') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ url('') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ url('') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="{{ url('') }}/plugins/chart.js/Chart.min.js"></script>
</body>
</html>
