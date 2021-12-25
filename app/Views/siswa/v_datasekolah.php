<?= $this->extend('siswa/template'); ?>
<?= $this->section('content'); ?>

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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row" style="width: 100%;">
                <div class="row" style="width: 100%">

                    <div class="col-sm-12">

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
</div>
<?= $this->endSection(); ?>