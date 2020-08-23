<style type="text/css">
    table.page_header {
        width: 95%;
        border: none;
        padding: 0mm;
        border-spacing: 0px;
        margin-top: 10px;
        margin-left: 20px;
        margin-right: 20px;
        align-content: center;
        align-items: center;
        align-self: center;
        box-align: center;
        text-align: center;
    }

    table.page_footer {
        width: 100%;
        border: none;
        padding: 0mm;
        font-size: 7px;
    }

    td.logo {
        text-align: center;
        width: 100%;
        font-size: 13px;
        font-style: italic;
    }

    table.header {
        width: 100%;
        border: none;
        padding: 0mm;
        border-spacing: 0px;
        margin-top: 0;
        align-content: center;
        align-items: center;
        align-self: center;
        box-align: center;
        text-align: center;
    }

    td.head {
        text-align: center;
        width: 100%;
        font-size: 11px;
    }

    table.isi {
        width: 100%;
        border: none;
        padding: 0mm;
        border-spacing: 0px;
        margin-top: 5px;
        align-content: top;
        align-items: top;
        align-self: top;
        box-align: top;
        text-align: top;
    }

    td.isi_1 {
        text-align: left;
        width: 15%;
        font-size: 11px;
        vertical-align: top;
    }

    td.isi_2 {
        text-align: center;
        width: 5%;
        font-size: 11px;
        vertical-align: top;
    }

    td.isi_3 {
        text-align: justify;
        width: 80%;
        font-size: 11px;
        vertical-align: top;
    }

    td.isi_4 {
        text-align: left;
        width: 5%;
        font-size: 11px;
        vertical-align: top;
    }

    td.isi_5 {
        text-align: justify;
        width: 75%;
        font-size: 11px;
        vertical-align: top;
    }

    table.tabel {
        width: 100%;
        border: 1px solid black;
        border-collapse: collapse;
        padding: 0mm;
        border-spacing: 0px;
        margin-top: 5px;
        align-content: center;
        align-items: center;
        align-self: center;
        box-align: center;
        text-align: center;
        height: 10px;
    }

    td.tabel_1 {
        text-align: center;
        width: 5%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 35px;
    }

    td.tabel_2 {
        text-align: left;
        width: 20%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 35px;
        padding-left: 5px;
    }

    td.tabel_3 {
        text-align: center;
        width: 5%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 35px;
    }

    td.tabel_4 {
        text-align: right;
        width: 7%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 35px;
        padding-right: 5px;
    }

    td.tabel_5 {
        text-align: right;
        width: 11%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 35px;
        padding-right: 5px;
    }

    td.tabel_6 {
        text-align: right;
        width: 10%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 35px;
        padding-right: 5px;
    }

    td.tabel_7 {
        text-align: right;
        width: 5%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 35px;
        padding-right: 5px;
    }

    td.tabel_8 {
        text-align: right;
        width: 10%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 35px;
        padding-right: 5px;
    }

    td.tabel_9 {
        text-align: left;
        width: 27%;
        font-size: 11px;
        vertical-align: bottom;
        border: 1px solid black;
        height: 35px;
        padding-left: 5px;
    }

    td.tabel_10 {
        text-align: left;
        width: 15%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 15px;
        padding-left: 5px;
    }
</style>

