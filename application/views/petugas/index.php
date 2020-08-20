<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('kegiatan'); ?>">Daftar Kegiatan / </a><a href="<?= base_url('kegiatan/sk-index/') . $kegiatan_id; ?>">Daftar Surat Keputusan / </a><a href="<?= base_url('kegiatan/kelurahan-index/') . $kegiatan_id . '/' . $sk_id; ?>">Daftar Kelurahan / </a>Daftar Petugas</span>
            <a href="<?= base_url('kegiatan/cetak-spk-all/') . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id; ?>" class="btn btn-sm btn-secondary float-right ml-2" data-toggle="tooltip" data-placement="bottom" title="Cetak"><i class="fa fa-print"></i></a>
            <a href="<?= base_url('kegiatan/petugas-add/') . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id; ?>" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fa fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>No Urut</th>
                    <th>Target</th>
                    <th>Bruto</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  $jtarget = 0;
                  $jbruto = 0;
                  foreach ($petugas as $r) : $no++;
                  ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['nik']; ?></td>
                      <td><?= $r['nama']; ?></td>
                      <td><?= $r['no_urut']; ?></td>
                      <td class="text-right"><?= number_format($r['target'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
                      <td>
                        <a href="<?= base_url('kegiatan/spk-cetak/') . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id . '/' . $r['id']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="SPK"><i class="fa fa-file-pdf-o"></i></a>
                        <a href="<?= base_url('kegiatan/st-cetak/') . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id . '/' . $r['id']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="ST"><i class="fa fa-file-pdf-o ml-2"></i></a>
                      </td>
                      <td>
                        <a href="<?= base_url('kegiatan/target-edit/') . $kegiatan_id . '/' . $sk_id . '/' .  $kelurahan_id . '/' . $r['id']; ?>" class="badge badge-warning badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Rekam Target"></i></a>
                        <a href="<?= base_url('kegiatan/petugas-delete/') . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id . '/' . $r['id']; ?>" class="badge badge-danger badge-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i></a>
                      </td>
                    </tr>
                  <?php
                    $jtarget += $r['target'];
                    $jbruto += $r['bruto'];
                  endforeach; ?>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="4">Jumlah</th>
                    <th class="text-right pr-1"><?= number_format($jtarget, 0, ',', '.'); ?></th>
                    <th class="text-right pr-1"><?= number_format($jbruto, 0, ',', '.'); ?></th>
                    <th colspan="2"></th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <form action="" method="post" autocomplete="off">
              <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
              <input type="hidden" name="jumlah_petugas" value="<?= $no; ?>">
              <input type="hidden" name="jumlah_target" value="<?= $jtarget; ?>">
              <input type="hidden" name="jumlah_bruto" value="<?= $jbruto; ?>">
              <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>