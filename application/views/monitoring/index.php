<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
      </div>
    </div>
    <hr>
    <div class="row">
      <?php foreach ($kegiatan as $r) : ?>
        <div class="col-lg-3">
          <div class="card">
            <div class="card-header bg-info-gradient">
              <?= $r['jenis']; ?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-sm">
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $r['nama']; ?></td>
                  </tr>
                  <tr>
                    <td>Jadwal</td>
                    <td>:</td>
                    <td><?= tanggal($r['tgl_mulai']); ?> s/d <?= tanggal($r['tgl_selesai']); ?></td>
                  </tr>
                  <tr>
                    <td>Subject Matter</td>
                    <td>:</td>
                    <td><?= $r['pj']; ?></td>
                  </tr>
                  <tr>
                    <td>Nomor SK</td>
                    <td>:</td>
                    <td><?= $r['nomor']; ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal SK</td>
                    <td>:</td>
                    <td><?= tanggal($r['tanggal']); ?></td>
                  </tr>
                  <tr>
                    <td>Petugas</td>
                    <td>:</td>
                    <td><?= number_format($r['jml_petugas'], 0, ',', '.'); ?> <a href="<?= base_url('monitoring/detail/') . $r['id']; ?>" class="badge badge-secondary badge-sm ml-2"><i class="fa fa-search" data-toggle="tooltip" data-placement="bottom" title="Detail"></i></i></a></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>