<page backtop="20mm" backbottom="0mm" backleft="10mm" backright="10mm">
    <page_header>
    </page_header>
    <page_footer>
    </page_footer>
    <table class="header">
        <tr>
            <td class="head"><b>DAFTAR PEMBAYARAN HONORARIUM</b></td>
        </tr>
        <tr>
            <td class="head"><b><?= strtoupper($kegiatan['nama']); ?></b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 20px;">
        <tr>
            <td class="isi_1">Program</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nm_program']; ?> (<?= $sk['kd_program']; ?>)</td>
        </tr>
        <tr>
            <td class="isi_1">Kegiatan</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nm_kegiatan']; ?> (<?= $sk['kd_kegiatan']; ?>)</td>
        </tr>
        <tr>
            <td class="isi_1">Output</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nm_output']; ?> (<?= $sk['kd_output']; ?>)</td>
        </tr>
        <tr>
            <td class="isi_1">Komponen</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nm_komponen']; ?> (<?= $sk['kd_komponen']; ?>)</td>
        </tr>
        <tr>
            <td class="isi_1">Akun</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nm_akun']; ?> (<?= $sk['kd_akun']; ?>)</td>
        </tr>
        <tr>
            <td class="isi_1">Bulan</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= bulan($sk['tanggal']); ?> <?= date('Y', $sk['tanggal']); ?></td>
        </tr>
        <tr>
            <td class="isi_1">Nomor SK</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nomor']; ?></td>
        </tr>
    </table>
    <table class="tabel">
        <tr>
            <td class="tabel_1" style="text-align: center;">No</td>
            <td class="tabel_2" style="text-align: center;">Nama</td>
            <td class="tabel_3" style="text-align: center;">Gol</td>
            <td class="tabel_4" style="text-align: center;">Target</td>
            <td class="tabel_5" style="text-align: center;">Honor per Target (Rp)</td>
            <td class="tabel_6" style="text-align: center;">Jumlah Kotor (Rp)</td>
            <td class="tabel_7" style="text-align: center;">PPh</td>
            <td class="tabel_8" style="text-align: center;">Jumlah Bersih (Rp)</td>
            <td class="tabel_9" style="text-align: center; vertical-align:middle;">TTD</td>
        </tr>
        <tr>
            <td class="tabel_1" style="text-align: center; height:3px;">(1)</td>
            <td class="tabel_2" style="text-align: center; height:3px;">(2)</td>
            <td class="tabel_3" style="text-align: center; height:3px;">(3)</td>
            <td class="tabel_4" style="text-align: center; height:3px;">(4)</td>
            <td class="tabel_5" style="text-align: center; height:3px;">(5)</td>
            <td class="tabel_6" style="text-align: center; height:3px;">(6)</td>
            <td class="tabel_7" style="text-align: center; height:3px;">(7)</td>
            <td class="tabel_8" style="text-align: center; height:3px;">(8)</td>
            <td class="tabel_9" style="text-align: center; height:3px; vertical-align:middle;">(9)</td>
        </tr>
        <?php $no = 0;
        $jml = 0;
        foreach ($spj as $r) : $no++; ?>
            <tr>
                <td class="tabel_1"><?= $no; ?></td>
                <td class="tabel_2"><?= $r['nama']; ?></td>
                <td class="tabel_3"><?= $r['gol']; ?></td>
                <td class="tabel_4"><?= $sk['jenis_rate'] == 'Lumpsum' ? '-' : number_format($r['target'], 0, ',', '.'); ?></td>
                <td class="tabel_5"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
                <td class="tabel_6"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
                <td class="tabel_7">0</td>
                <td class="tabel_8"><?= number_format($r['bruto'], 0, ',', '.'); ?></td>
                <td class="tabel_9" style="text-align: <?= $no % 2 == 0 ? 'right' : 'left'; ?>;"><?= $no % 2 == 0 ? $no . '....................' : ''; ?><?= $no % 2 == 0 ? '' : $no . '....................'; ?></td>
            </tr>
        <?php $jml += $r['bruto'];
        endforeach; ?>
        <tr>
            <td class="tabel_1" style="height: 15px;" colspan="5">Total</td>
            <td class="tabel_6" style="height: 15px;"><?= number_format($jml, 0, ',', '.'); ?></td>
            <td class="tabel_7" style="height: 15px;">0</td>
            <td class="tabel_8" style="height: 15px;"><?= number_format($jml, 0, ',', '.'); ?></td>
            <td class="tabel_9" style="height: 15px;"></td>
        </tr>
        <tr>
            <td class="tabel_10" style="height: 15px;" colspan="9">Terbilang : <?= terbilang($jml, 4); ?> rupiah.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top:20px;">
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;">Setuju Dibayar,</td>
            <td style="width:34%; text-align:center;font-size:11px;">Lunas pada tgl</td>
            <td style="width:33%; text-align:center;font-size:11px;">Jakarta,</td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;">Pejabat Pembuat Komitmen</td>
            <td style="width:34%; text-align:center;font-size:11px;">Bendahara Pengeluaran</td>
            <td style="width:33%; text-align:center;font-size:11px;">Pembuat Daftar</td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;">BPS Kota Jakarta Selatan</td>
            <td style="width:34%; text-align:center;font-size:11px;"></td>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
        </tr>
    </table>
    <table class="isi" style="margin-top:30px;">
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;"><?= $ppk['nama_peg']; ?></td>
            <td style="width:34%; text-align:center;font-size:11px;"><?= $bendahara['nama_peg']; ?></td>
            <td style="width:33%; text-align:center;font-size:11px;"><?= $kegiatan['nama_peg']; ?></td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;">NIP. <?= $ppk['nip_peg']; ?></td>
            <td style="width:34%; text-align:center;font-size:11px;">NIP. <?= $bendahara['nip_peg']; ?></td>
            <td style="width:33%; text-align:center;font-size:11px;">NIP. <?= $kegiatan['nip_peg']; ?></td>
        </tr>
    </table>

</page>