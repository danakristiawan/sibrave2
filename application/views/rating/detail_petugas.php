<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('rating'); ?>">Daftar Kegiatan / </a><a href="<?= base_url('rating/detail-sk/') . $kegiatan_id; ?>">Daftar Surat Keputusan / </a>Daftar Petugas</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-sm table-hover" id="example1">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Target</th>
                    <th>Capaian</th>
                    <th>Rating</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 0;
                  foreach ($petugas as $r) : $no++;
                    $petugas_id = $r['id']; ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $r['nik']; ?></td>
                      <td><?= $r['nama']; ?></td>
                      <td class="text-right"><?= number_format($r['target'], 0, ',', '.'); ?></td>
                      <td class="text-right"><?= number_format($r['capaian'], 0, ',', '.'); ?></td>
                      <td>
                        <div class="review-block-rate">
                          <?php $rating = $r['rating']; ?>
                          <?php if ($rating == 5) : ?>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/1'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/2'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/3'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/4'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/5'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                          <?php elseif ($rating == 4) : ?>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/1'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/2'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/3'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/4'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/5'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                          <?php elseif ($rating == 3) : ?>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/1'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/2'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/3'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/4'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/5'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                          <?php elseif ($rating == 2) : ?>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/1'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/2'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/3'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/4'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/5'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                          <?php elseif ($rating == 1) : ?>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/1'; ?>" class="btn btn-warning btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/2'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/3'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/4'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/5'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                          <?php else : ?>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/1'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/2'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/3'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/4'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                            <a href="<?= base_url('rating/edit-rating/') . $kegiatan_id . '/' . $sk_id . '/' . $petugas_id . '/5'; ?>" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                              <span class="fa fa-star" aria-hidden="true"></span>
                            </a>
                          <?php endif; ?>
                        </div>
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