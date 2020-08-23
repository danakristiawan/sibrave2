<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
    $nik = $this->session->userdata('nik');
    $data['petugas'] = $this->db->query("SELECT a.*,b.nama AS nama_kegiatan,c.no_spk,c.tgl_spk,c.no_st,c.tgl_st FROM data_petugas a LEFT JOIN data_kegiatan b ON a.kegiatan_id=b.id LEFT JOIN data_sk c ON a.sk_id=c.id WHERE a.nik='$nik'")->result_array();
    $data['referensi'] = $this->db->get_where('ref_petugas', ['nik' => $nik])->row_array();

    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('home/index', $data);
    $this->load->view('template/footer');
    // $this->load->view('template/footer_min');
    // $this->load->view('home/chart', $data);
  }
}
