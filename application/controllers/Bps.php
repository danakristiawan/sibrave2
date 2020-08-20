<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bps extends CI_Controller
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
    $data['bps'] = $this->db->get('ref_bps')->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('bps/index', $data);
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
        'field' => 'alamat',
        'label' => 'Alamat',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kode',
        'label' => 'Kode',
        'rules' => 'required|trim|exact_length[4]|numeric'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kode' => htmlspecialchars($this->input->post('kode', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        'date_created' => time()
      ];
      $this->db->insert('ref_bps', $data);
      redirect('bps');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('bps/add', $data);
    $this->load->view('template/footer');
  }

  public function edit($id = null)
  {
    // check id
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['bps'] = $this->db->get_where('ref_bps', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'alamat',
        'label' => 'Alamat',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kode',
        'label' => 'Kode',
        'rules' => 'required|trim|exact_length[4]|numeric'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kode' => htmlspecialchars($this->input->post('kode', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        'date_created' => time()
      ];
      $this->db->update('ref_bps', $data, ['id' => $id]);
      redirect('bps');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('bps/edit', $data);
    $this->load->view('template/footer');
  }

  public function delete($id = null)
  {
    // cek id
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('ref_bps', ['id' => $id])) {
      redirect('bps');
    }
  }
}
