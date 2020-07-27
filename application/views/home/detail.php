<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h5><i class="fa fa-search"></i> Informasi Detail</h5>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <td>Surat Keputusan</td>
                  <td>Nomor : <?= $kegiatan['no_sk']; ?></td>
                  <td>Tanggal : <?= $kegiatan['tgl_sk'] == null ? '' : tanggal($kegiatan['tgl_sk']); ?></td>
                </tr>
                <tr>
                  <td>Surat Perintah Kerja (SPK)</td>
                  <td>Nomor : <?= $kegiatan['no_spk']; ?></td>
                  <td>Tanggal : <?= $kegiatan['tgl_spk'] == null ? '' : tanggal($kegiatan['tgl_spk']); ?></td>
                </tr>
                <tr>
                  <td>Surat Tugas</td>
                  <td>Nomor : <?= $kegiatan['no_st']; ?></td>
                  <td>Tanggal : <?= $kegiatan['tgl_st'] == null ? '' : tanggal($kegiatan['tgl_st']); ?></td>
                </tr>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <a href="<?= base_url('home'); ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Kembali</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>