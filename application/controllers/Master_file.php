<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_file extends CI_Controller
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
    $data['master'] = $this->db->query("SELECT kdprov,kdkab,kdkec,kddesa,nmdesa, COUNT(msubsls) AS jml FROM ref_master_file WHERE kdbps='$kdbps' GROUP BY kdprov,kdkab,kdkec,kddesa,nmdesa")->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('master_file/index', $data);
    $this->load->view('template/footer');
  }

  public function detail($kode = null)
  {
    // check kode
    if (!isset($kode)) redirect('auth/blocked');
    // data
    $kdprov = substr($kode, 0, 2);
    $kdkab = substr($kode, 2, 2);
    $kdkec = substr($kode, 4, 3);
    $kddesa = substr($kode, 7, 3);
    $data['title'] = $this->judul->title();
    $kdbps = getBps()['kdbps'];
    $data['kode'] = $kode;
    $data['master_file'] = $this->db->get_where('ref_master_file', ['kdprov' => $kdprov, 'kdkab' => $kdkab, 'kdkec' => $kdkec, 'kddesa' => $kddesa, 'kdbps' => $kdbps])->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('master_file/detail', $data);
    $this->load->view('template/footer');
  }

  public function edit($kode = null, $id = null)
  {
    // check id
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kode'] = $kode;
    $data['master'] = $this->db->get_where('ref_master_file', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'kk',
        'label' => 'kk',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'bstt',
        'label' => 'bstt',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'bsbtt',
        'label' => 'bsbtt',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'bstt_k',
        'label' => 'bstt_k',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama_ksls',
        'label' => 'nama_ksls',
        'rules' => 'trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kk' => htmlspecialchars($this->input->post('kk', true)),
        'bstt' => htmlspecialchars($this->input->post('bstt', true)),
        'bsbtt' => htmlspecialchars($this->input->post('bsbtt', true)),
        'bstt_k' => htmlspecialchars($this->input->post('bstt_k', true)),
        'nama_ksls' => htmlspecialchars($this->input->post('nama_ksls', true)),
        'date_created' => time()
      ];
      $this->db->update('ref_master_file', $data, ['id' => $id]);
      redirect('master-file/detail/' . $kode . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('master_file/edit', $data);
    $this->load->view('template/footer');
  }

  public function excel()
  {
    // data
    $data['kdbps'] = getBps()['kdbps'];
    $data['master_file'] = $this->db->get_where('ref_master_file', ['kdbps' => $data['kdbps']])->result_array();
    // form
    $this->load->view('master_file/excel', $data);
  }
}
