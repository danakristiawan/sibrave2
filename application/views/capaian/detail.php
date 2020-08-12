<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('capaian'); ?>">Daftar Kegiatan / </a>Daftar Capaian (Target: <?= number_format($target['target'], 0, ',', '.'); ?>)</span>
                        <?php if ($target['target'] > $target['capaian']) : ?>
                            <a href="<?= base_url('capaian/add/') . $kegiatan_id; ?>" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="bottom" title="Tambah"><i class="fa fa-plus"></i></a>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" id="example1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    $total = 0;
                                    foreach ($capaian as $r) : $no++; ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= tanggal($r['date_created']); ?></td>
                                            <td><?= number_format($r['jumlah'], 0, ',', '.'); ?></td>
                                            <td><?= $r['status'] == 0 ? '<span class="badge bg-danger">belum disetujui</span>' : '<span class="badge bg-success">sudah disetujui</span>'; ?></td>
                                            <td>
                                                <?php if ($r['status'] == 0) : ?>
                                                    <a href="<?= base_url('capaian/edit/') . $kegiatan_id . '/' . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Ubah"></i></a>
                                                    <a href="<?= base_url('capaian/delete/') . $kegiatan_id . '/'  . $r['id']; ?>" class="badge badge-danger badge-sm" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');"><i class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></i></a>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php
                                        $total += $r['jumlah'];
                                    endforeach; ?>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th colspan="2">Total</th>
                                        <th><?= number_format($total, 0, ',', '.'); ?></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>