<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Gelombang</h2>
            <form action="/Gelombang/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="judul" class="form-label">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= old('nama') ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama') ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail</label>
                    <textarea class="form-control" name="detail" id="detail" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <label for="persyaratan" class="form-label">Persyaratan</label>
                    <textarea class="form-control" name="persyaratan" id="persyaratan" cols="30" rows="10"></textarea>
                </div>
                <div class="mb-3">
                    <label for="tglawal" class="form-label">Tgl Awal</label>
                    <input type="date" class="form-control" id="tglawal" name="tglawal" value="<?= old('tglawal') ?>">
                </div>
                <div class="mb-3">
                    <label for="tglakhir" class="form-label">Tgl AKhir</label>
                    <input type="date" class="form-control" id="tglakhir" name="tglakhir" value="<?= old('tglakhir') ?>">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>