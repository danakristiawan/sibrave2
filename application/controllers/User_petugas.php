<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_petugas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
    $this->load->model('judul_model', 'judul');
    // $this->load->model('user_model', 'user');
    // $this->load->model('role_model', 'role');
  }

  public function index()
  {
    // data
    $data['title'] = $this->judul->title();
    $data['user'] = $this->db->query("SELECT a.*,b.name FROM system_user a LEFT JOIN system_role b ON a.role_id=b.id WHERE a.role_id=1")->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('user_petugas/index', $data);
    $this->load->view('template/footer');
  }

  public function add()
  {
    //providing data
    $data['title'] = $this->judul->title();
    $data['user'] = [];

    // load user
    if ($this->input->post('keyword')) {
      $keyword = htmlspecialchars($this->input->post('keyword', true));
      $this->db->select('nik,nama');
      $this->db->from('ref_user');
      $this->db->like('nama', $keyword);
      $this->db->or_like('nik', $keyword);
      $query = $this->db->get();
      $data['user'] = $query->result_array();
    }

    //open form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('user_petugas/add', $data);
    $this->load->view('template/footer');
  }

  public function adduser()
  {
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');

    $data = [
      'nik' => $nik,
      'nama' => $nama,
      'role_id' => 1
    ];

    $result = $this->db->get_where('system_user', $data);

    if ($result->num_rows() < 1) {
      $this->db->insert('system_user', $data);
    } else {
      $this->db->delete('system_user', $data);
    }
  }

  public function delete($id = null)
  {
    // cek id
    if (!isset($id)) show_404();
    // query
    if ($this->db->delete('system_user', ['id' => $id])) {
      redirect('user-petugas');
    }
  }
}
