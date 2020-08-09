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
                <label for="">Nomor :</label>
                <input type="text" name="nomor" class="form-control <?= form_error('nomor') ? 'is-invalid' : '' ?>" value="<?= $sk['nomor']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('nomor') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">Uraian :</label>
                <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= $sk['nama']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('nama') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </div>
                  <input class="form-control <?= form_error('tanggal') ? 'is-invalid' : '' ?>" data-date-format="dd-mm-yyyy" data-provide="datepicker" name="tanggal" value="<?= date('d-m-Y', $sk['tanggal']); ?>">
                  <div class="invalid-feedback">
                    <?= form_error('tanggal') ?>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Nomor DIPA :</label>
                <input type="text" name="no_dipa" class="form-control <?= form_error('no_dipa') ? 'is-invalid' : '' ?>" value="<?= $sk['no_dipa']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('no_dipa') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">Kode Akun :</label>
                <select name="akun_id" class="form-control">
                  <?php foreach ($akun as $s) : ?>
                    <option value="<?= $s['id']; ?>" <?= $s['id'] == $sk['akun_id'] ? 'selected' : ''; ?>><?= $s['kd_program'] . '.' . $s['kd_kegiatan'] . '.' . $s['kd_output'] . '.' . $s['kd_komponen'] . '.' . $s['kd_akun']; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="">Rate :</label>
                <input type="text" name="rate" class="form-control <?= form_error('rate') ? 'is-invalid' : '' ?>" value="<?= $sk['rate']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('rate') ?>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('kegiatan/sk-index/') . $kegiatan_id; ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>