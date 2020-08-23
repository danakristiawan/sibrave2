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
        text-align: justify;
    }

    td.isi_1 {
        text-align: left;
        width: 15%;
        font-size: 13px;
        vertical-align: top;
    }

    td.isi_2 {
        text-align: center;
        width: 5%;
        font-size: 13px;
        vertical-align: top;
    }

    td.isi_3 {
        text-align: justify;
        width: 80%;
        font-size: 13px;
        vertical-align: top;
    }

    td.isi_4 {
        text-align: left;
        width: 5%;
        font-size: 13px;
        vertical-align: top;
    }

    td.isi_5 {
        text-align: justify;
        width: 75%;
        font-size: 13px;
        vertical-align: top;
    }
</style>

<page backtop="10mm" backbottom="35mm" backleft="20mm" backright="20mm">
    <page_header>
        <table class="page_header" cellspacing="0px" cellpadding="0px">
        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">

        </table>
    </page_footer>
    <table class="header">
        <tr>
            <td class="head"><b>PERJANJIAN KERJA PETUGAS KEGIATAN</b></td>
        </tr>
        <tr>
            <td class="head"><b><?= strtoupper($kegiatan['nama']); ?></b></td>
        </tr>
        <tr>
            <td class="head"><b><?= strtoupper($bps['nama']); ?></b></td>
        </tr>
    </table>
    <table class="header" style="margin-top: 15px;">
        <tr>
            <td class="head"><b>NOMOR : <?= $petugas['no_urut'] . $sk['no_spk']; ?></b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 15px;">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Pada hari ini <?= hari($sk['tgl_spk']); ?>, tanggal <?= terbilang(date('d', $sk['tgl_spk'])); ?>, bulan <?= bulan($sk['tgl_spk']); ?>, tahun <?= terbilang(date('Y', $sk['tgl_spk'])); ?>, bertempat di <?= $bps['alamat']; ?>, yang bertanda tangan di bawah ini:</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">1.</td>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"><?= $jabatan['nama_peg']; ?></td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:70%; text-align:justify;font-size:11px;vertical-align:top;">Pejabat Pembuat Komitmen <?= $bps['nama']; ?> untuk kode kegiatan <?= $sk['kd_program'] . '.' . $sk['kd_kegiatan']; ?>, berkedudukan di <?= $bps['alamat']; ?>, bertindak untuk dan atas nama <?= $bps['nama']; ?>, selanjutnya disebut <b>PIHAK PERTAMA</b>.</td>
        </tr>
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">2.</td>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"><?= $petugas['nama']; ?></td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:70%; text-align:justify;font-size:11px;vertical-align:top;">NIK <?= $petugas['nik']; ?>, pekerjaan <?= $petugas['pekerjaan']; ?>, berkedudukan di <?= $petugas['alamat']; ?>, bertindak untuk dan atas nama diri sendiri, selanjutnya disebut <b>PIHAK KEDUA</b>.
            </td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">bahwa <b>PIHAK PERTAMA</b> dan <b>PIHAK KEDUA</b> yang secara bersama-sama disebut PARA PIHAK, sepakat untuk mengikatkan diri dalam Perjanjian Kerja Petugas <?= $kegiatan['nama']; ?> di <?= $bps['nama']; ?> yang selanjutnya disebut Perjanjian, dengan ketentuan-ketentuan sebagai berikut:</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 1</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;"><b>PIHAK PERTAMA</b> memberikan pekerjaan kepada <b>PIHAK KEDUA</b> dan <b>PIHAK KEDUA</b> menerima pekerjaan dari <b>PIHAK PERTAMA</b> sebagai Petugas <?= $kegiatan['nama']; ?>, dengan lingkup pekerjaan yang ditetapkan oleh <b>PIHAK PERTAMA</b>.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 2</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Ruang lingkup pekerjaan dalam perjanjian ini mengacu pada wilayah kerja, pedoman pencacahan <?= $kegiatan['nama']; ?>, suplemen pedoman pencacahan <?= $kegiatan['nama']; ?>, dan ketentuan-ketentuan yang ditetapkan oleh <b>PIHAK PERTAMA</b></td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 3</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Jangka Waktu Perjanjian terhitung sejak Perjanjian ini ditandatangani sampai dengan tanggal <?= tanggal($kegiatan['tgl_selesai']); ?>, dengan rincian waktu pelaksanaan pekerjaan sebagai berikut:</td>
        </tr>
    </table>
    <?php $no = 1;
    foreach ($lampiran as $r) : ?>
        <table class="isi" style="margin-top: 5px;">
            <tr>
                <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;"><?= $no++; ?>.</td>
                <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;"><?= $r['nama']; ?>;</td>
            </tr>
        </table>
    <?php endforeach; ?>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 4</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;"><b>PIHAK KEDUA</b> berkewajiban melaksanakan seluruh pekerjaan yang diberikan oleh <b>PIHAK PERTAMA</b> sampai selesai sesuai ruang lingkup pekerjaan sebagaimana dimaksud dalam pasal 2, dengan menerapkan protokol kesehatan pencegahan Covid-19 yang berlaku diwilayah kerja masing-masing.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 5</b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(1).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;"><b>PIHAK KEDUA</b> berhak untuk mendapatkan honorarium petugas dari <b>PIHAK PERTAMA</b> sebesar Rp <?= number_format($petugas['bruto'], 0, ',', '.'); ?> (<?= terbilang($petugas['bruto'], 2); ?> rupiah), sudah termasuk biaya pajak, bea materai, pulsa dan kuota internet untuk komunikasi, dan jasa pelayanan keuangan.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(2).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Selain mendapatkan honorarium sebagaimana dimaksud pada ayat (1), <b>PIHAK KEDUA</b> berhak mendapatkan asuransi petugas dari <b>PIHAK PERTAMA</b>.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(3).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;"><b>PIHAK KEDUA</b> tidak diberikan honorarium tambahan apabila melakukan kunjungan diluar jadwal pelaksanaan pekerjaan lapangan.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 6</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Pembayaran honorarium sebagaimana dimaksud dalam pasal 5 dilakukan setelah <b>PIHAK KEDUA</b> menyelesaikan dan menyerahkan seluruh hasil pekerjaan sebagaimana dimaksud dalam pasal 2 kepada <b>PIHAK PERTAMA</b>.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 7</b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(1).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Penyerahan seluruh hasil pekerjaan lapangan sebagaimana dimaksud dalam pasal 2 dilaksanakan oleh <b>PIHAK KEDUA</b> kepada <b>PIHAK PERTAMA</b> yang dinyatakan dalam berita acara serah terima hasil pekerjaan dan ditandatangani oleh PARA PIHAK, paling lambat pada tanggal <?= $sk['lama']; ?>.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(2).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Apabila terdapat hambatan dalam penyerahan hasil pekerjaan sebagaimana dimaksud pada ayat (1), <b>PIHAK PERTAMA</b> dapat memberikan tambahan waktu penyerahan seluruh hasil pekerjaan lapangan paling lambat pada tanggal <?= tanggal($kegiatan['tgl_selesai']); ?>.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 8</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;"><b>PIHAK PERTAMA</b> dapat memutuskan perjanjian ini secara sepihak sewaktu-waktu dalam hal <b>PIHAK KEDUA</b> tidak dapat melaksanakan kewajibannya sebagaimana dimaksud dalam pasal 4, termasuk dalam kondisi terindikasi terinfeksi virus Covid-19 dengan menerbitkan Surat Pemutusan Perjanjian Kerja.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 9</b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(1).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Apabila <b>PIHAK KEDUA</b> mengundurkan diri pada saat/setelah pelaksanaan pekerjaan lapangan dengan tidak menyelesaikan pekerjaan yang menjadi tanggungjawabnya maka wajib menyerahkan seluruh dokumen kegiatan yang diterima <b>PIHAK KEDUA</b> kepada <b>PIHAK PERTAMA</b>.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(2).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Apabila <b>PIHAK KEDUA</b> meninggal dunia, mengundurkan diri karena sakit dengan keterangan rawat inap, terindikasi terinfeksi virus Covid-19 dengan keterangan pihak berwenang, kecelakaan dengan keterangan kepolisian, dan/atau telah diberikan Surat Pemutusan Perjanjian Kerja dari <b>PIHAK PERTAMA</b>.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(3).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Dalam hal terjadi peristiwa sebagaimana dimaksud dalam ayat (2), <b>PIHAK PERTAMA</b> membayarkan honorarium kepada <b>PIHAK KEDUA</b> secara proporsional sesuai pekerjaan yang telah dilaksanakan.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 10</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Segala sesuatu yang belum atau tidak cukup diatur dalam Perjanjian ini, dituangkan dalam perjanjian tambahan/ <i>addendum</i> dan merupakan bagian tidak terpisahkan dari Perjanjian ini.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 11</b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(1).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Segala perselisihan atau perbedaan pendapat yang timbul sebagai akibat adanya Perjanjian ini akan diselesaikan secara musyawarah untuk mufakat.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(2).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Apabila perselisihan tidak dapat diselesaikan sebagaimana dimaksud pada ayat (1), PARA PIHAK sepakat menyelesaikan perselisihan dengan memilih kedudukan/domisili hukum di Panitera Pengadilan Negeri di wilayah kerja <?= $bps['nama']; ?>.</td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Demikian Perjanjian ini dibuat dan ditandatangani oleh PARA PIHAK dalam 2 (dua) rangkap asli bermeterai cukup, tanpa paksaan dari PIHAK manapun dan untuk dilaksanakan oleh PARA PIHAK.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top:20px;">
        <tr>
            <td style="width:50%; text-align:center;font-size:11px;"><b><b>PIHAK KEDUA</b></b></td>
            <td style="width:50%; text-align:center;font-size:11px;"><b><b>PIHAK PERTAMA</b></b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top:80px;">
        <tr>
            <td style="width:50%; text-align:center;font-size:11px;"><b><?= $petugas['nama']; ?></b></td>
            <td style="width:50%; text-align:center;font-size:11px;"><b><?= $jabatan['nama_peg']; ?></b></td>
        </tr>
    </table>
</page>