<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Olah_cepat extends CI_Controller
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
    $kdbps = getBps()['kdbps'];;
    $data['mfd'] = $this->db->query("SELECT kdprop,kdkota,kdkec,kddesa,nmdesa, COUNT(kdsub) AS jml, COUNT(no_urut_besar) AS selesai FROM data_mfd WHERE kdbps='$kdbps' GROUP BY kdprop,kdkota,kdkec,kddesa,nmdesa")->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('olah_cepat/index', $data);
    $this->load->view('template/footer');
  }

  public function detail($kode = null)
  {
    // check kode
    if (!isset($kode)) redirect('auth/blocked');
    // data
    $kdprop = substr($kode, 0, 2);
    $kdkota = substr($kode, 2, 2);
    $kdkec = substr($kode, 4, 3);
    $kddesa = substr($kode, 7, 3);
    $data['title'] = $this->judul->title();
    $kdbps = getBps()['kdbps'];
    $data['kode'] = $kode;
    $data['mfd'] = $this->db->get_where('data_mfd', ['kdprop' => $kdprop, 'kdkota' => $kdkota, 'kdkec' => $kdkec, 'kddesa' => $kddesa, 'kdbps' => $kdbps])->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('olah_cepat/detail', $data);
    $this->load->view('template/footer');
  }

  public function edit($kode = null, $id = null)
  {
    // check id
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kode'] = $kode;
    $data['master'] = $this->db->get_where('data_mfd', ['id' => $id])->row_array();
    // nama operator
    $nik = $this->session->userdata('nik');
    $row = $this->db->query("SELECT nama FROM system_user WHERE nik='$nik'")->row_array();
    $nama = $row['nama'];
    // validasi
    $rules = [
      [
        'field' => 'no_urut_besar',
        'label' => 'no_urut_besar',
        'rules' => 'required|trim'
      ],
      [
        'field' => '107a',
        'label' => '107a',
        'rules' => 'required|trim'
      ],
      [
        'field' => '107b',
        'label' => '107b',
        'rules' => 'required|trim'
      ],
      [
        'field' => '107c',
        'label' => '107c',
        'rules' => 'required|trim'
      ],
      [
        'field' => '107d',
        'label' => '107d',
        'rules' => 'required|trim'
      ],
      [
        'field' => '108a',
        'label' => '108a',
        'rules' => 'required|trim'
      ],
      [
        'field' => '108b',
        'label' => '108b',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jml_4a',
        'label' => 'jml_4a',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jml_4b',
        'label' => 'jml_4b',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jml_4c',
        'label' => 'jml_4c',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jml_5',
        'label' => 'jml_5',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nm_ketuasls',
        'label' => 'nm_ketuasls',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'no_urut_besar' => htmlspecialchars($this->input->post('no_urut_besar', true)),
        '107a' => htmlspecialchars($this->input->post('107a', true)),
        '107b' => htmlspecialchars($this->input->post('107b', true)),
        '107c' => htmlspecialchars($this->input->post('107c', true)),
        '107d' => htmlspecialchars($this->input->post('107d', true)),
        '108a' => htmlspecialchars($this->input->post('108a', true)),
        '108b' => htmlspecialchars($this->input->post('108b', true)),
        'jml_4a' => htmlspecialchars($this->input->post('jml_4a', true)),
        'jml_4b' => htmlspecialchars($this->input->post('jml_4b', true)),
        'jml_4c' => htmlspecialchars($this->input->post('jml_4c', true)),
        'jml_5' => htmlspecialchars($this->input->post('jml_5', true)),
        'nm_ketuasls' => htmlspecialchars($this->input->post('nm_ketuasls', true)),
        'nm_operator' => $nama,
        'date_created' => time()
      ];
      $this->db->update('data_mfd', $data, ['id' => $id]);
      redirect('olah-cepat/detail/' . $kode . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('olah_cepat/edit', $data);
    $this->load->view('template/footer');
  }

  public function excel()
  {
    // data
    $data['kdbps'] = getBps()['kdbps'];
    $data['mfd'] = $this->db->get_where('data_mfd', ['kdbps' => $data['kdbps']])->result_array();
    // form
    $this->load->view('olah_cepat/excel', $data);
  }
}
