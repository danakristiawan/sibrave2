<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=MFD_" . $kdbps . ".xls");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Olah Cepat DP2</title>
</head>

<body>
    <h3>
        <center>Daftar Olah Cepat DP2<center>
    </h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>nmprop</th>
                <th>kdprop</th>
                <th>nmkota</th>
                <th>kdkota</th>
                <th>nmkec</th>
                <th>kdkec</th>
                <th>nmdesa</th>
                <th>kddesa</th>
                <th>idsls</th>
                <th>kdsls</th>
                <th>kdsub</th>
                <th>nmslsnon</th>
                <th>no_urut_besar</th>
                <th>107a</th>
                <th>107b</th>
                <th>107c</th>
                <th>107d</th>
                <th>108a</th>
                <th>108b</th>
                <th>jml_4a</th>
                <th>jml_4b</th>
                <th>jml_4c</th>
                <th>jml_5</th>
                <th>nm_ketuasls</th>
                <th>nm_operator</th>
                <th>Kode Pengolah</th>
                <th>Tgl Mulai</th>
                <th>Tgl Selesai</th>
                <th>4a_rev</th>
                <th>4b_rev</th>
                <th>4c_rev</th>
                <th>5_rev</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;
            $j = 0;
            foreach ($mfd as $r) : $no++;
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $r['nmprop']; ?></td>
                    <td><?= $r['kdprop']; ?></td>
                    <td><?= $r['nmkota']; ?></td>
                    <td><?= $r['kdkota']; ?></td>
                    <td><?= $r['nmkec']; ?></td>
                    <td>'<?= $r['kdkec']; ?></td>
                    <td><?= $r['nmdesa']; ?></td>
                    <td>'<?= $r['kddesa']; ?></td>
                    <td>'<?= $r['idsls']; ?></td>
                    <td>'<?= $r['kdsls']; ?></td>
                    <td><?= $r['kdsub']; ?></td>
                    <td><?= $r['nmslsnon']; ?></td>
                    <td><?= $r['no_urut_besar']; ?></td>
                    <td><?= $r['107a']; ?></td>
                    <td><?= $r['107b']; ?></td>
                    <td><?= $r['107c']; ?></td>
                    <td><?= $r['107d']; ?></td>
                    <td><?= $r['108a']; ?></td>
                    <td><?= $r['108b']; ?></td>
                    <td><?= $r['jml_4a']; ?></td>
                    <td><?= $r['jml_4b']; ?></td>
                    <td><?= $r['jml_4c']; ?></td>
                    <td><?= $r['jml_5']; ?></td>
                    <td><?= $r['nm_ketuasls']; ?></td>
                    <td><?= $r['nm_operator']; ?></td>
                    <td><?= $r['kd_pengolah']; ?></td>
                    <td><?= $r['tgl_mulai'] ? date('d-m-Y', $r['tgl_mulai']) : ''; ?></td>
                    <td><?= $r['tgl_selesai'] ? date('d-m-Y', $r['tgl_selesai']) : ''; ?></td>
                    <td><?= $r['4a_rev']; ?></td>
                    <td><?= $r['4b_rev']; ?></td>
                    <td><?= $r['4c_rev']; ?></td>
                    <td><?= $r['5_rev']; ?></td>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>