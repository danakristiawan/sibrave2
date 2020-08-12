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
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">NIK Petugas :</label>
                    <input type="text" name="nik" class="form-control <?= form_error('nik') ? 'is-invalid' : '' ?>" value="<?= $petugas['nik']; ?>" readonly>
                    <div class="invalid-feedback">
                      <?= form_error('nik') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Nama Petugas :</label>
                    <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= $petugas['nama']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nama') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Tempat Lahir :</label>
                    <input type="text" name="tempat_lhr" class="form-control <?= form_error('tempat_lhr') ? 'is-invalid' : '' ?>" value="<?= $petugas['tempat_lhr']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('tempat_lhr') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="tgl_lhr">Tgl Lahir:</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </div>
                      <input class="form-control <?= form_error('tgl_lhr') ? 'is-invalid' : '' ?>" data-date-format="dd-mm-yyyy" data-provide="datepicker" name="tgl_lhr" value="<?= $petugas['tgl_lhr']; ?>">
                      <div class="invalid-feedback">
                        <?= form_error('tgl_lhr') ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Jenis Kelamin :</label>
                    <select name="jenis_kel" class="form-control">
                      <?php foreach ($kelamin as $r) : ?>
                        <option value="<?= $r['nama']; ?>" <?= $r['nama'] == $petugas['jenis_kel'] ? 'selected' : ''; ?>><?= $r['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Pekerjaan :</label>
                    <input type="text" name="pekerjaan" class="form-control <?= form_error('pekerjaan') ? 'is-invalid' : '' ?>" value="<?= $petugas['pekerjaan']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('pekerjaan') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Agama :</label>
                    <select name="agama" class="form-control">
                      <?php foreach ($agama as $r) : ?>
                        <option value="<?= $r['nama']; ?>" <?= $r['nama'] == $petugas['agama'] ? 'selected' : ''; ?>><?= $r['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">Status :</label>
                    <select name="status_kawin" class="form-control">
                      <?php foreach ($kawin as $r) : ?>
                        <option value="<?= $r['nama']; ?>" <?= $r['nama'] == $petugas['status_kawin'] ? 'selected' : ''; ?>><?= $r['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Pendidikan :</label>
                    <select name="pendidikan" class="form-control">
                      <?php foreach ($pendidikan as $r) : ?>
                        <option value="<?= $r['nama']; ?>" <?= $r['nama'] == $petugas['pendidikan'] ? 'selected' : ''; ?>><?= $r['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">No Handphone :</label>
                    <input type="text" name="nohp" class="form-control <?= form_error('nohp') ? 'is-invalid' : '' ?>" value="<?= $petugas['nohp']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nohp') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">Email :</label>
                    <input type="email" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : '' ?>" value="<?= $petugas['email']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('email') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="">NPWP :</label>
                    <input type="text" name="npwp" class="form-control <?= form_error('npwp') ? 'is-invalid' : '' ?>" value="<?= $petugas['npwp']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('npwp') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8">
                  <div class="form-group">
                    <label for="">Jalan :</label>
                    <input type="text" name="jalan" class="form-control <?= form_error('jalan') ? 'is-invalid' : '' ?>" value="<?= $petugas['jalan']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('jalan') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">RT :</label>
                    <input type="text" name="rt" class="form-control <?= form_error('rt') ? 'is-invalid' : '' ?>" value="<?= $petugas['rt']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('rt') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <label for="">RW :</label>
                    <input type="text" name="rw" class="form-control <?= form_error('rw') ? 'is-invalid' : '' ?>" value="<?= $petugas['rw']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('rw') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Kelurahan :</label>
                    <input type="text" name="kel" class="form-control <?= form_error('kel') ? 'is-invalid' : '' ?>" value="<?= $petugas['kel']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kel') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Kecamatan :</label>
                    <input type="text" name="kec" class="form-control <?= form_error('kec') ? 'is-invalid' : '' ?>" value="<?= $petugas['kec']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kec') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Kab/Kota :</label>
                    <input type="text" name="kota" class="form-control <?= form_error('kota') ? 'is-invalid' : '' ?>" value="<?= $petugas['kota']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kota') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Provinsi :</label>
                    <input type="text" name="prov" class="form-control <?= form_error('prov') ? 'is-invalid' : '' ?>" value="<?= $petugas['prov']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('prov') ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Nomor Rekening :</label>
                    <input type="text" name="rekening" class="form-control <?= form_error('rekening') ? 'is-invalid' : '' ?>" value="<?= $petugas['rekening']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('rekening') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Nama Bank :</label>
                    <select name="nama_bank" class="form-control">
                      <?php foreach ($bank as $r) : ?>
                        <option value="<?= $r['nama']; ?>" <?= $r['nama'] == $petugas['nama_bank'] ? 'selected' : ''; ?>><?= $r['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Atas Nama :</label>
                    <input type="text" name="nama_rek" class="form-control <?= form_error('nama_rek') ? 'is-invalid' : '' ?>" value="<?= $petugas['nama_rek']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nama_rek') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Golongan :</label>
                    <select name="gol" class="form-control">
                      <?php foreach ($gol as $r) : ?>
                        <option value="<?= $r['nama']; ?>" <?= $r['nama'] == $petugas['gol'] ? 'selected' : ''; ?>><?= $r['nama']; ?></option>
                      <?php endforeach; ?>
                    </select>
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