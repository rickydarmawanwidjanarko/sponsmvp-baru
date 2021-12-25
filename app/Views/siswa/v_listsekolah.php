<?= $this->extend('siswa/template'); ?>
<?= $this->section('content'); ?> <div class="content">
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
    ?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($schools as $school) : ?>
                    <div class="col-sm-6">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="/img/sekolah/<?= $school['logo'] ?>" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center"><?= $school['nama'] ?></h3>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Alamat</b> <br><a class=""><?= $school['alamat'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Kota</b> <br><a class=""><?= $school['kota'] ?></a>
                                    </li>
                                    <!-- <li class="list-group-item">
                                        <b>Gelombang</b> <a class="float-right">gelombang</a>
                                    </li> -->
                                </ul>

                                <a href="/Siswa/datasekolah/<?= $school['id'] ?>" class="btn btn-primary btn-block"><b>Detail</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                <?php endforeach; ?>


            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
<?= $this->endSection(); ?>