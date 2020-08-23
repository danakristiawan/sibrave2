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

    td.tabel_1 {
        text-align: center;
        width: 10%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 15px;
    }

    td.tabel_2 {
        text-align: left;
        width: 40%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 15px;
        padding-left: 5px;
    }

    td.tabel_3 {
        text-align: left;
        width: 20%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 15px;
        padding-left: 5px;
    }

    td.tabel_4 {
        text-align: left;
        width: 30%;
        font-size: 11px;
        vertical-align: middle;
        border: 1px solid black;
        height: 15px;
        padding-left: 5px;
    }
</style>

<page backtop="10mm" backbottom="30mm" backleft="20mm" backright="20mm">
    <page_header>

    </page_header>
    <page_footer>
        <table class="page_footer">

        </table>
    </page_footer>
    <table class="page_header" cellspacing="0px" cellpadding="0px">
        <tr>
            <td class="logo">
                <img src="<?= base_url(); ?>assets/img/logobps.png" alt="logo bps" width="70">
            </td>
        </tr>
        <tr>
            <td class="logo">
                <b>BADAN PUSAT STATISTIK</b>
            </td>
        </tr>
        <tr>
            <td class="logo">
                <b><?= strtoupper(substr($bps['nama'], 3, strlen($bps['nama']) - 3)); ?></b>
            </td>
        </tr>
    </table>
    <table class="header" style="margin-top: 25px;">
        <tr>
            <td class="head"><b>KEPUTUSAN</b></td>
        </tr>
        <tr>
            <td class="head"><b>KEPALA BADAN PUSAT STATISTIK <?= strtoupper(substr($bps['nama'], 3, strlen($bps['nama']) - 3)); ?></b></td>
        </tr>
        <tr>
            <td class="head"><b>NOMOR : <?= $sk['nomor']; ?></b></td>
        </tr>
    </table>
    <table class="header" style="margin-top: 15px;">
        <tr>
            <td class="head"><b>TENTANG</b></td>
        </tr>
    </table>
    <table class="header" style="margin-top: 15px;">
        <tr>
            <td class="head"><b><?= strtoupper($sk['nama']); ?></b></td>
        </tr>
        <tr>
            <td class="head"><b>BADAN PUSAT STATISTIK <?= strtoupper(substr($bps['nama'], 3, strlen($bps['nama']) - 3)); ?></b></td>
        </tr>
        <tr>
            <td class="head"><b>TAHUN ANGGARAN <?= substr($sk['nomor'], strlen($sk['nomor']) - 4, 4); ?></b></td>
        </tr>
    </table>
    <table class="header" style="margin-top: 20px;">
        <tr>
            <td class="head"><b>KEPALA BADAN PUSAT STATISTIK <?= strtoupper(substr($bps['nama'], 3, strlen($bps['nama']) - 3)); ?></b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">Menimbang</td>
            <td class="isi_2">:</td>
            <td class="isi_3">bahwa untuk kelancaran pelaksanaan kegiatan Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?> Tahun 2020, perlu menetapkan <?= $kegiatan['nama']; ?> di Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?> Tahun Anggaran <?= substr($sk['nomor'], strlen($sk['nomor']) - 4, 4); ?>;</td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">Mengingat</td>
            <td class="isi_2">:</td>
            <td class="isi_4">1.</td>
            <td class="isi_5">Undang-Undang Nomor 16 Tahun 1997 tentang Statistik (Lembaran Negara Nomor 39 Tahun 1997, Tambahan Lembaran Negara Nomor 3683);</td>
        </tr>
        <tr>
            <td class="isi_1"></td>
            <td class="isi_2"></td>
            <td class="isi_4">2.</td>
            <td class="isi_5">Undang-Undang Nomor 17 Tahun 2003 tentang Keuangan Negara (Lembaran Negara Tahun 2003 Nomor 47, Tambahan Lembaran Negara Nomor 478);</td>
        </tr>
        <tr>
            <td class="isi_1"></td>
            <td class="isi_2"></td>
            <td class="isi_4">3.</td>
            <td class="isi_5">Undang-Undang Nomor 1 Tahun 2004 tentang Perbendaharaan Negara (Lembaran Negara Tahun 2004 Nomor 5, Tambahan Lembaran Negara Nomor 4355);</td>
        </tr>
        <tr>
            <td class="isi_1"></td>
            <td class="isi_2"></td>
            <td class="isi_4">4.</td>
            <td class="isi_5">Peraturan Pemerintah Nomor 51 Tahun 1999 tentang Penyelenggaraan Statistik (Lembaran Negara Tahun 1999 Nomor 96, Tambahan Lembaran Negara Nomor 4355);</td>
        </tr>
        <tr>
            <td class="isi_1"></td>
            <td class="isi_2"></td>
            <td class="isi_4">5.</td>
            <td class="isi_5">Keputusan Presiden Republik Indonesia Nomor 45 Tahun 2013 tentang Tata Cara Pelaksanaan Anggaran Pendapatan dan Belanja Negara (Lembaran Negara Republik Indonesia Tahun 2013 Nomor 103, Tambahan Lembaran Negara Republik Indonesia Nomor 5423);</td>
        </tr>
        <tr>
            <td class="isi_1"></td>
            <td class="isi_2"></td>
            <td class="isi_4">6.</td>
            <td class="isi_5">Peraturan Presiden Republik Indonesia Nomor 86 Tahun 2007 tentang Badan Pusat Statistik;</td>
        </tr>
        <tr>
            <td class="isi_1"></td>
            <td class="isi_2"></td>
            <td class="isi_4">7.</td>
            <td class="isi_5">Peraturan Presiden Republik Indonesia Nomor 54 Tahun 2010 tentang Pengadaan Barang/Jasa Pemerintah, sebagaimana telah diubah terakhir dengan Peraturan Presiden Republik Indonesia Nomor 70 Tahun 2012;</td>
        </tr>
        <tr>
            <td class="isi_1"></td>
            <td class="isi_2"></td>
            <td class="isi_4">8.</td>
            <td class="isi_5">Peraturan Menteri Keuangan Nomor 136/PMK.02/2014 tentang Petunjuk Penyusunan dan dan Penelaahan Rencana Kerja dan Anggaran Kementerian Negara/Lembaga;</td>
        </tr>
        <tr>
            <td class="isi_1"></td>
            <td class="isi_2"></td>
            <td class="isi_4">9.</td>
            <td class="isi_5">Keputusan Kepala Badan Pusat Statistik Nomor 121 Tahun 2001 tentang Organisasi dan Tata Kerja Perwakilan BPS di Daerah</td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">Memperhatikan</td>
            <td class="isi_2">:</td>
            <td class="isi_3">Daftar Isian Pelaksanaan Anggaran (DIPA) Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?> nomor SP DIPA-<?= $sk['no_dipa']; ?>.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 20px; margin-bottom: 10px;">
        <tr>
            <td class="head"><b>MEMUTUSKAN :</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">Menetapkan</td>
            <td class="isi_2">:</td>
            <td class="isi_3">Keputusan Kepala Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?> tentang <?= $sk['nama']; ?> DI Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?> Tahun Anggaran <?= substr($sk['nomor'], strlen($sk['nomor']) - 4, 4); ?>.</td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">PERTAMA</td>
            <td class="isi_2">:</td>
            <td class="isi_3">Mengangkat <?= $sk['nama']; ?> di Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?> Tahun Anggaran <?= substr($sk['nomor'], strlen($sk['nomor']) - 4, 4); ?> dengan susunan sebagaimana tersebut dalam Lampiran Keputusan ini.</td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">KEDUA</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nama']; ?> mempunyai tugas melakukan kegiatan <?= $kegiatan['jenis']; ?> sebagai <?= $kegiatan['nama']; ?> di wilayah Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?>.</td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">KETIGA</td>
            <td class="isi_2">:</td>
            <td class="isi_3">Kepada <?= $sk['nama']; ?> dapat diberikan uang harian atau honorarium sebesar Rp <?= number_format($sk['rate'], 0, ',', '.'); ?>,00 sesuai dengan jumlah yang ditetapkan.</td>
        </tr>
    </table>
    <table class="isi" style="padding-top: 70px;">
        <tr>
            <td class="isi_1">KEEMPAT</td>
            <td class="isi_2">:</td>
            <td class="isi_3">Pembiayaan untuk pelaksanaan Keputusan ini dibebankan pada DIPA Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?> Tahun Anggaran <?= substr($sk['nomor'], strlen($sk['nomor']) - 4, 4); ?> DIPA-<?= $sk['no_dipa']; ?>.</td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">KELIMA</td>
            <td class="isi_2">:</td>
            <td class="isi_3">Keputusan ini mulai berlaku pada tanggal ditetapkan, dengan ketentuan apabila dikemudian hari ternyata terdapat kekeliruan akan diadakan perbaikan sebagaimana mestinya.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 25px;">
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:15%; text-align:left;font-size:11px;">Ditetapkan di</td>
            <td style="width:5%; text-align:center;font-size:11px;">:</td>
            <td style="width:15%; text-align:left;font-size:11px;">JAKARTA</td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:15%; text-align:left;font-size:11px;">Pada tanggal</td>
            <td style="width:5%; text-align:center;font-size:11px;">:</td>
            <td style="width:15%; text-align:left;font-size:11px;"><?= tanggal($sk['tanggal']); ?></td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">KEPALA BADAN PUSAT STATISTIK</td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3"><?= strtoupper(substr($bps['nama'], 3, strlen($bps['nama']) - 3)); ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 40px;">
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3"><b><?= strtoupper($jabatan['nama_peg']); ?></b></td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">NIP. <?= $jabatan['nip_peg']; ?></td>
        </tr>
    </table>

