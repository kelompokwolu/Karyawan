<?php if ($this->session->flashdata('flash')) : ?>
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Karyawan <strong> Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
<?php endif; ?>
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables </h6>
      <div class="row mt-3">
        <div class="col-md-6">
          <a href="<?= base_url(); ?>karyawan/tambah" class="btn btn-primary">Tambah Karyawan</a>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID </th>
              <th>Nama </th>
              <th>Alamat</th>
              <th>Agama</th>
              <th>Tempat Tanggal Lahir </th>
              <th>Lulusan</th>
              <th>Bagian</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($Karyawan as $b) : ?>
              <tr>
                <td><?= $b['id']; ?></td>
                <td><?= $b['Nama']; ?></td>
                <td><?= $b['Alamat']; ?></td>
                <td><?= $b['Agama']; ?></td>
                <td><?= $b['TTL']; ?></td>
                <td><?= $b['Lulusan']; ?></td>
                <td><?= $b['Bagian']; ?></td>
        
                  
                </td>
                <td> <a href="<?= base_url(); ?>Karyawan/hapus/<?= $b['id']; ?> " class="badge badge-danger float-right" onclick="return confirm('yakin ?');">Hapus</a>
                  <a href="<?= base_url(); ?>Karyawan/ubah/<?= $b['id']; ?> " class="badge badge-success float-right">Ubah</a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>