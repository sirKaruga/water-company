<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Water Ambassador</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.ico" />

  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css"/>
{{-- my additionals --}}

<!-- Include stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />


</head>
<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-brand-wrapper d-flex justify-content-center">
    <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
      <a class="navbar-brand brand-logo" href="index.html"><img src="../../../assets/images/logo.svg"
          alt="logo" /></a>
      <a class="navbar-brand brand-logo-white" href="index.html"><img src="../../../assets/images/logo-white.svg"
          alt="logo" /></a>
      <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../../../assets/images/logo-mini.svg"
          alt="logo" /></a>
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-sort-variant"></span>
      </button>
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <!-- <ul class="navbar-nav me-lg-4 w-100">
      <li class="nav-item nav-search d-none d-lg-block w-100">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="search">
              <i class="mdi mdi-magnify"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Search now" aria-label="search"
            aria-describedby="search">
        </div>
      </li>
    </ul> -->
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown me-1">
        <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center"
          id="messageDropdown" href="#" data-bs-toggle="dropdown">
          <i class="mdi mdi-message-text mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="../../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
            </div>
            <div class="preview-item-content flex-grow">
              <h6 class="preview-subject ellipsis font-weight-normal">David Grey
              </h6>
              <p class="font-weight-light small-text text-muted mb-0">
                The meeting is cancelled
              </p>
            </div>
          </a>

        </div>
      </li>
      <li class="nav-item dropdown me-4">
        <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown"
          id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="mdi mdi-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
          aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="mdi mdi-information mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Just now
              </p>
            </div>
          </a>

        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="../../../assets/images/face5.png" alt="profile" />
          <span class="nav-profile-name">{{@$user->name}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

          <a class="dropdown-item" href="{{route('logout')}}">
            <i class="mdi mdi-logout text-primary"></i>
            Logout
          </a>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="mdi mdi-apps"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin')}}">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('services')}}">
        <i class="fa fa-codepen menu-icon"></i></i>
        <span class="menu-title">Company Services</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.blog')}}">
        <i class="fa fa-send menu-icon"></i>
        <span class="menu-title">Blog Posts</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.projects')}}">
        <i class="fa fa-rocket menu-icon"></i>
        <span class="menu-title">Projects</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.products')}}">
        <i class="fa fa-list-alt menu-icon"></i>
        <span class="menu-title">Our Products</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('careers')}}">
        <i class="fa fa-suitcase menu-icon"></i>
        <span class="menu-title">Careers</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('users')}}">
        <i class="mdi mdi-account menu-icon"></i>
        <span class="menu-title">System Users</span>
      </a>
    </li>



  </ul>
</nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">


 @yield('analytics')


         @yield('content_place')


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a
        href="https://www.wateramba.com/" target="_blank">Water Ambassador Company Limited</a>. All rights reserved.</span>
    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
        class="mdi mdi-heart text-danger"></i></span>
  </div>
</footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="assets/vendors/chart.js/chart.umd.js"></script>
  <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/proBanner.js"></script>

  <!-- End custom js for this page-->
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
@yield('scripts')

</body>

</html>
