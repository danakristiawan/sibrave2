<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_wilayah extends CI_Controller
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
    $data['user'] = $this->db->get_where('system_user', ['nik' => $nik])->row_array();
    $kdbps = $data['user']['kdbps'];
    $data['bps'] = $this->db->get_where('ref_bps', ['kode' => $kdbps])->row_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('dashboard_wilayah/index', $data);
    $this->load->view('template/footer');
  }
}
