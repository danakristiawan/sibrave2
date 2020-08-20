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

<page backtop="40mm" backbottom="0mm" backleft="20mm" backright="20mm">
    <page_header>
    </page_header>
    <page_footer>
        <table class="page_footer">

        </table>
    </page_footer>
    <table class="header">
        <tr>
            <td class="head"><b>SURAT TUGAS</b></td>
        </tr>
        <tr>
            <td class="head">Nomor : <?= $petugas['no_urut'] . $sk['no_st']; ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 25px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Menimbang</td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;">:</td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;">Bahwa dalam rangka Kegiatan <?= $kegiatan['nama']; ?> maka dipandang perlu melakukan <?= $kegiatan['jenis']; ?> kegiatan tersebut;</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Mengingat</td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;">:</td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;">1. Undang-undang No.16 Tahun 1997 tentang Statistik;</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;">2. Peraturan Pemerintah No.51 Tahun 1999 tentang Peyelenggaraan Statistik;</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;">3. Peraturan Pemerintah Nomor 45 Tahun 2013, tentang Tata Cara Pelaksanaan Anggaran Pendapatan dan Belanja Negara;</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;">4. Peraturan Presiden Republik Indonesia Nomor 86 Tahun 2007 tentang Badan Pusat Statistik;</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;">5. Peraturan Kepala Badan Pusat Statistik Nomor 7 Tahun 2008 tentang Organisasi dan Tata Kerja Badan Pusat Statistik;</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;"></td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;">6. Keputusan Kepala Badan Pusat Statistik No.121 Tahun 2001, tentang Organisasi dan Tata Kerja Badan Pusat Statistik di daerah;</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 15px;">
        <tr>
            <td class="head"><b>MEMBERI TUGAS:</b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 10px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Kepada</td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;">:</td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;"><?= $petugas['nama']; ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">NIK</td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;">:</td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;"><?= $petugas['nik']; ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Jabatan</td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;">:</td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;"><?= $petugas['pekerjaan']; ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Untuk</td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;">:</td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;">Melaksanakan kegiatan <?= $kegiatan['jenis']; ?> dalam rangka <?= $kegiatan['nama']; ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Waktu Pelaksanaan</td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;">:</td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;"><?= tanggal($kegiatan['tgl_mulai']); ?> - <?= tanggal($kegiatan['tgl_selesai']); ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;">Pembebanan</td>
            <td style="width:1%; text-align:left;font-size:11px;vertical-align:top;">:</td>
            <td style="width:79%; text-align:left;font-size:11px;vertical-align:top;"><?= $sk['kd_program'] . '.' . $sk['kd_kegiatan'] . '.' . $sk['kd_output'] . '.' . $sk['kd_komponen'] . '.' . $sk['kd_akun']; ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 25px;">
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">Jakarta, <?= tanggal($sk['tgl_st']); ?></td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">KEPALA <?= strtoupper($bps['nama']); ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 60px;">
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3"><b><?= $jabatan['nama_peg']; ?></b></td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">NIP. <?= $jabatan['nip_peg']; ?></td>
        </tr>
    </table>
</page>