<?= $this->extend('admin/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Ubah Data Sekolah</h2>
            <form action="/Admin/update_sekolah/<?= $school['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="judul" class="form-label">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') : $school['nama'] ?>" autofocus>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama') ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ? old('email') : $school['email'] ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?= old('password') ? old('password') : $school['password'] ?>">
                </div>
                <div class="mb-3">
                    <label for="detail" class="form-label">Detail</label>
                    <textarea class="form-control" name="detail" id="detail" cols="30" rows="10"><?= old('detail') ? old('detail') : $school['detail'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat') ? old('alamat') : $school['alamat'] ?>">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ? old('no_telp') : $school['no_telp'] ?>">
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" value="<?= old('kota') ? old('kota') : $school['kota'] ?>">
                </div>

                <div class="input-group mb-3">
                    <input type="file" class="form-control <?= ($validation->hasError('logo')) ? 'is-invalid' : '' ?>" id="logo" name="logo">
                    <label class="input-group-text" for="logo">Logo</label>
                    <div class="invalid-feedback" style="display: block;">
                        <?= $validation->getError('logo'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>