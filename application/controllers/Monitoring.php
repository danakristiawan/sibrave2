<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monitoring extends CI_Controller
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
    $query = "SELECT a.id,a.nama,a.jenis,a.tgl_mulai,a.tgl_selesai,a.jml_petugas,b.nomor,b.tanggal,c.nama as pj FROM data_kegiatan a LEFT JOIN data_sk b ON a.id=b.kegiatan_id LEFT JOIN ref_jabatan c ON a.jabatan_id=c.id";
    $data['kegiatan'] = $this->db->query($query)->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('monitoring/index', $data);
    $this->load->view('template/footer');
  }

  public function detail($kegiatan_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['petugas'] = $this->db->get_where('data_petugas', ['kegiatan_id' => $kegiatan_id])->result_array();
    $query = "SELECT a.id, SUM(b.jml) AS target, SUM(b.capaian) AS capaian FROM data_kegiatan a LEFT JOIN data_petugas b ON a.id=b.kegiatan_id WHERE a.id='$kegiatan_id' GROUP BY a.id ";
    $data['monitor'] = $this->db->query($query)->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('monitoring/detail', $data);
    // $this->load->view('template/footer');
    $this->load->view('template/footer_min');
    $this->load->view('monitoring/chart', $data);
  }
}
