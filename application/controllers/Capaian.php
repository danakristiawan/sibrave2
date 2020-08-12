<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Capaian extends CI_Controller
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
    $query = "SELECT b.id,b.nama,b.tgl_mulai,b.tgl_selesai,a.target,a.capaian FROM data_petugas a LEFT JOIN data_kegiatan b ON a.kegiatan_id=b.id WHERE a.nik='$nik'";
    $data['kegiatan'] = $this->db->query($query)->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('capaian/index', $data);
    $this->load->view('template/footer');
  }

  public function detail($kegiatan_id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $nik = $this->session->userdata('nik');
    $data['target'] = $this->db->query("SELECT target,capaian FROM data_petugas WHERE kegiatan_id='$kegiatan_id' AND nik='$nik'")->row_array();
    $data['capaian'] = $this->db->get_where('data_capaian', ['kegiatan_id' => $kegiatan_id, 'nik' => $nik])->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('capaian/detail', $data);
    $this->load->view('template/footer');
  }

  public function add($kegiatan_id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    //providing data
    $data['title'] = $this->judul->title();
    $nik = $this->session->userdata('nik');
    $data['kegiatan_id'] = $kegiatan_id;

    // validasi
    $rules = [
      [
        'field' => 'jumlah',
        'label' => 'Jumlah Capaian',
        'rules' => 'required|numeric'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kegiatan_id' => $kegiatan_id,
        'nik' => $nik,
        'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
        'status' => 0,
        'date_created' => time()
      ];
      $this->db->insert('data_capaian', $data);
      redirect('capaian/detail/' . $kegiatan_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('capaian/add', $data);
    $this->load->view('template/footer');
  }

  public function edit($kegiatan_id = null, $id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['capaian'] = $this->db->get_where('data_capaian', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'jumlah',
        'label' => 'Jumlah Capaian',
        'rules' => 'required|numeric'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
        'status' => 0,
        'date_created' => time()
      ];
      $this->db->update('data_capaian', $data, ['id' => $id]);
      redirect('capaian/detail/' . $kegiatan_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('capaian/edit', $data);
    $this->load->view('template/footer');
  }

  public function delete($kegiatan_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('data_capaian', ['id' => $id])) {
      redirect('capaian/detail/' . $kegiatan_id . '');
    }
  }
}
