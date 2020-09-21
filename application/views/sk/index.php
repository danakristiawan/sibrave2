<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('kegiatan'); ?>">Daftar Kegiatan</a> / Daftar Surat Keputusan</span>
            <a href="<?= base_url('kegiatan/sk-add/') . $kegiatan_id; ?>" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fa fa-plus"></i></a>
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
                    <th>No DIPA</th>
                    <th>Akun</th>
                    <th>Rate</th>
                    <th>Jenis</th>
                    <th>No SPK</th>
                    <th>Tgl SPK</th>
                    <th>Periode</th>
                    <th>No ST</th>
                    <th>Tgl ST</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($sk as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><a href="<?= base_url('kegiatan/kelurahan-index/') . $kegiatan_id . '/'  . $r['id']; ?>"><?= $r['nomor']; ?></a></td>
                      <td><?= date('d-m-Y', $r['tanggal']); ?></td>
                      <td><?= $r['nama']; ?></td>
                      <td><?= $r['no_dipa']; ?></td>
                      <td><?= $r['kd_program'] . '.' . $r['kd_kegiatan'] . '.' . $r['kd_output'] . '.' . $r['kd_komponen'] . '.' . $r['kd_akun']; ?></td>
                      <td><?= number_format($r['rate'], 0, ',', '.'); ?></td>
                      <td><?= $r['jenis_rate']; ?></td>
                      <td><?= $r['no_spk']; ?></td>
                      <td><?= date('d-m-Y', $r['tgl_spk']); ?></td>
                      <td><?= $r['lama']; ?></td>
                      <td><?= $r['no_st']; ?></td>
                      <td><?= date('d-m-Y', $r['tgl_st']); ?></td>
                      <td>
                        <a href="<?= base_url('kegiatan/sk-cetak/') . $kegiatan_id . '/' . $r['id']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="SK"><i class="fa fa-file-pdf-o"></i></a>
                        <a href="<?= base_url('kegiatan/sk-excel/') . $kegiatan_id . '/' . $r['id']; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Excel"><i class="fa fa-file-excel-o ml-2"></i></a>
                      </td>
                      <td>
                        <a href="<?= base_url('kegiatan/sk-edit/') . $kegiatan_id . '/' . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></i></a>
                        <a href="<?= base_url('kegiatan/sk-delete/') . $kegiatan_id . '/'  . $r['id']; ?>" class="badge badge-danger badge-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i></a>
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