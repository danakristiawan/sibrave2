<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('judul_model', 'judul');
  }

  public function index()
  {
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan'] = $this->db->get('data_kegiatan')->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('pembayaran/index', $data);
    $this->load->view('template/footer');
  }

  public function detail_sk($kegiatan_id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk'] = $this->db->get_where('data_sk', ['kegiatan_id' => $kegiatan_id])->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('pembayaran/detail_sk', $data);
    $this->load->view('template/footer');
  }

  public function detail_petugas($kegiatan_id = null, $sk_id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    // $data['petugas'] = $this->db->get_where('view_pembayaran', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id])->result_array();
    $data['petugas'] = $this->db->query("SELECT * FROM data_petugas WHERE kegiatan_id='$kegiatan_id' AND sk_id='$sk_id' AND target<=capaian")->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('pembayaran/detail_petugas', $data);
    $this->load->view('template/footer');
  }

  public function spj_cetak($kegiatan_id = null, $sk_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    // query
    $kdbps = getBps()['kdbps'];
    $data['sk'] = $this->db->query("SELECT a.*,b.* FROM data_sk a LEFT JOIN ref_akun b ON a.akun_id=b.id WHERE a.kegiatan_id='$kegiatan_id' AND a.id='$sk_id'")->row_array();
    $data['spj'] = $this->db->get_where('view_pembayaran', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id])->result_array();
    $data['kegiatan'] = $this->db->query("SELECT a.nama,b.nama_peg,b.nip_peg FROM data_kegiatan a LEFT JOIN ref_jabatan b ON a.jabatan_id=b.id WHERE a.id='$kegiatan_id'")->row_array();
    $data['petugas'] = $this->db->get_where('data_petugas', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id])->result_array();
    //cetak
    $data['ppk'] = $this->db->get_where('ref_jabatan', ['kdbps' => $kdbps, 'kode' => '02'])->row_array();
    $data['bendahara'] = $this->db->get_where('ref_jabatan', ['kdbps' => $kdbps, 'kode' => '03'])->row_array();
    ob_start();
    $this->load->view('laporan/spj', $data);
    $html = ob_get_clean();
    $html2pdf = new Pdf('P', 'A4', 'en', false, 'UTF-8', array(20, 10, 20, 10));
    $html2pdf->pdf->SetTitle('SPJ');
    $html2pdf->writeHTML($html);
    $html2pdf->output('spj.pdf');
  }

  public function bast_cetak($kegiatan_id = null, $sk_id = null, $nik = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($nik)) redirect('auth/blocked');
    // query
    $kdbps = getBps()['kdbps'];
    $data['kegiatan'] = $this->db->query("SELECT a.nama,b.nama_peg,b.nip_peg FROM data_kegiatan a LEFT JOIN ref_jabatan b ON a.jabatan_id=b.id WHERE a.id='$kegiatan_id'")->row_array();
    $data['petugas'] = $this->db->get_where('data_petugas', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id, 'nik' => $nik])->row_array();
    $data['sk'] = $this->db->get_where('data_sk', ['kegiatan_id' => $kegiatan_id, 'id' => $sk_id])->row_array();
    $data['bps'] = $this->db->get_where('ref_bps', ['kode' => $kdbps])->row_array();
    $data['ppk'] = $this->db->get_where('ref_jabatan', ['kdbps' => $kdbps, 'kode' => '02'])->row_array();
    //cetak
    ob_start();
    $this->load->view('laporan/bast', $data);
    $html = ob_get_clean();
    $html2pdf = new Pdf('P', 'A4', 'en', false, 'UTF-8', array(20, 10, 20, 10));
    $html2pdf->pdf->SetTitle('BAST');
    $html2pdf->writeHTML($html);
    $html2pdf->output('bast.pdf');
  }
}
