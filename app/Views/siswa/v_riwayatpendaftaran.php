<?= $this->extend('siswa/template'); ?>
<?= $this->section('content'); ?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Sekolah</h3>
                        <div class="card-tools">
                            <a href="<?= base_url('Siswa/') ?>" class="btn btn-sm btn-primary btn-flat"><i class="fas fa-backward"> Kembali</i></a>
                        </div>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 500px;">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Gelombang</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($pendaftarans as $p) : ?>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $p['namasekolah'] ?></td>
                                        <td><?= $p['namagelombang'] ?></td>
                                        <td><?= date('d M Y', strtotime($p['waktu'])) ?></td>
                                        <td><?= $status[$p['status']] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<?= $this->endSection(); ?>