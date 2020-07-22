<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
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
    $this->load->view('kegiatan/index', $data);
    $this->load->view('template/footer');
  }

  public function add()
  {
    //providing data
    $data['title'] = $this->judul->title();
    // validasi
    $rules = [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jml_petugas',
        'label' => 'Jumlah Petugas',
        'rules' => 'required|trim|number'
      ],
      [
        'field' => 'tgl_mulai',
        'label' => 'Tgl Mulai',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_selesai',
        'label' => 'Tgl Selesai',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'file',
        'label' => 'file',
        'rules' => 'trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'jml_petugas' => htmlspecialchars($this->input->post('jml_petugas', true)),
        'tgl_mulai' => strtotime(htmlspecialchars($this->input->post('tgl_mulai', true))),
        'tgl_selesai' => strtotime(htmlspecialchars($this->input->post('tgl_selesai', true))),
        'date_created' => time()
      ];
      $this->db->insert('data_kegiatan', $data);
      redirect('kegiatan');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('kegiatan/add', $data);
    $this->load->view('template/footer');
  }

  public function edit($id = null)
  {
    // check id
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan'] = $this->db->get_where('data_kegiatan', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'date_created' => time()
      ];
      $this->db->update('data_kegiatan', $data, ['id' => $id]);
      redirect('kegiatan');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('kegiatan/edit', $data);
    $this->load->view('template/footer');
  }

  public function delete($id = null)
  {
    // cek id
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('data_kegiatan', ['id' => $id])) {
      redirect('kegiatan');
    }
  }
}
