<?= $this->extend('template/template-backend-admin') ?>
<?= $this->section('content') ?>

<?php if ($siswa['stat_ppdb'] = 1) { ?>
    <div class="col-sm-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= $subtitle ?></h3>
            </div>
            <div class="card-body p-0">

                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="70px">#</th>
                            <th>No Pendaftaran</th>
                            <th>Tahun</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Jalur Masuk</th>
                            <th>Potongan</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($ppdb as $key => $value) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value['no_pendaftaran'] ?></td>
                                <td><label class="badge badge-success"><?= $value['tahun'] ?></label></td>
                                <td><?= $value['nisn'] ?></td>
                                <td><?= $value['nama_lengkap'] ?></td>
                                <td><label class="badge badge-warning"><?= $value['jalur_masuk'] ?></label></td>
                                <td>potongan promo</td>
                                <td>
                                    <a href="<?= base_url('PendaftaranSiswa/detailDataKeuangan/' . $value['id_siswa']) ?>" class="btn btn-flat btn-xs btn-primary"><i class="fas fa-eye"></i> View</a>
                                    <a href="<?= base_url('PendaftaranSiswa/editDataKeuangan/' . $value['id_siswa']) ?>" class="btn btn-flat btn-xs btn-success"><i class="fas fa-eye"></i> Edit</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>

<?= $this->endSection() ?>