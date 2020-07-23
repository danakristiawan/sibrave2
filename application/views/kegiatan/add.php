<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="card">
          <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
            <div class="card-header">
              <div class="card-text">
                <p><?= $this->session->flashdata('message'); ?></p>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="">Nama Kegiatan :</label>
                <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= set_value('nama'); ?>">
                <div class="invalid-feedback">
                  <?= form_error('nama') ?>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Jumlah Petugas :</label>
                    <input type="text" name="jml_petugas" class="form-control <?= form_error('jml_petugas') ? 'is-invalid' : '' ?>" value="<?= set_value('jml_petugas'); ?>">
                    <div class="invalid-feedback">
                      <?= form_error('jml_petugas') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="tgl_mulai">Tgl Mulai:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                      <input class="form-control <?= form_error('tgl_mulai') ? 'is-invalid' : '' ?>" data-date-format="dd-mm-yyyy" data-provide="datepicker" name="tgl_mulai" value="<?= set_value('tgl_mulai'); ?>">
                      <div class="invalid-feedback">
                        <?= form_error('tgl_mulai') ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="tgl_selesai">Tgl Selesai:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                      <input class="form-control <?= form_error('tgl_selesai') ? 'is-invalid' : '' ?>" data-date-format="dd-mm-yyyy" data-provide="datepicker" name="tgl_selesai" value="<?= set_value('tgl_selesai'); ?>">
                      <div class="invalid-feedback">
                        <?= form_error('tgl_selesai') ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Penanggungjawab :</label>
                    <select name="jabatan_id" class="form-control">
                      <?php foreach ($jabatan as $j) : ?>
                        <option value="<?= $j['id']; ?>"><?= $j['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="">Upload File :</label>
                    <div class="custom-file">
                      <input type="file" class="form-control custom" name="file" required>
                    </div>
                    <span><small class="text-muted">file dengan format .jpeg/.png, ukuran maksimal 10 Mb</small></span>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Jenis :</label>
                    <select name="jenis" class="form-control">
                      <?php foreach ($jenis as $r) : ?>
                        <option value="<?= $r['nama']; ?>"><?= $r['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('kegiatan'); ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>