<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('pembayaran'); ?>">Daftar Kegiatan / </a><a href="<?= base_url('pembayaran/detail-sk/') . $kegiatan_id; ?>">Daftar Surat Keputusan / </a>Daftar Petugas</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm table-hover" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Target</th>
                    <th>Capaian</th>
                    <th>Jumlah</th>
                    <th>Cetak</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($petugas as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['nik']; ?></td>
                      <td><?= $r['nama']; ?></td>
                      <td class="text-right"><?= number_format($r['target'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['capaian'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
                      <td><a href="<?= base_url('pembayaran/bast-cetak/') . $kegiatan_id . '/' . $sk_id . '/' . $r['nik']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="BAST"><i class="fa fa-file-pdf-o ml-2"></i></a></td>
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