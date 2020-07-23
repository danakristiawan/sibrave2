<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
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
    $data['jabatan'] = $this->db->get('ref_jabatan')->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('jabatan/index', $data);
    $this->load->view('template/footer');
  }

  public function add()
  {
    //providing data
    $data['title'] = $this->judul->title();
    // validasi
    $rules = [
      [
        'field' => 'kode',
        'label' => 'Kode',
        'rules' => 'required|trim|exact_length[2]'
      ],
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama_peg',
        'label' => 'Nama Pegawai',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nip_peg',
        'label' => 'NIP Pegawai',
        'rules' => 'required|trim|exact_length[18]'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kode' => htmlspecialchars($this->input->post('kode', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'nama_peg' => htmlspecialchars($this->input->post('nama_peg', true)),
        'nip_peg' => htmlspecialchars($this->input->post('nip_peg', true)),
        'date_created' => time()
      ];
      $this->db->insert('ref_jabatan', $data);
      redirect('jabatan');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('jabatan/add', $data);
    $this->load->view('template/footer');
  }

  public function edit($id = null)
  {
    // check id
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['jabatan'] = $this->db->get_where('ref_jabatan', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'kode',
        'label' => 'Kode',
        'rules' => 'required|trim|exact_length[2]'
      ],
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama_peg',
        'label' => 'Nama Pegawai',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nip_peg',
        'label' => 'NIP Pegawai',
        'rules' => 'required|trim|exact_length[18]'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kode' => htmlspecialchars($this->input->post('kode', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'nama_peg' => htmlspecialchars($this->input->post('nama_peg', true)),
        'nip_peg' => htmlspecialchars($this->input->post('nip_peg', true)),
        'date_created' => time()
      ];
      $this->db->update('ref_jabatan', $data, ['id' => $id]);
      redirect('jabatan');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('jabatan/edit', $data);
    $this->load->view('template/footer');
  }

  public function delete($id = null)
  {
    // cek id
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('ref_jabatan', ['id' => $id])) {
      redirect('jabatan');
    }
  }
}
