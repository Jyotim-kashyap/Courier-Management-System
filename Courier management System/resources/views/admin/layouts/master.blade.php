<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Courier | @yield('title')</title>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ adminAsset('plugins/fontawesome-free/css/all.min.css') }} ">
  {{-- <link rel="stylesheet" href="{{ adminAsset('datatables/dataTables.bootstrap4.min.css') }} "> --}}
  <link rel="stylesheet" href="{{ adminAsset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ adminAsset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ adminAsset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  
  
  <link rel="stylesheet" href="{{ adminAsset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  
  @stack('css')
  <!--  -->
  <link rel="stylesheet" href="{{ adminAsset('dist/css/adminlte.min.css') }}">
  @livewireStyles
  @livewireScripts
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site  -->
<div class="wrapper">
  @include('admin.layouts.inc.navbar')
  @include('admin.layouts.inc.sidebar')
  
  <!-- Content-->
  <div class="content-wrapper">
    
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
          @if (!Request::is('admin/dashboard/'))
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}} ">Home</a></li>
              <li class="breadcrumb-item">@yield('title')</li>
            </ol>
          </div>
          @endif
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          @yield('content')
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@stack('js')


<script src="{{ adminAsset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ adminAsset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ adminAsset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ adminAsset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ adminAsset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ adminAsset('plugins/datatables/jquery.dataTables.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ adminAsset('dist/js/adminlte.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ adminAsset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ adminAsset('dist/js/demo.js') }}"></script> --}}
</body>
</html>
