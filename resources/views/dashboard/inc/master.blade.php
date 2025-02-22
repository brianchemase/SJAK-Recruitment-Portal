<!DOCTYPE html>
<html lang="en">
  <!-- {{asset('dashboard/')}} -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dash one Templete')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('dash1/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash1/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('dash1/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('dash1/assets/images/favicon.ico')}}" />

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
      @include('dashboard.inc.header')
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('dashboard.inc.sidebar')
       
        <!-- partial -->
        <div class="main-panel">
        @yield('content')
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('dashboard.inc.footer')
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script type="text/javascript">
      new DataTable('#example');
    </script>
    <script src="{{asset('dash1/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('dash1/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('dash1/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('dash1/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('dash1/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('dash1/assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('dash1/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('dash1/assets/js/todolist.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>