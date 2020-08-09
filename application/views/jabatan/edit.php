<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <form action="" method="post" autocomplete="off">
            <div class="card-header">

            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group">
                    <label for="">Kode Jabatan :</label>
                    <input type="text" name="kode" class="form-control <?= form_error('kode') ? 'is-invalid' : '' ?>" value="<?= $jabatan['kode']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('kode') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="form-group">
                    <label for="">Nama Jabatan :</label>
                    <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" value="<?= $jabatan['nama']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nama') ?>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="">Nama Pegawai :</label>
                    <input type="text" name="nama_peg" class="form-control <?= form_error('nama_peg') ? 'is-invalid' : '' ?>" value="<?= $jabatan['nama_peg']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nama_peg') ?>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="">NIP Pegawai :</label>
                    <input type="text" name="nip_peg" class="form-control <?= form_error('nip_peg') ? 'is-invalid' : '' ?>" value="<?= $jabatan['nip_peg']; ?>">
                    <div class="invalid-feedback">
                      <?= form_error('nip_peg') ?>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
              <a href="<?= base_url('jabatan'); ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>