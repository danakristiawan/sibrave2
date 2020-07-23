<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <form action="" method="post" autocomplete="off">
                        <div class="card-header">
                            <span style="font-size:18px;"><i class="fa fa-folder-o"></i> &nbsp;<a href="<?= base_url('persetujuan'); ?>">Daftar Kegiatan / </a><a href="<?= base_url('persetujuan/detail-sk/') . $kegiatan_id; ?>">Daftar Surat Keputusan / </a><a href="<?= base_url('persetujuan/detail-petugas/') . $kegiatan_id . '/' . $sk_id; ?>">Daftar Petugas / </a>Daftar Capaian</span>
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
                                            <th>Proses</th>
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
                                                    <a href="<?= base_url('persetujuan/edit/') . $kegiatan_id . '/' . $sk_id . '/' . $nik . '/' . $r['id']; ?>" class="badge badge-success badge-sm"><i class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Proses"></i></a>
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
                        <div class="card-footer">
                            <input type="hidden" name="capaian" value="<?= $total; ?>">
                            <button type="submit" class="btn btn-info float-right ml-2"><i class="fa fa-save"></i> Simpan</button>
                            <a href="<?= base_url('persetujuan/detail-petugas/') . $kegiatan_id . '/' . $sk_id; ?>" class="btn btn-secondary float-right"><i class="fa fa-undo"></i> Batal</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>