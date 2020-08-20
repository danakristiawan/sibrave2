<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('lampiran-spk'); ?>">Daftar Kegiatan</a> / Daftar Surat Keputusan</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor</th>
                    <th>Tanggal</th>
                    <th>Uraian</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($sk as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><a href="<?= base_url('lampiran-spk/detail-lampiran/') . $kegiatan_id . '/'  . $r['id']; ?>"><?= $r['nomor']; ?></a></td>
                      <td><?= date('d-m-Y', $r['tanggal']); ?></td>
                      <td><?= $r['nama']; ?></td>
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