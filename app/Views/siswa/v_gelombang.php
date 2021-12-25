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
        // print_r($gelombangs);
        // die;
        ?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="row row-offcanvas row-offcanvas-right" style="width: 100%;">

                        <div class="col-9">

                            <div class="jumbotron">
                                <h1><?= $gelombang['nama'] ?></h1>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <h2>Detail</h2>
                                    <p><?= $gelombang['detail'] ?></p>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 ">
                                    <h2>Detail</h2>
                                    <p><?= $gelombang['persyaratan'] ?></p>
                                </div>
                            </div>
                            <?php if (empty($pendaftaran)) : ?>
                                <form action="/Siswa/pendaftaran" method="post" enctype="multipart/form-data">
                                    <input type="hidden" id="idgelombang" name="idgelombang" value="<?= $gelombang['id'] ?>">
                                    <input type="file" id="dokumen" name="dokumen" class="form-control">
                                    <br>
                                    <button type="submit" class="btn btn-info form-group" style="color:white">Daftar</button>
                                </form>
                            <?php elseif ($pendaftaran['status'] == '0') : ?>
                                <button class="btn btn-info"> Pendaftaran telah diajukan</button>
                            <?php elseif ($pendaftaran['status'] == '1') :  ?>
                                <button class="btn btn-success"> Anda telah diterima</button>
                            <?php elseif ($pendaftaran['status'] == '2') :  ?>
                                <button class="btn btn-danger"> Anda ditolak</button>
                            <?php endif; ?>
                            <br>
                            <br>
                            <!--/row-->
                        </div>
                        <!--/span-->

                    </div>
                    <!--/row-->
                    <!-- ./col -->
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