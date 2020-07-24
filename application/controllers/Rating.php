<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rating extends CI_Controller
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
    $this->load->view('rating/index', $data);
    $this->load->view('template/footer');
  }

  public function detail_sk($kegiatan_id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk'] = $this->db->get_where('data_sk', ['kegiatan_id' => $kegiatan_id])->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('rating/detail_sk', $data);
    $this->load->view('template/footer');
  }

  public function detail_petugas($kegiatan_id = null, $sk_id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    // data
    $data['title'] = $this->judul->title();
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $query = "SELECT a.id,a.nik,a.nama,a.jml,a.capaian,b.rating FROM data_petugas a LEFT JOIN data_rating b ON a.id=b.petugas_id WHERE a.kegiatan_id='$kegiatan_id' AND a.sk_id='$sk_id'";
    $data['petugas'] = $this->db->query($query)->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('rating/detail_petugas', $data);
    $this->load->view('template/footer');
  }

  public function edit_rating($kegiatan_id = null, $sk_id = null, $petugas_id = null, $rating = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($petugas_id)) redirect('auth/blocked');
    if (!isset($rating)) redirect('auth/blocked');
    // query
    $cek = [
      'petugas_id' => $petugas_id
    ];
    $data = [
      'petugas_id' => $petugas_id,
      'rating' => $rating,
      'date_created' => time()
    ];
    $data2 = [
      'rating' => $rating,
      'date_created' => time()
    ];
    $result = $this->db->get_where('data_rating', $cek);

    if ($result->num_rows() < 1) {
      $this->db->insert('data_rating', $data);
    } else {
      $this->db->update('data_rating', $data2, $cek);
    }
    redirect('rating/detail-petugas/' . $kegiatan_id . '/' . $sk_id . '');
  }
}
