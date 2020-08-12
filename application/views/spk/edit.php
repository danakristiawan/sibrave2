<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <form action="" method="post" autocomplete="off">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
            <div class="card-header">

            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="">Nomor SPK :</label>
                <input type="text" name="no_spk" class="form-control <?= form_error('no_spk') ? 'is-invalid' : '' ?>" value="<?= $spk['no_spk']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('no_spk') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="tgl_spk">Tgl SPK:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </div>
                  <input class="form-control <?= form_error('tgl_spk') ? 'is-invalid' : '' ?>" data-date-format="dd-mm-yyyy" data-provide="datepicker" name="tgl_spk" value="<?= $spk['tgl_spk'] == null ? '' : date('d-m-Y', $spk['tgl_spk']); ?>">
                  <div class="invalid-feedback">
                    <?= form_error('tgl_spk') ?>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('kegiatan/petugas-index/') . $kegiatan_id . '/' . $sk_id; ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>