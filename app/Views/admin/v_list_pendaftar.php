<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $subtitle ?></h1>

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <?php
        if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success" role="alert">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        } ?>
        <!-- Small boxes (Stat box) -->
        <table class="table">
            <thead class="table-dark table-sm">
                <tr>
                    <th width="70px">No</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Nomor Telpon</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Gelombang</th>
                    <th>Waktu Daftar</th>
                    <th>Dokumen</th>
                    <th width="100px">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = 1;
                if (!empty($siswa)) :
                    foreach ($siswa as $l) : ?>
                        <tr>
                            <td><?= $i++; ?></th>
                            <td><?= $l['namasiswa'] ?></td>
                            <td><?= date('d M Y', strtotime($l['tgl_lahir'])) ?></td>
                            <td><?= $l['alamat'] ?></td>
                            <td><?= $l['no_telp'] ?></td>
                            <td><?= $l['jk'] ?></td>
                            <td><?= $l['email'] ?></td>
                            <td><?= $l['namagelombang'] ?></td>
                            <td><?= date('d M Y', strtotime($l['waktu'])) ?></td>
                            <td><a href="/Admin/download/<?= $l['idpendaftaran'] ?>"><?= $l['dokumen'] ?> </a></td>
                            <td>
                                <a href="/Admin/accept/<?= $l['idpendaftaran'] ?>" class="btn btn-flat btn-xs btn-success"><i class="fas fa-check"></i> Terima</a>
                                <a href="/Admin/reject/<?= $l['idpendaftaran'] ?>" class="btn btn-flat btn-xs btn-danger"><i class="fas fa-times "></i> Tolak</a>
                            </td>
                        </tr>
                <?php endforeach;
                endif; ?>
            </tbody>
        </table>


        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<?= $this->endSection(); ?>