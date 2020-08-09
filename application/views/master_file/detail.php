<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <span class="text-lg"><i class="fa fa-folder-o"></i> &nbsp;Daftar Master File</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>kdprov</th>
                    <th>kdkab</th>
                    <th>kdkec</th>
                    <th>kddesa</th>
                    <th>nmprov</th>
                    <th>nmkab</th>
                    <th>nmkec</th>
                    <th>nmdesa</th>
                    <th>nmslsnon</th>
                    <th>idsls</th>
                    <th>kk</th>
                    <th>bstt</th>
                    <th>bsbtt</th>
                    <th>bstt_k</th>
                    <th>msubsls</th>
                    <th>nama_ksls</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($master_file as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['kdprov']; ?></td>
                      <td><?= $r['kdkab']; ?></td>
                      <td><?= $r['kdkec']; ?></td>
                      <td><?= $r['kddesa']; ?></td>
                      <td><?= $r['nmprov']; ?></td>
                      <td><?= $r['nmkab']; ?></td>
                      <td><?= $r['nmkec']; ?></td>
                      <td><?= $r['nmdesa']; ?></td>
                      <td><?= $r['nmslsnon']; ?></td>
                      <td><?= $r['idsls']; ?></td>
                      <td><?= $r['kk']; ?></td>
                      <td><?= $r['bstt']; ?></td>
                      <td><?= $r['bsbtt']; ?></td>
                      <td><?= $r['bstt_k']; ?></td>
                      <td><?= $r['msubsls']; ?></td>
                      <td><?= $r['nama_ksls']; ?></td>
                      <td>
                        <a href="<?= base_url('master-file/edit/') . $kode . '/' . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></i></a>
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