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
                    <b>BADAN PUSAT STATISTIK</b>
                </td>
            </tr>
            <tr>
                <td class="logo">
                    <b>KOTA ADMINISTRASI JAKARTA SELATAN</b>
                </td>
            </tr>
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
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>NOMOR : <?= $petugas['no_urut'] . $sk['no_spk']; ?></b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Pada hari ini <?= hari($sk['tgl_spk']); ?>, tanggal <?= terbilang(date('d', $sk['tgl_spk'])); ?>, bulan <?= bulan($sk['tgl_spk']); ?>, tahun <?= terbilang(date('Y', $sk['tgl_spk'])); ?>, bertempat di <?= $bps['alamat']; ?>, yang bertanda tangan di bawah ini:</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">1.</td>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"><?= $jabatan['nama_peg']; ?></td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:70%; text-align:justify;font-size:11px;vertical-align:top;">Pejabat Pembuat Komitmen <?= $bps['nama']; ?> untuk kode kegiatan <?= $sk['kd_program'] . '.' . $sk['kd_kegiatan']; ?>, berkedudukan di <?= $bps['alamat']; ?>, bertindak untuk dan atas nama <?= $bps['nama']; ?>, selanjutnya disebut PIHAK PERTAMA.</td>
        </tr>
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">2.</td>
            <td style="width:20%; text-align:left;font-size:11px;vertical-align:top;"><?= $petugas['nama']; ?></td>
            <td style="width:5%; text-align:center;font-size:11px;vertical-align:top;">:</td>
            <td style="width:70%; text-align:justify;font-size:11px;vertical-align:top;">NIK <?= $petugas['nik']; ?>, pekerjaan <?= $petugas['pekerjaan']; ?>, berkedudukan di <?= $petugas['alamat']; ?>, bertindak untuk dan atas nama diri sendiri, selanjutnya disebut PIHAK KEDUA.
            </td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">bahwa PIHAK PERTAMA dan PIHAK KEDUA yang secara bersama-sama disebut PARA PIHAK, sepakat untuk mengikatkan diri dalam Perjanjian Kerja Petugas <?= $kegiatan['nama']; ?> di <?= $bps['nama']; ?> yang selanjutnya disebut Perjanjian, dengan ketentuan-ketentuan sebagai berikut:</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 1</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">PIHAK PERTAMA memberikan pekerjaan kepada PIHAK KEDUA dan PIHAK KEDUA menerima pekerjaan dari PIHAK PERTAMA sebagai Petugas <?= $kegiatan['nama']; ?>, dengan lingkup pekerjaan yang ditetapkan oleh PIHAK PERTAMA.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 2</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Jangka Waktu Perjanjian terhitung sejak Perjanjian ini ditandatangani sampai dengan tanggal <?= tanggal($kegiatan['tgl_selesai']); ?> dengan pelaksanaan pekerjaan lapangan <?= $sk['lama']; ?>.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 3</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Ruang lingkup pekerjaan sesuai wilayah tugas yang diberikan, dalam Perjanjian ini meliputi:</td>
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
            <td style="width:100%; text-align:justify;font-size:11px;">PIHAK KEDUA bersedia dan bertanggung jawab melaksanakan seluruh pekerjaan yang diberikan oleh PIHAK PERTAMA sampai selesai, sesuai tugas dan kewajiban pekerjaan sebagaimana ditetapkan dalam Pedoman <?= $kegiatan['nama']; ?> dan/atau suplemen Pedoman <?= $kegiatan['nama']; ?>, menerapkan protokol kesehatan pencegahan covid-19 yang berlaku di wilayah masing-masing ketika melaksanakan seluruh tugas, serta mematuhi ketentuan-ketentuan yang ditetapkan oleh PIHAK PERTAMA.</td>
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
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Dalam pelaksanaan pekerjaan sebagaimana dimaksud dalam Pasal 3, PIHAK KEDUA berhak untuk mendapatkan honor petugas dari PIHAK PERTAMA untuk pelaksanaan lapangan <?= $sk['lama']; ?>. Honor petugas dibayarkan PIHAK PERTAMA kepada PIHAK KEDUA sebesar Rp <?= number_format($petugas['bruto'], 0, ',', '.'); ?> (<?= terbilang($petugas['bruto'], 2); ?> rupiah) sudah termasuk biaya pajak, bea materai, pulsa dan kuota internet untuk komunikasi, dan jasa pelayanan keuangan.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(2).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Honor sebagaimana dimaksud pada ayat (1) satu belum termasuk asuransi petugas.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(3).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Tidak diberikan honor tambahan apabila melakukan kunjungan di luar jadwal pelaksanaan lapangan, untuk melengkapi penyelesaian tugas.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 6</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Pembayaran honor PIHAK KEDUA sebagaimana dimaksud dalam Pasal 5, dilakukan setelah PIHAK KEDUA menyerahkan seluruh pekerjaan sebagaimana dimaksud dalam Pasal 3 kepada PIHAK PERTAMA, yang dituangkan dalam Berita Acara Serah Terima Hasil Pekerjaan.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 7</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">PIHAK PERTAMA dapat memutuskan Perjanjian ini secara sepihak sewaktu- waktu dalam hal PIHAK KEDUA tidak dapat melaksanakan tugas dan kewajibannya sebagaimana dimaksud dalam Pasal 3 atau PIHAK KEDUA dalam kondisi tidak sehat/terindikasi positif terinfeksi virus Covid-19 dengan menerbitkan Surat Pemutusan Perjanjian Kerja.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 8</b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(1).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Apabila PIHAK KEDUA ingkar janji atau mengundurkan diri pada saat/setelah pelaksanaan pekerjaan, dengan tidak menyelesaikan pekerjaan yang menjadi tanggung jawabnya, maka wajib membayar denda kepada PIHAK PERTAMA sebesar yang sudah dikeluarkan PIHAK PERTAMA sejak perjanjian kerja ditandatangani hingga PIHAK KEDUA dinyatakan mundur atau berhenti.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(2).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Dikecualikan untuk tidak mengembalikan biaya sebagaimana dimaksud pada ayat (1) kepada PIHAK PERTAMA apabila PIHAK KEDUA meninggal dunia, mengundurkan diri karena sakit dengan keterangan rawat inap, kecelakaan dengan keterangan kepolisian, atau PIHAK KEDUA telah diberikan Surat Pemutusan Perjanjian Kerja dari PIHAK PERTAMA.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 5px;">
        <tr>
            <td style="width:5%; text-align:left;font-size:11px;vertical-align:top;">(3).</td>
            <td style="width:95%; text-align:justify;font-size:11px;vertical-align:top;">Dalam hal PIHAK KEDUA mengalami kejadian sebagaimana disebut dalam ayat (2) maka honor akan dibayarkan dengan diperhitungkan secara proporsional sesuai pekerjaan yang telah dilaksanakan.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 9</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Hal-hal yang belum atau tidak cukup diatur dalam Perjanjian ini dituangkan dalam perubahan perjanjian/adendum, atau berlaku ketentuan dalam Peraturan/Keputusan/Surat Kepala Badan Pusat Statistik atau pejabat lain yang ditunjuk dan mengatur hal yang sama.</td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>Pasal 10</b></td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Segala perselisihan atau perbedaan pendapat yang timbul sebagai akibat adanya Perjanjian ini akan diselesaikan secara musyawarah untuk mufakat, dan apabila tidak dapat diselesaikan, PARA PIHAK sepakat menyelesaikan dengan memilih kediaman hukum/domisili tetap di Kepaniteraan Pengadilan Negeri di wilayah kerja <?= $bps['nama']; ?>.</td>
        </tr>
    </table>
    <table class="isi">
        <tr>
            <td style="width:100%; text-align:justify;font-size:11px;">Demikian Perjanjian ini dibuat dan ditandatangani oleh PARA PIHAK dalam 2 (dua) rangkap asli bermeterai cukup, tanpa paksaan dari PIHAK manapun dan untuk dilaksanakan oleh PARA PIHAK.</td>
        </tr>
    </table>
    <table class="isi" style="margin-top:20px;">
        <tr>
            <td style="width:50%; text-align:center;font-size:11px;"><b>PIHAK KEDUA</b></td>
            <td style="width:50%; text-align:center;font-size:11px;"><b>PIHAK PERTAMA</b></td>
        </tr>
    </table>
    <table class="isi" style="margin-top:80px;">
        <tr>
            <td style="width:50%; text-align:center;font-size:11px;"><b><?= $petugas['nama']; ?></b></td>
            <td style="width:50%; text-align:center;font-size:11px;"><b><?= $jabatan['nama_peg']; ?></b></td>
        </tr>
    </table>
</page>