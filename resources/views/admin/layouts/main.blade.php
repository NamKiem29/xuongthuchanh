<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/Admin/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/Admin/favicon.png') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @stack('style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
<!-- ---------------------------------Sidebar------------------------------------- -->
            @include('admin.layouts.partials.sidebar')
<!-- ---------------------------------End sidebar------------------------------------- -->
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
<!-- partial:partials/_navbar.html -->
<!-- ----------------------------------Header------------------------------------- -->
            @include('admin.layouts.partials.header')
<!-- ---------------------------------End Header------------------------------------- -->
        <!-- partial -->
        <div class="main-panel">
<!-- ----------------------------------Content------------------------------------- -->
            @yield('content')
<!-- ----------------------------------Content------------------------------------- -->
          <!-- content-wrapper ends -->
<!-- ---------------------------------Footer-------------------------------------- -->
            @include('admin.layouts.partials.footer')
<!-- ----------------------------------End footer------------------------------------- -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/Admin/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/Admin/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/Admin/misc.js') }}"></script>
    <script src="{{ asset('assets/js/Admin/settings.js') }}"></script>
    <script src="{{ asset('assets/js/Admin/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/Admin/file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/Admin/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/Admin/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
  </body>
</html>