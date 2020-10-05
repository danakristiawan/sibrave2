<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <span class="text-lg"><i class="fa fa-folder-o"></i> &nbsp;Daftar Olah Cepat</span>
            <a href="<?= base_url('olah-cepat/excel'); ?>" class="btn btn-outline-success float-right"><i class="fa fa-file-excel-o"></i> &nbsp;Export</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Kelurahan</th>
                    <th>Nama Kelurahan</th>
                    <th>Jumlah</th>
                    <th>Selesai</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($mfd as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['kdprop'] . $r['kdkota'] . $r['kdkec'] . $r['kddesa']; ?></td>
                      <td><?= $r['nmdesa']; ?></td>
                      <td><?= $r['jml']; ?></td>
                      <td><?= $r['selesai']; ?></td>
                      <td>
                        <a href="<?= base_url('olah-cepat/detail/') . $r['kdprop'] . $r['kdkota'] . $r['kdkec'] . $r['kddesa']; ?>" class="badge badge-success badge-sm"><i class="fa fa-search" data-toggle="tooltip" data-placement="bottom" title="Detail"></i></a>
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