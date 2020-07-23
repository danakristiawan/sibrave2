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
                <label for="">Jumlah Capaian :</label>
                <input type="text" name="jumlah" class="form-control <?= form_error('jumlah') ? 'is-invalid' : '' ?>" value="<?= $capaian['jumlah']; ?>">
                <div class="invalid-feedback">
                  <?= form_error('jumlah') ?>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('persetujuan/detail-capaian/') . $kegiatan_id . '/' . $sk_id . '/' . $nik; ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>