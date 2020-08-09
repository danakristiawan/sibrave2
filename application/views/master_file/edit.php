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
                <label for="">KK :</label>
                <input type="text" name="kk" class="form-control <?= form_error('kk') ? 'is-invalid' : '' ?>" value="<?= $master['kk']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('kk') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">BSTT :</label>
                <input type="text" name="bstt" class="form-control <?= form_error('bstt') ? 'is-invalid' : '' ?>" value="<?= $master['bstt']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('bstt') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">BSBTT :</label>
                <input type="text" name="bsbtt" class="form-control <?= form_error('bsbtt') ? 'is-invalid' : '' ?>" value="<?= $master['bsbtt']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('bsbtt') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">BSTT_K :</label>
                <input type="text" name="bstt_k" class="form-control <?= form_error('bstt_k') ? 'is-invalid' : '' ?>" value="<?= $master['bstt_k']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('bstt_k') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="">Nama Ketua SLS :</label>
                <input type="text" name="nama_ksls" class="form-control <?= form_error('nama_ksls') ? 'is-invalid' : '' ?>" value="<?= $master['nama_ksls']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('nama_ksls') ?>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('master-file/detail/') . $kode; ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>