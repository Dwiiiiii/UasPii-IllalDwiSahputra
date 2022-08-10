<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin Page | <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url('plugins/images/favicon.png')); ?>">
    <!-- Custom CSS -->
    <link href="<?php echo e(url('plugins/bower_components/chartist/dist/chartist.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet"
        href="<?php echo e(url('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')); ?>">
    <!-- Custom CSS -->
    <link href="<?php echo e(url('css/style.min.css')); ?>" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?php echo e(url('/dashboard')); ?>">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src=""  />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <span class="text-white font-medium">Hi, <?php echo e(Auth::user()->name); ?></span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link 
                            <?php if(Request::is('dashboard')): ?> active <?php endif; ?>
                            "
                                href="<?php echo e(url('/dashboard')); ?>" aria-expanded="false">
                                <i class="far fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        
                    <?php if(Auth::user()->role== 'admin'): ?>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link 
                             <?php if(Request::is('mahasiswa*')): ?> active <?php endif; ?>"
                                href="<?php echo e(url('/mahasiswa')); ?>" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Mahasiswa</span>
                            </a>
                        </li>
                           <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link  <?php if(Request::is('dosen*')): ?> active <?php endif; ?>"
                                href="<?php echo e(url('/dosen')); ?>" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Dosen</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link  <?php if(Request::is('matakuliah*')): ?> active <?php endif; ?>"
                                href="<?php echo e(url('/matakuliah')); ?>" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Matakuliah</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link  <?php if(Request::is('semester*')): ?> active <?php endif; ?>"
                                href="<?php echo e(url('/semester')); ?>" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Semester</span>
                            </a>
                        </li>
                      
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link  <?php if(Request::is('jadwal*')): ?> active <?php endif; ?>"
                                href="<?php echo e(url('/jadwal')); ?>" aria-expanded="false">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span class="hide-menu">jadwal</span>
                            </a>
                        </li>
                      
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link  <?php if(Request::is('kontrakmatakuliah*')): ?> active <?php endif; ?>"
                                href="<?php echo e(url('/kontrakmatakuliah')); ?>" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">kontrakmatakuliah</span>
                            </a>
                        </li>
                      
                    <?php elseif(Auth::user()->role == 'dosen'): ?>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link  <?php if(Request::is('absen*')): ?> active <?php endif; ?>"
                                href="<?php echo e(url('/absen')); ?>" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Absen</span>
                            </a>
                        </li> 
                    <?php endif; ?>
                        <li class="text-center p-20 upgrade-btn">
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>

                                <a class="btn btn-danger" href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <?php echo e(__('Log Out')); ?>

                                    <a>
                            </form>
                        </li>
                    </ul>


                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="">
                        <h4 class="page-title"><?php echo $__env->yieldContent('pagetitle'); ?></h4>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Main Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <?php echo $__env->yieldContent('container'); ?>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center"> 2022 ©
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="<?php echo e(url('plugins/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?php echo e(url('bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(url('js/app-style-switcher.js')); ?>"></script>
        <script src="<?php echo e(url('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')); ?>"></script>
        <!--Wave Effects -->
        <script src="<?php echo e(url('js/waves.js')); ?>"></script>
        <!--Menu sidebar -->
        <script src="<?php echo e(url('js/sidebarmenu.js')); ?>"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo e(url('js/custom.js')); ?>"></script>
        <!--This page JavaScript -->
        <!--chartis chart-->
        <script src="<?php echo e(url('plugins/bower_components/chartist/dist/chartist.min.js')); ?>"></script>
        <script src="<?php echo e(url('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')); ?>">
        </script>
        <script src="<?php echo e(url('js/pages/dashboards/dashboard1.js')); ?>"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>
<?php /**PATH C:\xampp2\htdocs\UAS-Illaldwisahputra\resources\views////layouts/mainapp.blade.php ENDPATH**/ ?>