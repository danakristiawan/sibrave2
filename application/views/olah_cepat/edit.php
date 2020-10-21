<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <form action="" method="post" autocomplete="off">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
            <div class="card-header">

            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="">No Urut KK Terbesar :</label>
                    <input type="text" name="no_urut_besar" class="form-control <?= form_error('no_urut_besar') ? 'is-invalid' : '' ?>" value="<?= $master['no_urut_besar']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('no_urut_besar') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">107a :</label>
                    <input type="text" name="107a" class="form-control <?= form_error('107a') ? 'is-invalid' : '' ?>" value="<?= $master['107a']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('107a') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">107b :</label>
                    <input type="text" name="107b" class="form-control <?= form_error('107b') ? 'is-invalid' : '' ?>" value="<?= $master['107b']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('107b') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">107c :</label>
                    <input type="text" name="107c" class="form-control <?= form_error('107c') ? 'is-invalid' : '' ?>" value="<?= $master['107c']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('107c') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">107d :</label>
                    <input type="text" name="107d" class="form-control <?= form_error('107d') ? 'is-invalid' : '' ?>" value="<?= $master['107d']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('107d') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">108a :</label>
                    <input type="text" name="108a" class="form-control <?= form_error('108a') ? 'is-invalid' : '' ?>" value="<?= $master['108a']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('108a') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">108b :</label>
                    <input type="text" name="108b" class="form-control <?= form_error('108b') ? 'is-invalid' : '' ?>" value="<?= $master['108b']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('108b') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">jml_4a :</label>
                    <input type="text" name="jml_4a" class="form-control <?= form_error('jml_4a') ? 'is-invalid' : '' ?>" value="<?= $master['jml_4a']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('jml_4a') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">jml_4b :</label>
                    <input type="text" name="jml_4b" class="form-control <?= form_error('jml_4b') ? 'is-invalid' : '' ?>" value="<?= $master['jml_4b']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('jml_4b') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">jml_4c :</label>
                    <input type="text" name="jml_4c" class="form-control <?= form_error('jml_4c') ? 'is-invalid' : '' ?>" value="<?= $master['jml_4c']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('jml_4c') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">jml_5 :</label>
                    <input type="text" name="jml_5" class="form-control <?= form_error('jml_5') ? 'is-invalid' : '' ?>" value="<?= $master['jml_5']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('jml_5') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="">Nama Ketua SLS :</label>
                    <input type="text" name="nm_ketuasls" class="form-control <?= form_error('nm_ketuasls') ? 'is-invalid' : '' ?>" value="<?= $master['nm_ketuasls']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nm_ketuasls') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Kode Pengolah :</label>
                    <input type="text" name="kd_pengolah" class="form-control <?= form_error('kd_pengolah') ? 'is-invalid' : '' ?>" value="<?= $master['kd_pengolah']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kd_pengolah') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="tgl_mulai">Tgl Mulai:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                      <input class="form-control <?= form_error('tgl_mulai') ? 'is-invalid' : '' ?>" data-date-format="dd-mm-yyyy" data-provide="datepicker" name="tgl_mulai" value="<?= $master['tgl_mulai'] ? date('d-m-Y', $master['tgl_mulai']) : '' ?>">
                      <div class="invalid-feedback">
                        <?= form_error('tgl_mulai') ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="tgl_selesai">Tgl Selesai:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                      <input class="form-control <?= form_error('tgl_selesai') ? 'is-invalid' : '' ?>" data-date-format="dd-mm-yyyy" data-provide="datepicker" name="tgl_selesai" value="<?= $master['tgl_selesai'] ? date('d-m-Y', $master['tgl_selesai']) : ''; ?>">
                      <div class="invalid-feedback">
                        <?= form_error('tgl_selesai') ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">4a_rev :</label>
                    <input type="text" name="4a_rev" class="form-control <?= form_error('4a_rev') ? 'is-invalid' : '' ?>" value="<?= $master['4a_rev']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('4a_rev') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">4b_rev :</label>
                    <input type="text" name="4b_rev" class="form-control <?= form_error('4b_rev') ? 'is-invalid' : '' ?>" value="<?= $master['4b_rev']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('4b_rev') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">4c_rev :</label>
                    <input type="text" name="4c_rev" class="form-control <?= form_error('4c_rev') ? 'is-invalid' : '' ?>" value="<?= $master['4c_rev']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('4c_rev') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">5_rev :</label>
                    <input type="text" name="5_rev" class="form-control <?= form_error('5_rev') ? 'is-invalid' : '' ?>" value="<?= $master['5_rev']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('5_rev') ?>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('olah-cepat/detail/') . $kode; ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>