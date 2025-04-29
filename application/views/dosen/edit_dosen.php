<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Edit Dosen</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Update Dosen</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="collapse">
            <i class="fas fa-minus"></i>
            </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="collapse">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        <div class="card-body">
            <form action="<?= base_url('dosen/update/' . $dosen['nidn']);?>" method="post">
                <div class="form-group">
                    <label for="nidn">Nidn</label>
                    <input type="text" name="nidn" id="nidn" class="form-control" placeholder="nidn" require value="<?= $dosen['nidn'];?> ">
            </div>
            <div class="form-group">
                    <label for="nama_dosen">Nama dosen</label>
                    <input type="text" name="nama_dosen" id="nama_dosen" class="form-control" placeholder="nama_dosen" require value="<?= $dosen['nama_dosen'];?> ">
            </div>
            <div class="form-group">
            <label for="jenis_kelamin">Jenis kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                   <option value="Laki-Laki">Laki laki</option>
                   <option value="perempuan">Perempuan</option>
                  </select>
            </div>
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="email" require value="<?= $dosen['email'];?> ">
            </div>
            <div class="form-group">
                    <label for="telp">Telp</label>
                    <input type="text" name="telp" id="telp" class="form-control" placeholder="telp" require value="<?= $dosen['telp'];?> ">
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan dosen</button>
            <a href="<?php echo base_url('dosen'); ?>" class="btn btn-secondary">Kembali</a>
        </div>
            </div>
        </form>
        <div class="card-footer">
</div>
</div>
</section>
</div>
