<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persetujuan extends CI_Controller
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
    $this->load->view('persetujuan/index', $data);
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
    $this->load->view('persetujuan/detail_sk', $data);
    $this->load->view('template/footer');
  }

  public function detail_kelurahan($kegiatan_id = null, $sk_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    // data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['title'] = $this->judul->title();
    $data['kelurahan'] = $this->db->get_where('data_kelurahan', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id])->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('persetujuan/detail_kelurahan', $data);
    $this->load->view('template/footer');
  }

  public function detail_petugas($kegiatan_id = null, $sk_id = null, $kelurahan_id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['kelurahan_id'] = $kelurahan_id;
    $data['petugas'] = $this->db->get_where('data_petugas', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id, 'kelurahan_id' => $kelurahan_id])->result_array();
    //query
    // validasi
    $rules = [
      [
        'field' => 'jumlah_capaian',
        'label' => 'Jumlah Capaian',
        'rules' => 'trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'jumlah_capaian' => htmlspecialchars($this->input->post('jumlah_capaian', true))
      ];
      $this->db->update('data_kelurahan', $data, ['id' => $kelurahan_id]);
      redirect('persetujuan/detail-kelurahan/' . $kegiatan_id . '/' . $sk_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('persetujuan/detail_petugas', $data);
    $this->load->view('template/footer');
  }

  public function detail_capaian($kegiatan_id = null, $sk_id = null, $kelurahan_id = null, $nik = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    if (!isset($nik)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['kelurahan_id'] = $kelurahan_id;
    $data['nik'] = $nik;
    $data['capaian'] = $this->db->get_where('data_capaian', ['kegiatan_id' => $kegiatan_id, 'nik' => $nik])->result_array();
    $rules = [
      [
        'field' => 'capaian',
        'label' => 'Capaian',
        'rules' => 'numeric'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'capaian' => htmlspecialchars($this->input->post('capaian', true))
      ];
      $this->db->update('data_petugas', $data, ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id, 'nik' => $nik]);
      redirect('persetujuan/detail-petugas/' . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('persetujuan/detail_capaian', $data);
    $this->load->view('template/footer');
  }

  public function edit($kegiatan_id = null, $sk_id = null, $kelurahan_id = null, $nik = null, $id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    if (!isset($nik)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['kelurahan_id'] = $kelurahan_id;
    $data['nik'] = $nik;
    $data['capaian'] = $this->db->get_where('data_capaian', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'jumlah',
        'label' => 'Jumlah',
        'rules' => 'required|numeric'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
        'status' => 1,
        'date_acc' => time()
      ];
      $this->db->update('data_capaian', $data, ['id' => $id]);
      redirect('persetujuan/detail-capaian/' . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id . '/' . $nik . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('persetujuan/edit', $data);
    $this->load->view('template/footer');
  }
}
