<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Личная страница</title>
  <base href="{{asset('/')}}">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Preloader -->
  

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
      <form class="btn btn-sm btn-outline-secondary" method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Выйти') }}
                            </x-dropdown-link>
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

      <!-- Sidebar Menu -->
      @include('personal.layouts.sidebar')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <section class="content">
        <div class="container-fluid">
            @yield('sidebar')
        </div>
    </section> 
    <section class="maincontent">
            @yield('content')
    </section> 


        
  
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
