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
</style>

<page backtop="30mm" backbottom="0mm" backleft="20mm" backright="20mm">
    <page_header>
        <table class="page_header" cellspacing="0px" cellpadding="0px">
            <tr>
                <td class="logo">
                    <img src="<?= base_url(); ?>assets/img/logobps.png" alt="logo bps" width="70">
                </td>
            </tr>
            <tr>
                <td class="logo">
                    <b><?= strtoupper($bps['nama']); ?></b>
                </td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">

        </table>
    </page_footer>
    <table class="header" style="margin-top: 20px; margin-bottom:10px;">
        <tr>
            <td class="head"><b>BERITA ACARA SERAH TERIMA</b></td>
        </tr>
        <tr>
            <td class="head"><b>KEGIATAN <?= strtoupper($kegiatan['nama']) ?></b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:100%; text-align:left;font-size:11px;">Yang bertanda tangan dibawah ini :</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:15%; text-align:left;font-size:11px;vertical-align:top;">Nama</td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:80%; text-align:left;font-size:11px;vertical-align:top;"><?= $petugas['nama']; ?></td>
        </tr>
        <tr>
            <td style="width:15%; text-align:left;font-size:11px;vertical-align:top;">NIK</td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:80%; text-align:left;font-size:11px;vertical-align:top;"><?= $petugas['nik']; ?></td>
        </tr>
        <tr>
            <td style="width:15%; text-align:left;font-size:11px;vertical-align:top;">Alamat</td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:80%; text-align:left;font-size:11px;vertical-align:top;"><?= $petugas['alamat']; ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px; margin-bottom:20px;">
        <tr>
            <td style="width:100%; text-align:left;font-size:11px; ">dengan ini menyerahkan hasil pekerjaan sebagai berikut :</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:2%; text-align:left;font-size:11px;vertical-align:top; height:35px;">1.</td>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
            <td style="width:90%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
        </tr>
        <tr>
            <td style="width:2%; text-align:left;font-size:11px;vertical-align:top; height:35px;">2.</td>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
            <td style="width:90%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
        </tr>
        <tr>
            <td style="width:2%; text-align:left;font-size:11px;vertical-align:top; height:35px;">3.</td>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
            <td style="width:90%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
        </tr>
        <tr>
            <td style="width:2%; text-align:left;font-size:11px;vertical-align:top; height:35px;">4.</td>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
            <td style="width:90%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
        </tr>
        <tr>
            <td style="width:2%; text-align:left;font-size:11px;vertical-align:top; height:35px;">5.</td>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
            <td style="width:90%; text-align:left;font-size:11px;vertical-align:top; height:35px;"></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:100%; text-align:left;font-size:11px;">Berdasarkan :</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Surat Keputusan</td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:75%; text-align:left;font-size:11px;vertical-align:top;">Nomor <?= $sk['nomor']; ?>, tanggal <?= tanggal($sk['tanggal']); ?></td>
        </tr>
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Surat Perintah Kerja</td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:75%; text-align:left;font-size:11px;vertical-align:top;">Nomor <?= $petugas['no_urut'] . $sk['no_spk']; ?>, tanggal <?= tanggal($sk['tgl_spk']); ?></td>
        </tr>
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Surat Tugas</td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:75%; text-align:left;font-size:11px;vertical-align:top;">Nomor <?= $petugas['no_urut'] . $sk['no_st']; ?>, tanggal <?= tanggal($sk['tgl_spk']); ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top:30px;">
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;">Yang Menerima,</td>
            <td style="width:34%; text-align:center;font-size:11px;"></td>
            <td style="width:33%; text-align:center;font-size:11px;">Jakarta,</td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;">Penanggungjawab Kegiatan</td>
            <td style="width:34%; text-align:center;font-size:11px;"></td>
            <td style="width:33%; text-align:center;font-size:11px;">Yang Menyerahkan</td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
            <td style="width:34%; text-align:center;font-size:11px;"></td>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
        </tr>
    </table>
    <table class="isi" style="margin-top:30px;">
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;"><?= $kegiatan['nama_peg']; ?></td>
            <td style="width:34%; text-align:center;font-size:11px;"></td>
            <td style="width:33%; text-align:center;font-size:11px;"><?= $petugas['nama']; ?></td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;">NIP. <?= $kegiatan['nip_peg']; ?></td>
            <td style="width:34%; text-align:center;font-size:11px;"></td>
            <td style="width:33%; text-align:center;font-size:11px;">NIK. <?= $petugas['nik']; ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top:30px;">
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
            <td style="width:34%; text-align:center;font-size:11px;">Mengetahui</td>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
            <td style="width:34%; text-align:center;font-size:11px;">Pejabat Pembuat Komitmen</td>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
            <td style="width:34%; text-align:center;font-size:11px;"><?= $bps['nama']; ?></td>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
        </tr>
    </table>
    <table class="isi" style="margin-top:30px;">
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
            <td style="width:34%; text-align:center;font-size:11px;"><?= $ppk['nama_peg']; ?></td>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
        </tr>
        <tr>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
            <td style="width:34%; text-align:center;font-size:11px;">NIP. <?= $ppk['nip_peg']; ?></td>
            <td style="width:33%; text-align:center;font-size:11px;"></td>
        </tr>
    </table>
</page>