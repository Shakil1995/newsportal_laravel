<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dhakatia News | Dashboard</title>
<meta name="csrf-token" content="{{csrf_token()}}" >
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('public/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('public/admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('public/admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('public/admin/plugins/summernote/summernote-bs4.min.css')}}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
   <link rel="stylesheet" href="{{asset('public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

   <link rel="stylesheet" href="{{asset('public/admin/plugins/toaster/toastr.css')}}">
   <link rel="stylesheet" href="{{asset('public/admin/plugins/bootstrap-sweetalert/dist/sweetalert.css')}}">
</head>
<body >



@guest
  @else
<div class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">



  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('public/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('public/admin/dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('public/admin/dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('public/admin/dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
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
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large">
          </i>        
        </a>
    

        
      </li>
   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('public/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Dhakatia News</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{route('home')}}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('home')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>  Dashboard </p>
            </a>
         
          </li>
        @if(Auth::user()->categorie==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Categories
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('categories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('subcategories')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Subcategory</p>
                </a>
              </li>
              
              
                    
            </ul>
          </li>
          @endif

          @if(Auth::user()->districts==1)
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Districts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('district')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> District</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('subdistrict')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> SubDistrict</p>
                </a>
              </li>
              
         
            </ul>
          </li>
          @endif
          @if(Auth::user()->post==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Post
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('posts')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Post</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('all_posts')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> All Post</p>
                </a>
              </li>

              
              
         
            </ul>
          </li>
          @endif
          @if(Auth::user()->setting==1)

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('seo.setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Seo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('social.setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Social </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('prayer.setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Prayer Time </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('liveTv.setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Live Tv </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('notice.setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Notice </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('important_website.setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Importent Website </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('website.setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  Website  Setting</p>
                </a>
              </li>
         
            </ul>
          </li>

          @endif
          @if(Auth::user()->gallery==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('photos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Photo Gallery</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('videos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Video Gallery</p>
                </a>
              </li>

              
              
         
            </ul>
          </li>
          @endif
          @if(Auth::user()->ads==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Ads
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('all.ads')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  Ads </p>
                </a>
              </li>
            
            </ul>
          </li>

          @endif
          @if(Auth::user()->user_role==1)
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Role
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('add.writer')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  Add Writer </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('all.ads')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  All Writer </p>
                </a>
              </li>
            
            </ul>
          </li>
          @endif

          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="{{route('user.logout')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logut</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>

@endguest

  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
@yield('content')
  
  </div>







  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('public/admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('public/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('public/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('public/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('public/admin/dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/admin/dist/js/pages/dashboard.js')}}"></script>
{{-- <script src="{{asset('public/admindist/js/demo.js')}}"></script> --}}
<script src="{{asset('public/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
{{-- <script src="{{asset('public/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> --}}
<script  src="{{asset('public/admin/plugins/toaster/toastr.min.js')}}"></script>
<script  src="{{asset('public/admin/plugins/bootstrap-sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
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


<script>
  @if(Session::has('messege'))
       var type="{{Session::get('alert-type','info')}}"
       switch(type){
           case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
           case 'success':
               toastr.success("{{ Session::get('messege') }}");
               break;
           case 'warning':
              toastr.warning("{{ Session::get('messege') }}");
               break;
           case 'error':
               toastr.error("{{ Session::get('messege') }}");
               break;
       }
     @endif
</script>

 <script>
         $(document).on("click", "#delete", function(e){
             e.preventDefault();
              var link = $(this).attr("href");
              swal({
               title: "Are you sure?",
               text: "You will not be able to recover this imaginary file!",
               type: "warning",
               showCancelButton: true,
               confirmButtonClass: "btn-danger",
               confirmButtonText: "Yes, delete it!",
               cancelButtonText: "No, cancel!",
             },
             function(isConfirm) {
               if (isConfirm) {
                 swal("Deleted!", "Your imaginary file has been deleted.", "success");
                 window.location.href = link;
               } else {
                 swal("Cancelled", "Your imaginary file is safe :)", "error");
               }
             });
            });
    </script>

</body>
</html>
