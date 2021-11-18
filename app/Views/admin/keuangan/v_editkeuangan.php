<?= $this->extend('template/template-backend-admin') ?>
<?= $this->section('content') ?>


<form action="">
    <div class="card-body col-sm-12">
        <div class="form-group">
            <label for="">FORMULIR</label>
            <select name="" class="form-control">
                <option value="" selected disabled>Status Pembayaran</option>
                <option value="">Lunas</option>
                <option value="">Belum Lunas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">DPSP</label>
            <select name="" class="form-control">
                <option value="" selected disabled>Status Pembayaran</option>
                <option value="">Lunas</option>
                <option value="">Belum Lunas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">DPS</label>
            <select name="" class="form-control">
                <option value="" selected disabled>Status Pembayaran</option>
                <option value="">Lunas</option>
                <option value="">Belum Lunas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">BOPP</label>
            <select name="" class="form-control">
                <option value="" selected disabled>Status Pembayaran</option>
                <option value="">Lunas</option>
                <option value="">Belum Lunas</option>
            </select>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<!-- general form elements disabled -->
<div class="card card-primary col-sm-12">
    <div class="card-header">
        <h3 class="card-title">Masukan Nominal</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Formulir</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>DPSP</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>DPS</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>BOPP</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <!-- /.card-body -->
</div>


<?= $this->endSection() ?>