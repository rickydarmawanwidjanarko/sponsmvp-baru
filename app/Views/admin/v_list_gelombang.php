<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Gelombang</h1>

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <table class="table">
            <thead class="table-dark table-sm">
                <tr>
                    <th width="70px">No</th>
                    <th>Nama</th>
                    <th>Tgl Awal</th>
                    <th>Tgl Akhir</th>
                    <th>Status</th>
                    <th width="100px">Aksi</th>
                    <div class="card-tools">
                        <a href="<?= base_url('Admin') ?>" class="btn btn-sm btn-primary btn-flat"> Kembali</a>
                        <button class="btn btn-flat btn-success btn-sm" data-toggle="modal" data-target="#add"><i class="fas fa-calendar-plus"></i> Tambah Gelombang</button>
                    </div>
                    <br>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = 1;
                // print_r($gelombang);
                // die;
                if (!empty($gelombang)) :
                    foreach ($gelombang as $k) : ?>
                        <tr>
                            <td><?= $i++; ?></th>
                            <td><?= $k['nama'] ?></td>
                            <td><?= $k['tglawal'] ?></td>
                            <td><?= $k['tglakhir'] ?></td>
                            <td><?= ($k['status'] == 1) ? '<label class="badge badge-success">Aktif</label>' : '<label class="badge badge-danger">Tidak Aktif</label' ?></td>
                            <td class="text-center"><?php if ($k['status'] == 1) { ?>
                                    <a href="<?= base_url('gelombang/statusNonaktif/' . $k['id']) ?>" class="btn btn-danger btn-xs btn-flat">Nonaktifkan</a>
                                <?php } else { ?>
                                    <a href="<?= base_url('gelombang/statusAktif/' . $k['id']) ?>" class="btn btn-success btn-xs btn-flat">Aktifkan</a>
                                <?php } ?>
                            </td>
                        </tr>
                <?php endforeach;
                endif; ?>
            </tbody>
        </table>

        <!-- Modal Add -->
        <div class="modal fade" id="add">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Gelombang</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php echo form_open('gelombang/insertData') ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" class="form-control" placeholder="Nama Gelombang" required>
                        </div>
                        <div class="form">
                            <label>Tanggal Awal</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input name="tglawal" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fas fa-calendar-week"></i>+</div>
                                </div>
                            </div>
                        </div>
                        <div class="form">
                            <label>Tanggal Akhir</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input name="tglakhir" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fas fa-calendar"></i>+</div>
                                </div>
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