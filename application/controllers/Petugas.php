<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
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
    $data['petugas'] = $this->db->get('ref_petugas')->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('ref_petugas/index', $data);
    $this->load->view('template/footer');
  }

  public function add()
  {
    //providing data
    $data['title'] = $this->judul->title();
    $data['bank'] = $this->db->get('ref_bank')->result_array();
    $data['jabatan'] = $this->db->get('ref_jabatan')->result_array();
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
        'field' => 'jabatan',
        'label' => 'Jabatan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'rekening',
        'label' => 'Rekening',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama_bank',
        'label' => 'Nama Bank',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama_rek',
        'label' => 'Nama Rekening',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'npwp',
        'label' => 'NPWP',
        'rules' => 'required|trim|exact_length[15]'
      ],
      [
        'field' => 'alamat',
        'label' => 'Alamat',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'nik' => htmlspecialchars($this->input->post('nik', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
        'rekening' => htmlspecialchars($this->input->post('rekening', true)),
        'nama_bank' => htmlspecialchars($this->input->post('nama_bank', true)),
        'nama_rek' => htmlspecialchars($this->input->post('nama_rek', true)),
        'npwp' => htmlspecialchars($this->input->post('npwp', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        'date_created' => time()
      ];
      $this->db->insert('ref_petugas', $data);
      redirect('petugas');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('ref_petugas/add', $data);
    $this->load->view('template/footer');
  }

  public function edit($id = null)
  {
    // check id
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['bank'] = $this->db->get('ref_bank')->result_array();
    $data['jabatan'] = $this->db->get('ref_jabatan')->result_array();
    $data['petugas'] = $this->db->get_where('ref_petugas', ['id' => $id])->row_array();
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
        'field' => 'jabatan',
        'label' => 'Jabatan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'rekening',
        'label' => 'Rekening',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama_bank',
        'label' => 'Nama Bank',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama_rek',
        'label' => 'Nama Rekening',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'npwp',
        'label' => 'NPWP',
        'rules' => 'required|trim|exact_length[15]'
      ],
      [
        'field' => 'alamat',
        'label' => 'Alamat',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'nik' => htmlspecialchars($this->input->post('nik', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
        'rekening' => htmlspecialchars($this->input->post('rekening', true)),
        'nama_bank' => htmlspecialchars($this->input->post('nama_bank', true)),
        'nama_rek' => htmlspecialchars($this->input->post('nama_rek', true)),
        'npwp' => htmlspecialchars($this->input->post('npwp', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        'date_created' => time()
      ];
      $this->db->update('ref_petugas', $data, ['id' => $id]);
      redirect('petugas');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('ref_petugas/edit', $data);
    $this->load->view('template/footer');
  }

  public function delete($id = null)
  {
    // cek id
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('ref_petugas', ['id' => $id])) {
      redirect('petugas');
    }
  }
}
