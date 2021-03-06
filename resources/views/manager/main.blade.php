<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PTS - Manager</title>

    <!-- Custom fonts for this template-->
    <link href="{{ secure_asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{ secure_asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ secure_asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for the table -->
    <link href="{{ secure_asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    {{-- icon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('images/apple-touch-icon.png')}}?v={{ date('YmdHis') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ secure_asset('images/favicon-32x32.png')}}?v={{ date('YmdHis') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('images/favicon-16x16.png')}}?v={{ date('YmdHis') }}">
    <link rel="manifest" href="{{ secure_asset('site.webmanifest')}}?v={{ date('YmdHis') }}">

    {{-- for locally --}}
    <!-- Custom fonts for this template-->
    {{-- <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet"> --}}

    <!-- Custom styles for this template-->
    {{-- <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet"> --}}

    <!-- Custom styles for the table -->
    {{-- <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet"> --}}

    {{-- icon --}}
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png')}}?v={{ date('YmdHis') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png')}}?v={{ date('YmdHis') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png')}}?v={{ date('YmdHis') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest')}}?v={{ date('YmdHis') }}"> --}}

</head>

<body id="page-top">

    @yield('content') 
                                
                                

   <!-- Bootstrap core JavaScript-->
   <script src="{{ secure_asset('vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

   <!-- Core plugin JavaScript-->
   <script src="{{ secure_asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

   <!-- Custom scripts for all pages-->
   <script src="{{ secure_asset('js/sb-admin-2.min.js')}}"></script>

   <!-- Page level plugins -->
   <script src="{{ secure_asset('vendor/chart.js/Chart.min.js')}}"></script>

   <!-- Page level custom scripts -->
   <script src="{{ secure_asset('js/demo/chart-area-demo.js')}}"></script>
   <script src="{{ secure_asset('js/demo/chart-pie-demo.js')}}"></script>
   
    <!-- Table level plugins -->
    <script src="{{ secure_asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ secure_asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Table level custom scripts -->
    <script src="{{ secure_asset('js/demo/datatables-demo.js')}}"></script>

    {{-- piechart --}}
    <script type="text/javascript" src="{{ secure_asset('https://www.gstatic.com/charts/loader.js')}}"></script>

     
    {{-- for locally --}}
 <!-- Bootstrap core JavaScript-->
 {{-- <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}

 <!-- Core plugin JavaScript-->
 {{-- <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script> --}}

 <!-- Custom scripts for all pages-->
 {{-- <script src="{{ asset('js/sb-admin-2.min.js')}}"></script> --}}

 <!-- Page level plugins -->
 {{-- <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script> --}}

 <!-- Page level custom scripts -->
 {{-- <script src="{{ asset('js/demo/chart-area-demo.js')}}"></script>
 <script src="{{ asset('js/demo/chart-pie-demo.js')}}"></script> --}}
 
  <!-- Table level plugins -->
  {{-- <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script> --}}

  <!-- Table level custom scripts -->
  {{-- <script src="{{ asset('js/demo/datatables-demo.js')}}"></script> --}}

  {{-- piechart --}}
  {{-- <script type="text/javascript" src="{{ asset('https://www.gstatic.com/charts/loader.js')}}"></script> --}}

</body>

</html>