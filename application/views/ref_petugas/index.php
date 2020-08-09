<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <span class="text-lg"><i class="fa fa-folder-o"></i> &nbsp;Daftar Petugas</span>
            <a href="<?= base_url('petugas/add'); ?>" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fa fa-plus"></i></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Kel</th>
                    <th>Pekerjaan</th>
                    <th>Agama</th>
                    <th>Status</th>
                    <th>Pendidikan</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>NPWP</th>
                    <th>Alamat</th>
                    <th>No Rekening</th>
                    <th>Bank</th>
                    <th>Atas Nama</th>
                    <th>Gol</th>
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
                      <td><?= $r['tempat_lhr']; ?>, <?= date('d-m-Y', $r['tgl_lhr']); ?></td>
                      <td><?= $r['jenis_kel']; ?></td>
                      <td><?= $r['pekerjaan']; ?></td>
                      <td><?= $r['agama']; ?></td>
                      <td><?= $r['status_kawin']; ?></td>
                      <td><?= $r['pendidikan']; ?></td>
                      <td><?= $r['nohp']; ?></td>
                      <td><?= $r['email']; ?></td>
                      <td><?= $r['npwp']; ?></td>
                      <td><?= $r['jalan']; ?> RT <?= $r['rt']; ?> RW <?= $r['rw']; ?> Kel <?= $r['kel']; ?> Kec <?= $r['kec']; ?> Kab/Kota <?= $r['kota']; ?> Provinsi <?= $r['prov']; ?></td>
                      <td><?= $r['rekening']; ?></td>
                      <td><?= $r['nama_bank']; ?></td>
                      <td><?= $r['nama_rek']; ?></td>
                      <td><?= $r['gol']; ?></td>
                      <td>
                        <a href="<?= base_url('petugas/edit/') . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></i></a>
                        <a href="<?= base_url('petugas/delete/') . $r['id']; ?>" class="badge badge-danger badge-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i></a>
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