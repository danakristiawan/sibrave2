<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <span class="text-lg"><i class="fa fa-folder-o"></i> &nbsp;Daftar Olah Cepat</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Desa</th>
                    <th>Kode SLS</th>
                    <th>Nama SLS</th>
                    <th>Urut KK</th>
                    <th>107a</th>
                    <th>107b</th>
                    <th>107c</th>
                    <th>107d</th>
                    <th>108a</th>
                    <th>108b</th>
                    <th>Jml 4a</th>
                    <th>Jml 4b</th>
                    <th>Jml 4c</th>
                    <th>Jml 5</th>
                    <th>Nama Ketua SLS</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($mfd as $r) : $no++; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['nmdesa']; ?></td>
                      <td><?= $r['kdsls']; ?></td>
                      <td><?= $r['nmslsnon']; ?></td>
                      <td><?= $r['no_urut_besar']; ?></td>
                      <td><?= $r['107a']; ?></td>
                      <td><?= $r['107b']; ?></td>
                      <td><?= $r['107c']; ?></td>
                      <td><?= $r['107d']; ?></td>
                      <td><?= $r['108a']; ?></td>
                      <td><?= $r['108b']; ?></td>
                      <td><?= $r['jml_4a']; ?></td>
                      <td><?= $r['jml_4b']; ?></td>
                      <td><?= $r['jml_4c']; ?></td>
                      <td><?= $r['jml_5']; ?></td>
                      <td><?= $r['nm_ketuasls']; ?></td>
                      <td>
                        <a href="<?= base_url('olah-cepat/edit/') . $kode . '/' . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></i></a>
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