<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Daftar_Petugas.xls");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Petugas</title>
</head>

<body>
    <h3>
        <center>Daftar Petugas<center>
    </h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lhr</th>
                <th>Tgl Lhr</th>
                <th>Kel</th>
                <th>Pekerjaan</th>
                <th>Agama</th>
                <th>Status</th>
                <th>Pendidikan</th>
                <th>No HP</th>
                <th>Email</th>
                <th>NPWP</th>
                <th>Jalan</th>
                <th>Rt</th>
                <th>Rw</th>
                <th>Kel</th>
                <th>Kec</th>
                <th>Kota</th>
                <th>Prov</th>
                <th>No Rekening</th>
                <th>Bank</th>
                <th>Atas Nama</th>
                <th>Gol</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;
            foreach ($petugas as $r) : $no++; ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td>NIK.<?= $r['nik']; ?></td>
                    <td><?= $r['nama']; ?></td>
                    <td><?= $r['tempat_lhr']; ?></td>
                    <td><?= date('d-m-Y', $r['tgl_lhr']); ?></td>
                    <td><?= $r['jenis_kel']; ?></td>
                    <td><?= $r['pekerjaan']; ?></td>
                    <td><?= $r['agama']; ?></td>
                    <td><?= $r['status_kawin']; ?></td>
                    <td><?= $r['pendidikan']; ?></td>
                    <td><?= $r['nohp']; ?></td>
                    <td><?= $r['email']; ?></td>
                    <td><?= $r['npwp']; ?></td>
                    <td><?= $r['jalan']; ?></td>
                    <td>RT <?= $r['rt']; ?></td>
                    <td>RW <?= $r['rw']; ?></td>
                    <td>Kel <?= $r['kel']; ?></td>
                    <td>Kec <?= $r['kec']; ?></td>
                    <td>Kab/Kota <?= $r['kota']; ?></td>
                    <td>Provinsi <?= $r['prov']; ?></td>
                    <td><?= $r['rekening']; ?></td>
                    <td><?= $r['nama_bank']; ?></td>
                    <td><?= $r['nama_rek']; ?></td>
                    <td><?= $r['gol']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>