<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url() ?>/kemkes.png">
    <title>Aplikasi Surat Masuk | Kemenkes</title>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" integrity="sha512-k6/Bkb8Fxf/c1Tkyl39yJwcOZ1P4cRrJu77p83zJjN2Z55prbFHxPs9vN7q3l3+tSMGPDdoH51AEU8Vgo1cgAA==" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" integrity="sha512-3JRrEUwaCkFUBLK1N8HehwQgu8e23jTH4np5NHOmQOobuC4ROQxFwFgBLTnhcnQRMs84muMh0PnnwXlPq5MGjg==" crossorigin="anonymous" /> -->

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/dist/css/bootstrap.min.css"> -->

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
    <!-- JQVMap -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/plugins/jqvmap/jqvmap.min.css"> -->
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.css"> -->

    <link rel="stylesheet" href="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- jQuery -->
    <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Sweetalert -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.min.css">
    <script src="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.all.min.js"></script>



</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
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


                <!-- Messages Dropdown Menu -->

                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= site_url('main'); ?>" class="brand-link">
                <img src="<?= base_url() ?>/kemkes.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Mails Receipt App</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?= session()->namauser; ?>
                        </a>
                    </div>
                </div> -->

                <!-- SidebarSearch Form -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                        <li class="nav-header">Menu Utama</li>

                        <li class="nav-item">
                            <a href="<?= site_url('input'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-pen text-warning"></i>
                                <p class="text">Input Surat Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('daftarnew'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-tasks text-primary"></i>
                                <p class="text">Daftar Surat Masuk</p>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="<?= site_url('cetak_laporan'); ?>" class="nav-link">
                                <marquee>
                                    <i class="nav-icon fa fa-book text-secondary"></i>
                                    <p class="text">Under Construction</p>
                                </marquee>
                            </a>
                        </li> -->

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Master
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('expedisi'); ?>" class="nav-link">
                                        <i class="nav-icon fa fa-truck text-info"></i>
                                        <p class="text">Expedisi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('penerima'); ?>" class="nav-link">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p class="text">Petugas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <!-- <li class="nav-header">Master</li>
                        <li class="nav-item">
                            <a href="<?= site_url('master'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-database text-danger"></i>
                                <p class="text">Master</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url(''); ?>" class="nav-link">
                                <i class="nav-icon fa fa-truck text-info"></i>
                                <p class="text">Expedisi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('statistik'); ?>" class="nav-link">
                                <i class="fas fa-chart-bar"></i>
                                <p class="text">Petugas</p>
                            </a>
                        </li> -->


                        <!-- 


                        <li class="nav-item">
                            <a href="<?= site_url('barangkeluar/data'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-arrow-circle-up text-warning"></i>
                                <p class="text">Barang Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('laporan/index'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-file text-primary"></i>
                                <p class="text">Laporan</p>
                            </a>
                        </li>
                        <li class="nav-header">Utility</li>
                        <li class="nav-item">
                            <a href="<?= site_url('utility/index'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-database text-warning"></i>
                                <p class="text">Backup DB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('users/index'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-users text-danger"></i>
                                <p class="text">Management User</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?= site_url('utility/gantipassword'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-lock text-white"></i>
                                <p class="text">Ganti Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('login/keluar'); ?>" class="nav-link">
                                <i class="nav-icon fa fa-sign-out-alt text-danger"></i>
                                <p class="text">Logout</p>
                            </a>
                        </li> -->




                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>

            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>
                                <?= $this->renderSection('judul') ?>
                            </h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            <?= $this->renderSection('subjudul') ?>
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?= $this->renderSection('isi') ?>
                    </div>
                </div>

            </section>


        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2023</a>.</strong> Kemenkes RI.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <!-- <script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script> -->
    <!-- jQuery UI 1.11.4 -->
    <!-- <script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script> -->

    <!-- ChartJS -->
    <script src="<?= base_url() ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <!-- <script src="<?= base_url() ?>/plugins/sparklines/sparkline.js"></script> -->
    <!-- JQVMap -->
    <!-- <script src="<?= base_url() ?>/plugins/jqvmap/jquery.vmap.min.js"></script> -->
    <!-- <script src="<?= base_url() ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <!-- <script src="<?= base_url() ?>/plugins/jquery-knob/jquery.knob.min.js"></script> -->
    <!-- daterangepicker -->
    <script src="<?= base_url() ?>/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url() ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <!-- <script src="<?= base_url() ?>/plugins/summernote/summernote-bs4.min.js"></script> -->
    <!-- overlayScrollbars -->
    <!-- <script src="<?= base_url() ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?= base_url() ?>/dist/js/pages/dashboard.js"></script> -->


    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/dist/js/demo.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>





</body>

</html>