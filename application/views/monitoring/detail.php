<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm" id="example1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>No SPK</th>
                                        <th>Tgl SPK</th>
                                        <th>No ST</th>
                                        <th>Tgl ST</th>
                                        <th>Target</th>
                                        <th>Satuan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    foreach ($petugas as $r) : $no++; ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $r['nik']; ?></td>
                                            <td><?= $r['nama']; ?></td>
                                            <td><?= $r['no_spk']; ?></td>
                                            <td><?= $r['tgl_spk'] == null ? '' : date('d-m-Y', $r['tgl_spk']); ?></td>
                                            <td><?= $r['no_st']; ?></td>
                                            <td><?= $r['tgl_st'] == null ? '' : date('d-m-Y', $r['tgl_st']); ?></td>
                                            <td class="text-right"><?= number_format($r['jml'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($r['satuan'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
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