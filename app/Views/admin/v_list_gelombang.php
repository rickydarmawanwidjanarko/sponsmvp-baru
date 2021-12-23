<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Daftar Gelombang Pendaftaran</h1>
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
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tgl Awal</th>
                    <th>Tgl Akhir</th>
                    <th>Jumlah Pendaftar</th>
                    <th>Aksi</th>
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
                            <td></td>
                            <td>
                                <a href="/Admin/data_gelombang/<?= $k['id'] ?>" class="btn btn-success">Detail</a>
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