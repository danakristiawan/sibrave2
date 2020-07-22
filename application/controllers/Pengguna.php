<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
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
    $data['pengguna'] = $this->db->get('ref_user')->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('pengguna/index', $data);
    $this->load->view('template/footer');
  }

  public function edit($id = null)
  {
    // check id
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['pengguna'] = $this->db->get_where('ref_user', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'nik',
        'label' => 'NIK',
        'rules' => 'required|trim|exact_length[16]'
      ],
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'is_active',
        'label' => 'Is Aktif',
        'rules' => 'required|trim|exact_length[1]|numeric'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'nik' => htmlspecialchars($this->input->post('nik', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'is_active' => htmlspecialchars($this->input->post('is_active', true)),
        'date_created' => time()
      ];
      $this->db->update('ref_user', $data, ['id' => $id]);
      redirect('pengguna');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('pengguna/edit', $data);
    $this->load->view('template/footer');
  }

  public function delete($id = null)
  {
    // cek id
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('ref_user', ['id' => $id])) {
      redirect('pengguna');
    }
  }
}
