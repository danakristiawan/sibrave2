<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <span class="text-lg"><i class="fa fa-folder-o"></i> &nbsp;Daftar Petugas</span>
            <a href="<?= base_url('kegiatan/petugas-add/') . $kegiatan_id . '/' . $sk_id; ?>" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fa fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gol</th>
                    <th>No SPK</th>
                    <th>Tgl SPK</th>
                    <th>No ST</th>
                    <th>Tgl ST</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($petugas as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['nik']; ?></td>
                      <td><?= $r['nama']; ?></td>
                      <td><?= $r['jabatan']; ?></td>
                      <td><?= $r['gol']; ?></td>
                      <td><?= $r['no_spk']; ?></td>
                      <td><?= $r['tgl_spk'] == null ? '' : date('d-m-Y', $r['tgl_spk']); ?></td>
                      <td><?= $r['no_st']; ?></td>
                      <td><?= $r['tgl_st'] == null ? '' : date('d-m-Y', $r['tgl_st']); ?></td>
                      <td>
                        <a href="<?= base_url('kegiatan/spk-cetak/') . $kegiatan_id . '/' . $sk_id . '/' . $r['id']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="SPK"><i class="fa fa-file-pdf-o"></i></a>
                        <a href="<?= base_url('kegiatan/st-cetak/') . $kegiatan_id . '/' . $sk_id . '/' . $r['id']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="ST"><i class="fa fa-file-pdf-o ml-2"></i></a>
                      </td>
                      <td>
                        <a href="<?= base_url('kegiatan/spk-edit/') . $kegiatan_id . '/' . $sk_id . '/' . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Rekam SPK"></i></a>
                        <a href="<?= base_url('kegiatan/st-edit/') . $kegiatan_id . '/' . $sk_id . '/' . $r['id']; ?>" class="badge badge-info badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Rekam ST"></i></a>
                        <a href="<?= base_url('kegiatan/petugas-delete/') . $kegiatan_id . '/' . $sk_id . '/' . $r['id']; ?>" class="badge badge-danger badge-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i></a>
                      </td>
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