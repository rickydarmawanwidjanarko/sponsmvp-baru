<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <!-- <h1 class="m-0">Data Sekolah</h1> -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="row row-offcanvas row-offcanvas-right">

                <div class="col-xs-12 col-sm-1"></div>
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
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endSection(); ?>