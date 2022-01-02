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
            <div class="row col-sm-12">

                <div class="col-xs-12 col-sm-1"></div>
                <div class="col-sm-12">

                    <div class="jumbotron jumbotron-fluid">
                        <h1 class="display-4"> <?= $school['nama'] ?></h1>
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

                    <button class="btn btn-flat btn-warning btn-lg" data-toggle="modal" data-target="#edit"><i class="fas fa-edit"></i>Edit</button>

                    <br>
                    <br>
                    <!--/row-->
                </div>
                <!--/span-->

            </div>
            <!--/row-->
            <!-- ./col -->
        </div>

        <!-- Modal Edit -->

        <div class="modal fade" id="edit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Sekolah</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open_multipart('Admin/editData/') ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Sekolah</label>
                            <input name="nama_sekolah" value="<?= $school['nama'] ?>" class="form-control" placeholder="Nama Sekolah" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" value="<?= $school['email'] ?>" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <input name="detail" value="<?= $school['detail'] ?>" class="form-control" placeholder="Detail" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input name="alamat" value="<?= $school['alamat'] ?>" class="form-control" placeholder="Alamat" required>
                        </div>
                        <div class="form-group">
                            <label>No Telpon</label>
                            <input name="no_telp" value="<?= $school['no_telp'] ?>" class="form-control" placeholder="No Telpon" required>
                        </div>
                        <div class="form-group">
                            <label>Kota</label>
                            <input name="kota" value="<?= $school['kota'] ?>" class="form-control" placeholder="Kota" required>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img id="gambar_load" class="img-fluid pad" src="#" width="250px" height="250px">
                            </div>
                            <div class="from-group">
                                <br>
                                <label>Ganti Foto</label>
                                <input id="preview_gambar" name="logo" type="file" class="from-control" accept="image/*">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                    <?php echo form_close() ?>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endSection(); ?>