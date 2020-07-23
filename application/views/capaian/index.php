<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;Daftar Kegiatan</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Target</th>
                    <th>Capaian</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($kegiatan as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><a href="<?= base_url('capaian/detail/') . $r['id']; ?>"><?= $r['nama'] ?></a></td>
                      <td><?= tanggal($r['tgl_mulai']); ?></td>
                      <td><?= tanggal($r['tgl_selesai']); ?></td>
                      <td><?= number_format($r['jml'], 0, ',', '.'); ?></td>
                      <td><?= number_format($r['capaian'], 0, ',', '.'); ?></td>
                      <td><?= $r['jml'] <= $r['capaian'] ? '<span class="badge bg-success">Sudah Selesai</span>' : '<span class="badge bg-danger">Belum Selesai</span>'; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>