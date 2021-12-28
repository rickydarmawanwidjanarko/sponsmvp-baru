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
                    <th>Dokumen</th>
                    <th>Status</th>
                    <div class="card-tools">
                        <a href="<?= base_url('Admin') ?>" class="btn btn-sm btn-primary btn-flat"> Kembali</a>
                    </div>
                    <br>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = 1;
                // print_r($gelombang);
                // die;
                if (!empty($siswa)) :
                    foreach ($siswa as $l) : ?>
                        <tr>
                            <td><?= $i++; ?></th>
                            <td>nama siswa</td>
                            <td>tanggal lahir siswa</td>
                            <td>alamat siswa</td>
                            <td>no telp siswa</td>
                            <td>JK siswa</td>
                            <td>Email siswa</td>
                            <td>Gelombang</td>
                            <td>Dokumen</td>
                            <td>Diterima</td>
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