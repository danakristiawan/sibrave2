<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
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
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0;
                                    $j1 = 0;
                                    $j2 = 0;
                                    foreach ($petugas as $r) : $no++; ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $r['nik']; ?></td>
                                            <td><?= $r['nama']; ?></td>
                                            <td class="text-right"><?= number_format($r['jml'], 0, ',', '.'); ?></td>
                                            <td class="text-right"><?= number_format($r['capaian'], 0, ',', '.'); ?></td>
                                            <td><?= $r['jml'] <= $r['capaian'] ? '<span class="badge bg-success">Sudah Selesai</span>' : '<span class="badge bg-danger">Belum Selesai</span>'; ?></td>
                                        </tr>
                                    <?php $j1 += $r['jml'];
                                        $j2 += $r['capaian'];
                                    endforeach; ?>
                                </tbody>
                                <thead>
                                    <tr>
                                        <th colspan="3">Jumlah</th>
                                        <th class="text-right" style="padding-right: 5px;"><?= number_format($j1, 0, ',', '.'); ?></th>
                                        <th class="text-right" style="padding-right: 5px;"><?= number_format($j2, 0, ',', '.'); ?></th>
                                        <th></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="height:230px"></canvas>
                        </div>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
    </div>
</section>