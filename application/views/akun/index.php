<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <span class="text-lg"><i class="fa fa-folder-o"></i> &nbsp;Daftar Akun</span>
            <a href="<?= base_url('akun/add'); ?>" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fa fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Uraian</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($akun as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['kd_program'] . '.' . $r['kd_kegiatan'] . '.' . $r['kd_output'] . '.' . $r['kd_komponen'] . '.' . $r['kd_akun']; ?></td>
                      <td>
                        <p class="mb-0 pb-0"><?= $r['nm_program']; ?></p>
                        <p class="mb-0 pb-0"><?= $r['nm_kegiatan']; ?></p>
                        <p class="mb-0 pb-0"><?= $r['nm_output']; ?></p>
                        <p class="mb-0 pb-0"><?= $r['nm_komponen']; ?></p>
                        <p class="mb-0 pb-0"><?= $r['nm_akun']; ?></p>
                      </td>
                      <td>
                        <a href="<?= base_url('akun/edit/') . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></i></a>
                        <a href="<?= base_url('akun/delete/') . $r['id']; ?>" class="badge badge-danger badge-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i></a>
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