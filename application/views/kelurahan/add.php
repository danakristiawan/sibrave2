<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <span class="text-lg"><i class="fa fa-folder-o"></i> &nbsp;Daftar Kelurahan</span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" id="example1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Kelurahan</th>
                                        <th>Nama Kelurahan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($master as $r) : $no++;
                                        $kode = $r['kdprov'] . $r['kdkab'] . $r['kdkec'] . $r['kddesa'] ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $kode; ?></td>
                                            <td><?= $r['nmdesa']; ?></td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-kelurahan" type="checkbox" <?= check_kelurahan($kegiatan_id, $sk_id, $kode); ?> data-kegiatan_id="<?= $kegiatan_id; ?>" data-sk_id="<?= $sk_id; ?>" data-kode_desa="<?= $kode; ?>" data-nama_desa="<?= $r['nmdesa']; ?>"> pilih
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="<?= base_url('kegiatan/kelurahan-index/') . $kegiatan_id . '/' . $sk_id; ?>" class="btn btn-info float-right"><i class="nav-icon fa fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>