<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('persetujuan'); ?>">Daftar Kegiatan / </a><a href="<?= base_url('persetujuan/detail-sk/') . $kegiatan_id; ?>">Daftar Surat Keputusan / </a><a href="<?= base_url('persetujuan/detail-kelurahan/') . $kegiatan_id . '/' . $sk_id; ?>">Daftar Kelurahan / </a>Daftar Petugas</span>
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
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  $jtarget = 0;
                  $jcapaian = 0;
                  foreach ($petugas as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><a href="<?= base_url('persetujuan/detail-capaian/') . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id .  '/' . $r['nik']; ?>"><?= $r['nik']; ?></a></td>
                      <td><?= $r['nama']; ?></td>
                      <td class="text-right"><?= number_format($r['target'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['capaian'], 0, ',', '.'); ?></td>
                      <td><?= $r['target'] <= $r['capaian'] ? '<span class="badge bg-success">Sudah Selesai</span>' : '<span class="badge bg-danger">Belum Selesai</span>'; ?></td>
                    </tr>
                  <?php $jtarget += $r['target'];
                    $jcapaian += $r['capaian'];
                  endforeach; ?>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="3">Jumlah</th>
                    <th class="text-right pr-1"><?= number_format($jtarget, 0, ',', '.'); ?></th>
                    <th class="text-right pr-1"><?= number_format($jcapaian, 0, ',', '.'); ?></th>
                    <th></th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <form action="" method="post" autocomplete="off">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
              <input type="hidden" name="jumlah_capaian" value="<?= $jcapaian; ?>">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>