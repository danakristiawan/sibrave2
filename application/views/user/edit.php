<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <?= form_open(); ?>
          <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
          <div class="card-header">

          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="">NIK :</label>
              <input type="text" name="nik" class="form-control <?= form_error('nik') ? 'is-invalid' : '' ?>" value="<?= $user['nik']; ?>" readonly>
              <div class="invalid-feedback">
                <?= form_error('nik') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="">Nama :</label>
              <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= $user['nama']; ?>" readonly>
              <div class="invalid-feedback">
                <?= form_error('nama') ?>
              </div>
            </div>
            <div class="form-group">
              <label for="">Role :</label>
              <select name="role_id" class="form-control">
                <?php foreach ($role as $s) : ?>
                  <option value="<?= $s['id']; ?>" <?= $s['id'] == $user['role_id'] ? 'selected' : ''; ?>><?= $s['name']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="">Kode BPS :</label>
              <select name="kdbps" class="form-control">
                <?php foreach ($bps as $r) : ?>
                  <option value="<?= $r['kode']; ?>" <?= $r['kode'] == $user['kdbps'] ? 'selected' : ''; ?>><?= $r['nama']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
            <a href="<?= base_url('user'); ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
          </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>