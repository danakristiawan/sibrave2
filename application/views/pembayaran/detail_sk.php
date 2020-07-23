<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('pembayaran'); ?>">Daftar Kegiatan</a> / Daftar Surat Keputusan</span>
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
                    <th>Petugas</th>
                    <th>Jumlah</th>
                    <th>Cetak</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($sk as $r) : $no++;
                    $sk_id = $r['id']; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><a href="<?= base_url('pembayaran/detail-petugas/') . $kegiatan_id . '/'  . $sk_id; ?>"><?= $r['nomor']; ?></a></td>
                      <td><?= date('d-m-Y', $r['tanggal']); ?></td>
                      <td><?= $r['nama']; ?></td>
                      <?php
                      $query = $this->db->query("SELECT sk_id,COUNT(nik) as petugas,SUM(bruto) as jumlah FROM view_pembayaran WHERE kegiatan_id='$kegiatan_id' AND sk_id='$sk_id'")->row_array();
                      ?>
                      <td class="text-right"><?= number_format($query['petugas'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($query['jumlah'], 0, ',', '.'); ?></td>
                      <td><a href="<?= base_url('pembayaran/spj-cetak/') . $kegiatan_id . '/' . $sk_id; ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" title="SPJ"><i class="fa fa-file-pdf-o ml-2"></i></a></td>
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