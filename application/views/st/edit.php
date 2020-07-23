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
                <label for="">Nomor ST :</label>
                <input type="text" name="no_st" class="form-control <?= form_error('no_st') ? 'is-invalid' : '' ?>" value="<?= $st['no_st']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('no_st') ?>
                </div>
              </div>
              <div class="form-group">
                <label for="tgl_st">Tgl ST:</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fa fa-calendar"></i>
                    </span>
                  </div>
                  <input class="form-control <?= form_error('tgl_st') ? 'is-invalid' : '' ?>" data-date-format="dd-mm-yyyy" data-provide="datepicker" name="tgl_st" value="<?= $st['tgl_st'] == null ? '' : date('d-m-Y', $st['tgl_st']); ?>">
                  <div class="invalid-feedback">
                    <?= form_error('tgl_st') ?>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('contoh'); ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>