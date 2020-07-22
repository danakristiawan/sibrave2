<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <form action="" method="post" autocomplete="off">
            <div class="card-header">

            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="">NIK :</label>
                <input type="text" name="nik" class="form-control <?= form_error('nik') ? 'is-invalid' : '' ?>" value="<?= $pengguna['nik']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('nik') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">Nama :</label>
                <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= $pengguna['nama']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('nama') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">Email :</label>
                <input type="email" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" value="<?= $pengguna['email']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('email') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">Aktivasi :</label>
                <input type="text" name="is_active" class="form-control <?= form_error('is_active') ? 'is-invalid' : '' ?>" value="<?= $pengguna['is_active']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('is_active') ?>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>