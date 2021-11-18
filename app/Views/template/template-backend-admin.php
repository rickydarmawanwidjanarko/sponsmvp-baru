<?php

$db = \Config\Database::connect();

$setting = $db->table('tbl_setting')
    ->where('id', '1')
    ->get()->getRowArray();

$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> <?= $title ?> | <?= $subtitle ?></title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/AdminLTE/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <h3>Halaman <?= session()->get('nama_user') ?></h3>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Auth/logout') ?>"><i class="fa fa-lock"></i> Logout</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('admin') ?>" class="brand-link">
                <img src="<?= base_url() ?>/logo/logo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">PPBD Online</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>/foto/blank.jpg" <?= session()->get('foto') ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <p class="text-white"><?= session()->get('nama_user') ?></p>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <!-- Super User -->
                        <?php if (session()->get('nama_user') == 'Admin') { ?>
                            <li class="nav-item has-treeview">
                                <a href="<?= base_url('Admin') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-database"></i>
                                    <p>
                                        Master Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('jurusan') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-people-arrows"></i>
                                            <p>Jurusan</p>
                                        </a>
                                    </li>


                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('lampiran') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-file"></i>
                                            <p>Berkas Administrasi</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('pekerjaan') ?>" class="nav-link">
                                            <i class="nav-icon fa fa-suitcase"></i>
                                            <p>Pekerjaan</p>
                                        </a>
                                    </li>


                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('agama') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-book"></i>
                                            <p>Agama</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('kuisioner') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-book"></i>
                                            <p>Kuisioner</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('penghasilan') ?>" class="nav-link">
                                            <i class="nav-icon fa fa-money-bill-wave"></i>
                                            <p>Penghasilan</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('user') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>User</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Pendaftaran
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('PendaftaranSiswa/listMasuk') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-download text-primary"></i>
                                            <p>List Masuk</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('PendaftaranSiswa') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-download text-primary"></i>
                                            <p>Masuk</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('PendaftaranSiswa/listDiterima') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-check text-success"></i>
                                            <p>Diterima</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('pendaftaransiswa/listDitolak') ?>" class="nav-link">
                                            <i class="nav-icon fa fa-times text-danger"></i>
                                            <p>Ditolak</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('pendaftaransiswa/laporan') ?>" class="nav-link">
                                    <i class="nav-icon far fa-clipboard"></i>
                                    <p>Laporan</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-cogs"></i>
                                    <p>
                                        Setup
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('ta') ?>" class="nav-link">
                                            <i class="nav-icon fa fa-calendar"></i>
                                            <p>Tahun Ajaran</p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('Potongan') ?>" class="nav-link">
                                            <i class="nav-icon fa fa-money-bill-alt"></i>
                                            <p>Potongan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('JalurMasuk') ?>" class="nav-link">
                                            <i class="nav-icon fa fa-sitemap"></i>
                                            <p>Jalur Masuk</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('admin/setting') ?>" class="nav-link">
                                            <i class="fas fa-globe nav-icon"></i>
                                            <p>Set Web</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('baner') ?>" class="nav-link">
                                            <i class="fas fa-image nav-icon"></i>
                                            <p>Set Banner</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('Admin/beranda') ?>" class="nav-link">
                                            <i class="fas fa-image nav-icon"></i>
                                            <p>Set Beranda</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('Petunjuk/petunjukDaftar') ?>" class="nav-link">
                                            <i class="fas fa-image nav-icon"></i>
                                            <p>Set Petunjuk</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                        <!-- user Marketing -->
                        <?php if (session()->get('nama_user') == 'Marketing') { ?>
                            <li class="nav-item has-treeview">
                                <a href="<?= base_url('Admin') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Pendaftaran
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('PendaftaranSiswa/listMasuk') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-download text-primary"></i>
                                            <p>List Masuk</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('PendaftaranSiswa') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-download text-primary"></i>
                                            <p>Masuk</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('PendaftaranSiswa/listDiterima') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-check text-success"></i>
                                            <p>Diterima</p>
                                        </a>
                                    </li>

                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('pendaftaransiswa/listDitolak') ?>" class="nav-link">
                                            <i class="nav-icon fa fa-times text-danger"></i>
                                            <p>Ditolak</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('pendaftaransiswa/laporan') ?>" class="nav-link">
                                    <i class="nav-icon far fa-clipboard"></i>
                                    <p>Laporan</p>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- user Keuangan -->
                        <?php if (session()->get('nama_user') == 'Keuangan') { ?>
                            <li class="nav-item has-treeview">
                                <a href="<?= base_url('Admin') ?>" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Keuangan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">


                                    <li class="nav-item has-treeview">
                                        <a href="<?= base_url('PendaftaranSiswa/listMasukKeuangan') ?>" class="nav-link">
                                            <i class="nav-icon fas fa-check text-success"></i>
                                            <p>List Siswa</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="<?= base_url('pendaftaransiswa/laporankeuangan') ?>" class="nav-link">
                                    <i class="nav-icon far fa-clipboard"></i>
                                    <p>Laporan</p>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= $subtitle ?></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <?= $this->renderSection('content') ?>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline"></div>
            <!-- Default to the left -->
            <strong>Copyright &copy; <?= date('Y') ?> <a href="#"><?= $setting['nama_sekolah'] ?></a></strong>
        </footer>
    </div>

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/chart.js/Chart.min.js"></script>

    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        window.setTimeout(function() {
            $('.alert').fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 1000);
    </script>

    <script>
        function bacaGambar(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#gambar_load').attr('src', e.target.result)
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#preview_gambar').change(function() {
            bacaGambar(this);
        });
    </script>

    <script>
        $(function() {
            $('#summernote').summernote()
        })
    </script>

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": [{
                    "extend": 'excel',
                    "text": 'Excel',
                    "exportOptions": {
                        "columns": ':not(.notexport)'
                    }
                }, {
                    "extend": 'pdf',
                    "text": 'Pdf',
                    "exportOptions": {
                        "columns": ':not(.notexport)'
                    }
                }, {
                    "extend": 'print',
                    "text": 'Print',
                    "exportOptions": {
                        "columns": ':not(.notexport)'
                    }
                }, ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>