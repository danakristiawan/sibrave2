<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
        <div class="card">
          <form action="" method="post" autocomplete="off">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
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
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Gol</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($petugas as $r) : $alamat = $r['jalan'] . ' RT ' . $r['rt'] . ' RW ' . $r['rw'] . ' Kel ' . $r['kel'] . ' Kec ' . $r['kec'] . ', ' . $r['kota'] . ', ' . $r['prov']; ?>
                    <tr>
                      <td><?= $r['nik']; ?></td>
                      <td><?= $r['nama']; ?></td>
                      <td><?= $alamat; ?></td>
                      <td><?= $r['pekerjaan']; ?></td>
                      <td><?= $r['gol']; ?></td>
                      <td>
                        <div class="form-check">
                          <input class="form-check-petugas" type="checkbox" <?= check_petugas($kegiatan_id, $sk_id, $r['nik']); ?> data-nik="<?= $r['nik']; ?>" data-nama="<?= $r['nama']; ?>" data-alamat="<?= $alamat; ?>" data-pekerjaan="<?= $r['pekerjaan']; ?>" data-gol="<?= $r['gol']; ?>" data-kegiatan_id="<?= $kegiatan_id; ?>" data-sk_id="<?= $sk_id; ?>" data-kelurahan_id="<?= $kelurahan_id; ?>">
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer">
              <a href="<?= base_url('kegiatan/petugas-index/') . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id; ?>" class="btn btn-info float-right"><i class="nav-icon fa fa-arrow-left"></i> Kembali</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</section>