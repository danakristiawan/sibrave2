<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
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
    $data['akun'] = $this->db->get('ref_akun')->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('akun/index', $data);
    $this->load->view('template/footer');
  }

  public function add()
  {
    //providing data
    $data['title'] = $this->judul->title();
    // validasi
    $rules = [
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kd_program' => htmlspecialchars($this->input->post('kd_program', true)),
        'nm_program' => htmlspecialchars($this->input->post('nm_program', true)),
        'kd_kegiatan' => htmlspecialchars($this->input->post('kd_kegiatan', true)),
        'nm_kegiatan' => htmlspecialchars($this->input->post('nm_kegiatan', true)),
        'kd_output' => htmlspecialchars($this->input->post('kd_output', true)),
        'nm_output' => htmlspecialchars($this->input->post('nm_output', true)),
        'kd_komponen' => htmlspecialchars($this->input->post('kd_komponen', true)),
        'nm_komponen' => htmlspecialchars($this->input->post('nm_komponen', true)),
        'kd_akun' => htmlspecialchars($this->input->post('kd_akun', true)),
        'nm_akun' => htmlspecialchars($this->input->post('nm_akun', true)),
        'date_created' => time()
      ];
      $this->db->insert('ref_akun', $data);
      redirect('akun');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('akun/add', $data);
    $this->load->view('template/footer');
  }

  public function edit($id = null)
  {
    // check id
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['akun'] = $this->db->get_where('ref_akun', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kd_program',
        'label' => 'Kode Program',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_program',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kd_program' => htmlspecialchars($this->input->post('kd_program', true)),
        'nm_program' => htmlspecialchars($this->input->post('nm_program', true)),
        'kd_kegiatan' => htmlspecialchars($this->input->post('kd_kegiatan', true)),
        'nm_kegiatan' => htmlspecialchars($this->input->post('nm_kegiatan', true)),
        'kd_output' => htmlspecialchars($this->input->post('kd_output', true)),
        'nm_output' => htmlspecialchars($this->input->post('nm_output', true)),
        'kd_komponen' => htmlspecialchars($this->input->post('kd_komponen', true)),
        'nm_komponen' => htmlspecialchars($this->input->post('nm_komponen', true)),
        'kd_akun' => htmlspecialchars($this->input->post('kd_akun', true)),
        'nm_akun' => htmlspecialchars($this->input->post('nm_akun', true)),
        'date_created' => time()
      ];
      $this->db->update('ref_akun', $data, ['id' => $id]);
      redirect('akun');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('akun/edit', $data);
    $this->load->view('template/footer');
  }

  public function delete($id = null)
  {
    // cek id
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('ref_akun', ['id' => $id])) {
      redirect('akun');
    }
  }
}
