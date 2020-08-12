<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('persetujuan'); ?>">Daftar Kegiatan / </a><a href="<?= base_url('persetujuan/detail-sk/') . $kegiatan_id; ?>">Daftar Surat Keputusan / </a>Daftar Kelurahan</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jumlah Petugas</th>
                    <th>Jumlah Target</th>
                    <th>Jumlah Capaian</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  $jpetugas = 0;
                  $jtarget = 0;
                  $jcapaian = 0;
                  foreach ($kelurahan as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['kode_desa']; ?></td>
                      <td><a href="<?= base_url('persetujuan/detail-petugas/') . $kegiatan_id . '/' . $sk_id . '/'  . $r['id']; ?>"><?= $r['nama_desa']; ?></a></td>
                      <td class="text-right"><?= number_format($r['jumlah_petugas'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['jumlah_target'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['jumlah_capaian'], 0, ',', '.'); ?></td>
                      <td><?= $r['jumlah_target'] <= $r['jumlah_capaian'] ? '<span class="badge bg-success">Sudah Selesai</span>' : '<span class="badge bg-danger">Belum Selesai</span>'; ?></td>
                    </tr>
                  <?php $jpetugas += $r['jumlah_petugas'];
                    $jtarget += $r['jumlah_target'];
                    $jcapaian += $r['jumlah_capaian'];
                  endforeach; ?>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="3">Jumlah</th>
                    <th class="text-right pr-1"><?= number_format($jpetugas, 0, ',', '.'); ?></th>
                    <th class="text-right pr-1"><?= number_format($jtarget, 0, ',', '.'); ?></th>
                    <th class="text-right pr-1"><?= number_format($jcapaian, 0, ',', '.'); ?></th>
                    <th></th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>