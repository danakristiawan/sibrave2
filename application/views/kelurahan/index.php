<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('kegiatan'); ?>">Daftar Kegiatan / </a><a href="<?= base_url('kegiatan/sk-index/') . $kegiatan_id; ?>">Daftar Surat Keputusan / </a>Daftar Kelurahan</span>
            <a href="<?= base_url('kegiatan/kelurahan-add/') . $kegiatan_id . '/' . $sk_id; ?>" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fa fa-plus"></i></a>
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
                    <th>Jumlah Bruto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  $jpetugas = 0;
                  $jtarget = 0;
                  $jbruto = 0;
                  foreach ($kelurahan as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['kode_desa']; ?></td>
                      <td><a href="<?= base_url('kegiatan/petugas-index/') . $kegiatan_id . '/' . $sk_id . '/'  . $r['id']; ?>"><?= $r['nama_desa']; ?></a></td>
                      <td class="text-right"><?= number_format($r['jumlah_petugas'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['jumlah_target'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['jumlah_bruto'], 0, ',', '.'); ?></td>
                      <td>
                        <a href="<?= base_url('kegiatan/kelurahan-delete/') . $kegiatan_id . '/' . $sk_id . '/' . $r['id']; ?>" class="badge badge-danger badge-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i></a>
                      </td>
                    </tr>
                  <?php $jpetugas += $r['jumlah_petugas'];
                    $jtarget += $r['jumlah_target'];
                    $jbruto += $r['jumlah_bruto'];
                  endforeach; ?>
                </tbody>
                <thead>
                  <tr>
                    <th colspan="3">Jumlah</th>
                    <th class="text-right pr-1"><?= number_format($jpetugas, 0, ',', '.'); ?></th>
                    <th class="text-right pr-1"><?= number_format($jtarget, 0, ',', '.'); ?></th>
                    <th class="text-right pr-1"><?= number_format($jbruto, 0, ',', '.'); ?></th>
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