<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lampiran_spk extends CI_Controller
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
    $this->load->view('lampiran_spk/index', $data);
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
    $this->load->view('lampiran_spk/detail_sk', $data);
    $this->load->view('template/footer');
  }

  public function detail_lampiran($kegiatan_id = null, $sk_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    // data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['title'] = $this->judul->title();
    $data['lampiran'] = $this->db->get_where('data_lampiran_spk', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id])->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('lampiran_spk/detail_lampiran', $data);
    $this->load->view('template/footer');
  }

  public function add($kegiatan_id = null, $sk_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    //providing data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    // validasi
    $rules = [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim|max_length[255]'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kegiatan_id' => $kegiatan_id,
        'sk_id' => $sk_id,
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'date_created' => time()
      ];
      $this->db->insert('data_lampiran_spk', $data);
      redirect('lampiran-spk/detail-lampiran/' . $kegiatan_id . '/' . $sk_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('lampiran_spk/add', $data);
    $this->load->view('template/footer');
  }

  public function edit($kegiatan_id = null, $sk_id = null, $id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['lampiran'] = $this->db->get_where('data_lampiran_spk', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim|max_length[255]'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'date_created' => time()
      ];
      $this->db->update('data_lampiran_spk', $data, ['id' => $id]);
      redirect('lampiran-spk/detail-lampiran/' . $kegiatan_id . '/' . $sk_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('lampiran_spk/edit', $data);
    $this->load->view('template/footer');
  }

  public function delete($kegiatan_id = null, $sk_id = null, $id = null)
  {
    // cek id
    if (!isset($id)) redirect('auth/blocked');
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('data_lampiran_spk', ['id' => $id])) {
      redirect('lampiran-spk/detail-lampiran/' . $kegiatan_id . '/' . $sk_id . '');
    }
  }
}
