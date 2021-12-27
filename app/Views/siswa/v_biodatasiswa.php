<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | <?= $subtitle ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('') ?>/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('') ?>/AdminLTE/dist/css/adminlte.min.css">
</head>

<body class="col-md-12">
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>HALAMAN BIODATA</h1>
                    </div>
                    <div class="col-sm-12">

                    </div>
                </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Biodata Saya</h3>
                                <div class="card-tools">
                                    <a href="<?= base_url('Siswa/') ?>" class="btn btn-sm btn-primary btn-flat"><i class="fas fa-backward"> Kembali</i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Nama</strong>

                                <p class="text-muted">
                                    Nama Siswa
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Tanggal Lahir</strong>

                                <p class="text-muted">Tanggal lahir</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Alamat</strong>

                                <p class="text-muted"> Alamat Siswa</p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> No Telpon</strong>

                                <p class="text-muted">Nomor telpon siswa</p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Jenis Kelamin</strong>

                                <p class="text-muted">Jenis Kelamin</p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Email</strong>

                                <p class="text-muted">alamat email siswa</p>

                                <hr>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('') ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('') ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('') ?>/AdminLTE/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('') ?>/AdminLTE/dist/js/demo.js"></script>
</body>

</html>