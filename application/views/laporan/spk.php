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
            <td class="head"><b><?= $kegiatan['nama']; ?></b></td>
        </tr>
    </table>
    <table class="header" style="margin-top: 5px;">
        <tr>
            <td class="head"><b>NOMOR : <?= $petugas['no_spk']; ?></b></td>
        </tr>
    </table>

    <table class="isi">
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
            <td style="width:15%; text-align:left;font-size:11px;"><?= tanggal($petugas['tgl_spk']); ?></td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">KEPALA BADAN PUSAT STATISTIK</td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">KOTA JAKARTA SELATAN</td>
        </tr>
    </table>
    <table class="isi" style="margin-top: 40px;">
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3"><b>SYARIFUDDIN NAWIE, S.Si, ME</b></td>
        </tr>
        <tr>
            <td style="width:65%; text-align:left;font-size:11px;"></td>
            <td style="width:35%; text-align:center;font-size:11px;" colspan="3">NIP. 19620809 198601 1 001</td>
        </tr>
    </table>
</page>