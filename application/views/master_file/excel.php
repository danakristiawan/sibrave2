<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=MFD_" . $kdbps . ".xls");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master File Desa</title>
</head>

<body>
    <h3>
        <center>Master File Desa<center>
    </h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>kdprov</th>
                <th>kdkab</th>
                <th>kdkec</th>
                <th>kddesa</th>
                <th>nmprov</th>
                <th>nmkab</th>
                <th>nmkec</th>
                <th>nmdesa</th>
                <th>nmslsnon</th>
                <th>idsls</th>
                <th>kk</th>
                <th>bstt</th>
                <th>bsbtt</th>
                <th>bstt_k</th>
                <th>msubsls</th>
                <th>nama_ksls</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;
            $j = 0;
            foreach ($master_file as $r) : $no++;
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $r['kdprov']; ?></td>
                    <td><?= $r['kdkab']; ?></td>
                    <td><?= $r['kdkec']; ?></td>
                    <td><?= $r['kddesa']; ?></td>
                    <td><?= $r['nmprov']; ?></td>
                    <td><?= $r['nmkab']; ?></td>
                    <td><?= $r['nmkec']; ?></td>
                    <td><?= $r['nmdesa']; ?></td>
                    <td><?= $r['nmslsnon']; ?></td>
                    <td>'<?= $r['idsls']; ?></td>
                    <td><?= $r['kk']; ?></td>
                    <td><?= $r['bstt']; ?></td>
                    <td><?= $r['bsbtt']; ?></td>
                    <td><?= $r['bstt_k']; ?></td>
                    <td>'<?= $r['msubsls']; ?></td>
                    <td><?= $r['nama_ksls']; ?></td>
                </tr>
            <?php
            endforeach; ?>
        </tbody>
    </table>
</body>

</html>