<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <form action="" method="post" autocomplete="off">
            <div class="card-header">
              <form action="" method="post" autocomplete="off">
                <div class="input-group">
                  <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan nama atau nik.." aria-label="Cari nama pegawai.." aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-outline-info" type="submit" id="button-addon2"><i class="fa fa-search"></i> Cari</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-body">
              <table class="table table-sm table-bordered">
                <thead>
                  <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($petugas as $r) : ?>
                    <tr>
                      <td><?= $r['nik']; ?></td>
                      <td><?= $r['nama']; ?></td>
                      <td><?= $r['jabatan']; ?></td>
                      <td>
                        <div class="form-check">
                          <input class="form-check-petugas" type="checkbox" <?= check_petugas($kegiatan_id, $sk_id, $r['nik']); ?> data-nik="<?= $r['nik']; ?>" data-nama="<?= $r['nama']; ?>" data-jabatan="<?= $r['jabatan']; ?>" data-gol="<?= $r['gol']; ?>" data-kegiatan_id="<?= $kegiatan_id; ?>" data-sk_id="<?= $sk_id; ?>">
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <a href="<?= base_url('kegiatan/petugas-index/') . $kegiatan_id . '/' . $sk_id; ?>" class="btn btn-info float-right"><i class="nav-icon fa fa-arrow-left"></i> Kembali</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>