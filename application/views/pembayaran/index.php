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
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($kegiatan as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><a href="<?= base_url('pembayaran/detail-sk/') . $r['id']; ?>"><?= $r['nama']; ?></a></td>
                      <td><?= date('d-m-Y', $r['tgl_mulai']); ?></td>
                      <td><?= date('d-m-Y', $r['tgl_selesai']); ?></td>
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