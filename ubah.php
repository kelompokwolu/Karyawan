<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Form Ubah Karyawan</h1>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
   <form action="" method="post">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-5">
                <input type="teks" class="form-control" id="id" name="id">
                <small class="form-text text-danger"><?= form_error('id'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Karyawan</label>
            <div class="col-sm-5">
                <input type="teks" class="form-control" id="nama" name="Nama">
                <small class="form-text text-danger"><?= form_error('Nama Karyawan'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-5">
                <input type="teks" class="form-control" id="alamat" name="Alamat">
                <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-5">
                <input type="teks" class="form-control" id="agama" name="Agama">
                <small class="form-text text-danger"><?= form_error('agama'); ?></small>
            </div>
        </div>
         <div class="form-group row">
            <label for="TTL" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
            <div class="col-sm-5">
                <input type="teks" class="form-control" id="TTL" name="TTL">
                <small class="form-text text-danger"><?= form_error('TTL'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="lulusan" class="col-sm-2 col-form-label">Lulusan</label>
            <div class="col-sm-5">
                <input type="teks" class="form-control" id="lulusan" name="Lulusan">
                <small class="form-text text-danger"><?= form_error('lulusan'); ?></small>
            </div>
        </div>
        <div class="form-group row">
            <label for="bagian" class="col-sm-2 col-form-label">Bagian</label>
            <div class="col-sm-5">
                <input type="teks" class="form-control" id="bagian" name="Bagian">
                <small class="form-text text-danger"><?= form_error('bagian'); ?></small>
            </div>
        </div>
       
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </div>
    </form>

</div>
<!-- /.container-fluid -->

</div>