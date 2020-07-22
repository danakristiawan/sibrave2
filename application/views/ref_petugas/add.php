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
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">NIK :</label>
                    <input type="text" name="nik" class="form-control <?= form_error('nik') ? 'is-invalid' : '' ?>" value="<?= set_value('nik'); ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nik') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="">Nama :</label>
                    <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= set_value('nama'); ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nama') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Jabatan :</label>
                    <select name="jabatan" class="form-control">
                      <?php foreach ($jabatan as $r) : ?>
                        <option value="<?= $r['nama']; ?>"><?= $r['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Nomor Rekening :</label>
                    <input type="text" name="rekening" class="form-control <?= form_error('rekening') ? 'is-invalid' : '' ?>" value="<?= set_value('rekening'); ?>">
                    <div class="invalid-feedback">
                      <?= form_error('rekening') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Nama Bank :</label>
                    <select name="nama_bank" class="form-control">
                      <?php foreach ($bank as $s) : ?>
                        <option value="<?= $s['nama']; ?>"><?= $s['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="form-group">
                    <label for="">Atas Nama :</label>
                    <input type="text" name="nama_rek" class="form-control <?= form_error('nama_rek') ? 'is-invalid' : '' ?>" value="<?= set_value('nama_rek'); ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nama_rek') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">NPWP :</label>
                    <input type="text" name="npwp" class="form-control <?= form_error('npwp') ? 'is-invalid' : '' ?>" value="<?= set_value('npwp'); ?>">
                    <div class="invalid-feedback">
                      <?= form_error('npwp') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="">Alamat :</label>
                    <input type="text" name="alamat" class="form-control <?= form_error('alamat') ? 'is-invalid' : '' ?>" value="<?= set_value('alamat'); ?>">
                    <div class="invalid-feedback">
                      <?= form_error('alamat') ?>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('petugas'); ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>