</page>
<page backtop="10mm" backbottom="0mm" backleft="20mm" backright="20mm">
    <table class="header" style="margin-top: 10px;">
        <tr>
            <td style="width:100%; text-align:left;font-size:11px;">Lampiran Keputusan Kepala Badan Pusat Statistik <?= substr($bps['nama'], 3, strlen($bps['nama']) - 3); ?></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td class="isi_1">Tentang</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nama']; ?></td>
        </tr>
        <tr>
            <td class="isi_1">Nomor</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= $sk['nomor']; ?></td>
        </tr>
        <tr>
            <td class="isi_1">Tanggal</td>
            <td class="isi_2">:</td>
            <td class="isi_3"><?= tanggal($sk['tanggal']); ?></td>
        </tr>
    </table>
    <table class="tabel">
        <tr>
            <td class="tabel_1">NO</td>
            <td class="tabel_2" style="text-align: center;">NAMA</td>
            <td class="tabel_3" style="text-align: center;">GOLONGAN</td>
            <td class="tabel_4" style="text-align: center;">KELURAHAN</td>
        </tr>
        <tr>
            <td class="tabel_1" style="height: 2px;">(1)</td>
            <td class="tabel_2" style="text-align: center; height: 2px;">(2)</td>
            <td class="tabel_3" style="text-align: center; height: 2px;">(3</td>
            <td class="tabel_4" style="text-align: center; height: 2px;">(4)</td>
        </tr>
        <?php $no = 0;
        foreach ($petugas as $r) : $no++; ?>
            <tr>
                <td class="tabel_1"><?= $no; ?></td>
                <td class="tabel_2"><?= $r['nama']; ?></td>
                <td class="tabel_3"><?= $r['gol']; ?></td>
                <td class="tabel_4"><?= $r['nama_desa']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <table class="isi" style="margin-top: 20px;">
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:15%; text-align:left;font-size:11px;">Ditetapkan di</td>
            <td style="width:5%; text-align:center;font-size:11px;">:</td>
            <td style="width:15%; text-align:left;font-size:11px;">JAKARTA</td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:15%; text-align:left;font-size:11px;">Pada tanggal</td>
            <td style="width:5%; text-align:center;font-size:11px;">:</td>
            <td style="width:15%; text-align:left;font-size:11px;"><?= tanggal($sk['tanggal']); ?></td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">KEPALA BADAN PUSAT STATISTIK</td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3"><?= strtoupper(substr($bps['nama'], 3, strlen($bps['nama']) - 3)); ?></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 40px;">
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3"><b><?= strtoupper($jabatan['nama_peg']); ?></b></td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">NIP. <?= $jabatan['nip_peg']; ?></td>
        </tr>
    </table>

</page>