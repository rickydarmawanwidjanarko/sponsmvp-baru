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

<body class="col-sm-12">
    <!-- Content Wrapper. Contains page content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>List Sekolah</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <?php
        // echo "<pre>"; 
        // print_r($schools);
        // die;
        ?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="row row-offcanvas row-offcanvas-right">

                        <div class="col-sm-9">

                            <div class="jumbotron">
                                <h1><?= $school['nama'] ?></h1>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <h2>Detail</h2>
                                    <p><?= $school['detail'] ?></p>
                                </div>
                            </div>
                            <br>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Kontak</h2>
                                        <p><?= $school['no_telp'] ?></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <h2>Email</h2>
                                        <p><?= $school['email'] ?></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <h2>Alamat</h2>
                                        <p><?= $school['alamat'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <a href="/Admin/change">
                                <button class="btn btn-warning" style="color:white">Edit profile</button>
                            </a>
                            <br>
                            <br>
                            <!--/row-->
                        </div>
                        <!--/span-->

                    </div>
                    <!--/row-->
                    <!-- ./col -->
                </div>
                <div class="row">

                    <?php foreach ($gelombangs as $gelombang) : ?>
                        <div class="col-4" style="padding: 10px">
                            <div class="card mb-3 ">
                                <div class="card-body">
                                    <h4 class="card-title"><b><?= $gelombang['nama'] ?></b></h4>
                                    <p class="card-text"><?= date('d M Y', strtotime($gelombang['tglawal'])) . ' - ' . date('d M Y', strtotime($gelombang['tglakhir'])) ?></p>
                                    <p class="card-text"><small class="text-muted"><?= $gelombang['detail'] ?></small></p>
                                    <a href="/Siswa/gelombang/<?= $gelombang['id'] ?>">
                                        <button class="btn btn-info">Lihat Detail</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



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