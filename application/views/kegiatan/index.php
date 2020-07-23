<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <?= $this->session->flashdata('message'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;Daftar Kegiatan</span>
            <a href="<?= base_url('kegiatan/add'); ?>" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fa fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Petugas</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Penanggungjawab</th>
                    <th>File</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($kegiatan as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><a href="<?= base_url('kegiatan/sk-index/') . $r['id']; ?>"><?= $r['nama']; ?></a></td>
                      <td><?= $r['jenis']; ?></td>
                      <td><?= number_format($r['jml_petugas'], 0, ',', '.'); ?></td>
                      <td><?= date('d-m-Y', $r['tgl_mulai']); ?></td>
                      <td><?= date('d-m-Y', $r['tgl_selesai']); ?></td>
                      <td><?= $r['nm_pj']; ?></td>
                      <td><a href="<?= base_url('assets/img/') . $r['file']; ?>" target="_blank"><i class="fa fa-file-image-o"></i></a></td>
                      <td>
                        <a href="<?= base_url('kegiatan/edit/') . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></i></a>
                        <a href="<?= base_url('kegiatan/delete/') . $r['id']; ?>" class="badge badge-danger badge-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i></a>
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