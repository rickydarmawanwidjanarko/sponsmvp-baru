<?= $this->extend('siswa/template'); ?>
<?= $this->section('content'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h1>Persyaratan Pendaftaran</h1>
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
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 ">
                            <h2>Upload File</h2>
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
<?= $this->endSection(); ?>