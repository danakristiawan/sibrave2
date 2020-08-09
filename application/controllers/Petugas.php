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
    $data['kelamin'] = $this->db->get('ref_kelamin')->result_array();
    $data['agama'] = $this->db->get('ref_agama')->result_array();
    $data['kawin'] = $this->db->get('ref_kawin')->result_array();
    $data['pendidikan'] = $this->db->get('ref_pendidikan')->result_array();
    $data['bank'] = $this->db->get('ref_bank')->result_array();
    $data['gol'] = $this->db->get('ref_gol')->result_array();
    // validasi
    $rules = [
      [
        'field' => 'nik',
        'label' => 'NIK',
        'rules' => 'required|trim|exact_length[16]|is_unique[ref_petugas.nik]'
      ],
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tempat_lhr',
        'label' => 'Tempat Lahir',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_lhr',
        'label' => 'Tanggal Lahir',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'pekerjaan',
        'label' => 'Pekerjaan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nohp',
        'label' => 'Nomor HP',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jalan',
        'label' => 'Jalan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'rt',
        'label' => 'RT',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'rw',
        'label' => 'RW',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kel',
        'label' => 'Kelurahan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kec',
        'label' => 'Kecamatan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kota',
        'label' => 'kab/Kota',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'prov',
        'label' => 'Provinsi',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'nik' => htmlspecialchars($this->input->post('nik', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'tempat_lhr' => htmlspecialchars($this->input->post('tempat_lhr', true)),
        'tgl_lhr' => strtotime(htmlspecialchars($this->input->post('tgl_lhr', true))),
        'jenis_kel' => htmlspecialchars($this->input->post('jenis_kel', true)),
        'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
        'agama' => htmlspecialchars($this->input->post('agama', true)),
        'status_kawin' => htmlspecialchars($this->input->post('status_kawin', true)),
        'pendidikan' => htmlspecialchars($this->input->post('pendidikan', true)),
        'nohp' => htmlspecialchars($this->input->post('nohp', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'npwp' => htmlspecialchars($this->input->post('npwp', true)),
        'jalan' => htmlspecialchars($this->input->post('jalan', true)),
        'rt' => htmlspecialchars($this->input->post('rt', true)),
        'rw' => htmlspecialchars($this->input->post('rw', true)),
        'kel' => htmlspecialchars($this->input->post('kel', true)),
        'kec' => htmlspecialchars($this->input->post('kec', true)),
        'kota' => htmlspecialchars($this->input->post('kota', true)),
        'prov' => htmlspecialchars($this->input->post('prov', true)),
        'rekening' => htmlspecialchars($this->input->post('rekening', true)),
        'nama_bank' => htmlspecialchars($this->input->post('nama_bank', true)),
        'nama_rek' => htmlspecialchars($this->input->post('nama_rek', true)),
        'gol' => htmlspecialchars($this->input->post('gol', true)),
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
    $data['kelamin'] = $this->db->get('ref_kelamin')->result_array();
    $data['agama'] = $this->db->get('ref_agama')->result_array();
    $data['kawin'] = $this->db->get('ref_kawin')->result_array();
    $data['pendidikan'] = $this->db->get('ref_pendidikan')->result_array();
    $data['bank'] = $this->db->get('ref_bank')->result_array();
    $data['gol'] = $this->db->get('ref_gol')->result_array();
    $data['petugas'] = $this->db->get_where('ref_petugas', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tempat_lhr',
        'label' => 'Tempat Lahir',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_lhr',
        'label' => 'Tanggal Lahir',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'pekerjaan',
        'label' => 'Pekerjaan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nohp',
        'label' => 'Nomor HP',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jalan',
        'label' => 'Jalan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'rt',
        'label' => 'RT',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'rw',
        'label' => 'RW',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kel',
        'label' => 'Kelurahan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kec',
        'label' => 'Kecamatan',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'kota',
        'label' => 'kab/Kota',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'prov',
        'label' => 'Provinsi',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'tempat_lhr' => htmlspecialchars($this->input->post('tempat_lhr', true)),
        'tgl_lhr' => strtotime(htmlspecialchars($this->input->post('tgl_lhr', true))),
        'jenis_kel' => htmlspecialchars($this->input->post('jenis_kel', true)),
        'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
        'agama' => htmlspecialchars($this->input->post('agama', true)),
        'status_kawin' => htmlspecialchars($this->input->post('status_kawin', true)),
        'pendidikan' => htmlspecialchars($this->input->post('pendidikan', true)),
        'nohp' => htmlspecialchars($this->input->post('nohp', true)),
        'email' => htmlspecialchars($this->input->post('email', true)),
        'npwp' => htmlspecialchars($this->input->post('npwp', true)),
        'jalan' => htmlspecialchars($this->input->post('jalan', true)),
        'rt' => htmlspecialchars($this->input->post('rt', true)),
        'rw' => htmlspecialchars($this->input->post('rw', true)),
        'kel' => htmlspecialchars($this->input->post('kel', true)),
        'kec' => htmlspecialchars($this->input->post('kec', true)),
        'kota' => htmlspecialchars($this->input->post('kota', true)),
        'prov' => htmlspecialchars($this->input->post('prov', true)),
        'rekening' => htmlspecialchars($this->input->post('rekening', true)),
        'nama_bank' => htmlspecialchars($this->input->post('nama_bank', true)),
        'nama_rek' => htmlspecialchars($this->input->post('nama_rek', true)),
        'gol' => htmlspecialchars($this->input->post('gol', true)),
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
