<section class="content">
  <div class="container-fluid">

    <div class="row">
      <?php foreach ($kegiatan as $r) : ?>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
          <div class="card">
            <div class="card-header text-muted border-bottom-0">
              <?= $r['jenis']; ?>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b><?= $r['nama']; ?></b></h2>
                  <ul class="ml-4 mt-4 mb-0 fa-ul text-muted">
                    <li class="small mb-2"><span class="fa-li"><i class="fa fa-users"></i></span> Jumlah Petugas: <?= number_format($r['jml_petugas'], 0, ',', '.'); ?>
                    </li>
                    <li class="small mb-2"><span class="fa-li"><i class="fa fa-calendar"></i></span> Tgl Mulai: <?= date('d-m-Y', $r['tgl_mulai']); ?>
                    </li>
                    <li class="small"><span class="fa-li"><i class="fa fa-calendar"></i></span> Tgl Selesai: <?= date('d-m-Y', $r['tgl_selesai']); ?></li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="<?= base_url('assets/img/') . $r['file']; ?>" alt="" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="#" class="btn btn-outline-info">
                  <i class="fa fa-search"></i> Informasi Detail
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>