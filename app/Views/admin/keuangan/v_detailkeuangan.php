<?= $this->extend('template/template-backend-admin') ?>
<?= $this->section('content') ?>

<?php if ($siswa['stat_ppdb'] = 1) { ?>
    <div class="col-sm-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= $subtitle ?></h3>
            </div>
            <div class="card-body p-0">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="70px">#</th>
                            <th>No Pendaftaran</th>
                            <th>Tahun</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Jalur Masuk</th>
                            <th>Formulir</th>
                            <th>DPSP</th>
                            <th>DPS</th>
                            <th>BOPP</th>
                            <th>Potongan</th>
                            <th>Total</th>

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
                                <td><?= $value['formulir'] ?></td>
                                <td><?= $value['dpsp'] ?></td>
                                <td><?= $value['dps'] ?></td>
                                <td><?= $value['bopp'] ?></td>
                                <td><?= $value['potongan'] ?></td>
                                <td>Potongan</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } ?>

<?= $this->endSection() ?>