<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="card">
          <form action="" method="post" autocomplete="off">
            <div class="card-header">

            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Kode Program :</label>
                    <input type="text" name="kd_program" class="form-control <?= form_error('kd_program') ? 'is-invalid' : '' ?>" value="<?= $akun['kd_program']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kd_program') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="form-group">
                    <label for="">Nama Program :</label>
                    <input type="text" name="nm_program" class="form-control <?= form_error('nm_program') ? 'is-invalid' : '' ?>" value="<?= $akun['nm_program']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nm_program') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Kode Kegiatan :</label>
                    <input type="text" name="kd_kegiatan" class="form-control <?= form_error('kd_kegiatan') ? 'is-invalid' : '' ?>" value="<?= $akun['kd_kegiatan']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kd_kegiatan') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="form-group">
                    <label for="">Nama Kegiatan :</label>
                    <input type="text" name="nm_kegiatan" class="form-control <?= form_error('nm_kegiatan') ? 'is-invalid' : '' ?>" value="<?= $akun['nm_kegiatan']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nm_kegiatan') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Kode Output :</label>
                    <input type="text" name="kd_output" class="form-control <?= form_error('kd_output') ? 'is-invalid' : '' ?>" value="<?= $akun['kd_output']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kd_output') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="form-group">
                    <label for="">Nama Output :</label>
                    <input type="text" name="nm_output" class="form-control <?= form_error('nm_output') ? 'is-invalid' : '' ?>" value="<?= $akun['nm_output']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nm_output') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Kode Komponen :</label>
                    <input type="text" name="kd_komponen" class="form-control <?= form_error('kd_komponen') ? 'is-invalid' : '' ?>" value="<?= $akun['kd_komponen']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kd_komponen') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="form-group">
                    <label for="">Nama Komponen :</label>
                    <input type="text" name="nm_komponen" class="form-control <?= form_error('nm_komponen') ? 'is-invalid' : '' ?>" value="<?= $akun['nm_komponen']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nm_komponen') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Kode Akun :</label>
                    <input type="text" name="kd_akun" class="form-control <?= form_error('kd_akun') ? 'is-invalid' : '' ?>" value="<?= $akun['kd_akun']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kd_akun') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-10">
                  <div class="form-group">
                    <label for="">Nama Akun :</label>
                    <input type="text" name="nm_akun" class="form-control <?= form_error('nm_akun') ? 'is-invalid' : '' ?>" value="<?= $akun['nm_akun']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nm_akun') ?>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('akun'); ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>