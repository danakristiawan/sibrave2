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
    $kdbps = getBps()['kdbps'];
    $query = "SELECT a.*,b.nama AS nm_pj FROM data_kegiatan a LEFT JOIN ref_jabatan b ON a.jabatan_id=b.id WHERE a.kdbps='$kdbps'";
    $data['kegiatan'] = $this->db->query($query)->result_array();
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
    $kdbps = getBps()['kdbps'];
    $data['jenis'] = $this->db->get('ref_jenis')->result_array();
    $data['jabatan'] = $this->db->get_where('ref_jabatan', ['kdbps' => $kdbps])->result_array();
    // validasi
    $rules = [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jenis',
        'label' => 'Jenis',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jml_petugas',
        'label' => 'Jumlah Petugas',
        'rules' => 'required|trim|numeric'
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
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //upload file
      $upload_file = $_FILES['file']['name'];
      if ($upload_file) {
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['max_size']     = '10000';
        $config['encrypt_name']     = TRUE;
        $config['upload_path'] = 'assets/img/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
          $new_file = $this->upload->data('file_name');
          $this->db->set('file', $new_file);
        } else {
          echo $this->upload->display_errors();
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload file gagal, mohon sesuaikan format dan ukuran!</div>');
          redirect('kegiatan');
        }
      }

      //query
      $data = [
        'kdbps' => getBps()['kdbps'],
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'jenis' => htmlspecialchars($this->input->post('jenis', true)),
        'jml_petugas' => htmlspecialchars($this->input->post('jml_petugas', true)),
        'tgl_mulai' => strtotime(htmlspecialchars($this->input->post('tgl_mulai', true))),
        'tgl_selesai' => strtotime(htmlspecialchars($this->input->post('tgl_selesai', true))),
        'jabatan_id' => htmlspecialchars($this->input->post('jabatan_id', true)),
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
    $data['jenis'] = $this->db->get('ref_jenis')->result_array();
    $data['jabatan'] = $this->db->get('ref_jabatan')->result_array();
    $data['kegiatan'] = $this->db->get_where('data_kegiatan', ['id' => $id])->row_array();
    // validasi
    $rules = [
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jenis',
        'label' => 'Jenis',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'jml_petugas',
        'label' => 'Jumlah Petugas',
        'rules' => 'required|trim|numeric'
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
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //upload file
      $upload_file = $_FILES['file']['name'];
      if ($upload_file) {
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['remove_spaces'] = TRUE;
        $config['max_size']     = '10000';
        $config['encrypt_name']     = TRUE;
        $config['upload_path'] = 'assets/img/';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
          $new_file = $this->upload->data('file_name');
          $this->db->set('file', $new_file);
        } else {
          echo $this->upload->display_errors();
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload file gagal, mohon sesuaikan format dan ukuran!</div>');
          redirect('kegiatan');
        }
      }
      //query
      $data = [
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'jenis' => htmlspecialchars($this->input->post('jenis', true)),
        'jml_petugas' => htmlspecialchars($this->input->post('jml_petugas', true)),
        'tgl_mulai' => strtotime(htmlspecialchars($this->input->post('tgl_mulai', true))),
        'tgl_selesai' => strtotime(htmlspecialchars($this->input->post('tgl_selesai', true))),
        'jabatan_id' => htmlspecialchars($this->input->post('jabatan_id', true)),
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

  //surat keputusan
  public function sk_index($kegiatan_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    // data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['title'] = $this->judul->title();
    $data['sk'] = $this->db->query("SELECT a.*,b.kd_program,b.kd_kegiatan,b.kd_output,b.kd_komponen,b.kd_akun FROM data_sk a LEFT JOIN ref_akun b ON a.akun_id=b.id WHERE a.kegiatan_id='$kegiatan_id'")->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('sk/index', $data);
    $this->load->view('template/footer');
  }

  public function sk_add($kegiatan_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    //providing data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['title'] = $this->judul->title();
    $data['akun'] = $this->db->get('ref_akun')->result_array();
    $data['rate'] = $this->db->get('ref_rate')->result_array();
    // validasi
    $rules = [
      [
        'field' => 'nomor',
        'label' => 'Nomor',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tanggal',
        'label' => 'Tanggal',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'no_dipa',
        'label' => 'No DIPA',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'rate',
        'label' => 'Rate',
        'rules' => 'required|trim|numeric'
      ],
      [
        'field' => 'no_spk',
        'label' => 'No SPK',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_spk',
        'label' => 'Tgl SPK',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'lama',
        'label' => 'Lama',
        'rules' => 'trim'
      ],
      [
        'field' => 'no_st',
        'label' => 'No ST',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_st',
        'label' => 'Tgl ST',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kegiatan_id' => $kegiatan_id,
        'nomor' => htmlspecialchars($this->input->post('nomor', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'tanggal' => strtotime(htmlspecialchars($this->input->post('tanggal', true))),
        'no_dipa' => htmlspecialchars($this->input->post('no_dipa', true)),
        'akun_id' => htmlspecialchars($this->input->post('akun_id', true)),
        'rate' => htmlspecialchars($this->input->post('rate', true)),
        'jenis_rate' => htmlspecialchars($this->input->post('jenis_rate', true)),
        'no_spk' => htmlspecialchars($this->input->post('no_spk', true)),
        'tgl_spk' => strtotime(htmlspecialchars($this->input->post('tgl_spk', true))),
        'lama' => htmlspecialchars($this->input->post('lama', true)),
        'no_st' => htmlspecialchars($this->input->post('no_st', true)),
        'tgl_st' => strtotime(htmlspecialchars($this->input->post('tgl_st', true))),
        'date_created' => time()
      ];
      $this->db->insert('data_sk', $data);
      redirect('kegiatan/sk-index/' . $kegiatan_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('sk/add', $data);
    $this->load->view('template/footer');
  }

  public function sk_edit($kegiatan_id = null, $id = null)
  {
    // check id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['title'] = $this->judul->title();
    $data['akun'] = $this->db->get('ref_akun')->result_array();
    $data['sk'] = $this->db->get_where('data_sk', ['id' => $id])->row_array();
    $data['rate'] = $this->db->get('ref_rate')->result_array();
    // validasi
    $rules = [
      [
        'field' => 'nomor',
        'label' => 'Nomor',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'nama',
        'label' => 'Nama',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tanggal',
        'label' => 'Tanggal',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'no_dipa',
        'label' => 'No DIPA',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'rate',
        'label' => 'Rate',
        'rules' => 'required|trim|numeric'
      ],
      [
        'field' => 'no_spk',
        'label' => 'No SPK',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_spk',
        'label' => 'Tgl SPK',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'lama',
        'label' => 'Lama',
        'rules' => 'trim'
      ],
      [
        'field' => 'no_st',
        'label' => 'No ST',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_st',
        'label' => 'Tgl ST',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'kegiatan_id' => $kegiatan_id,
        'nomor' => htmlspecialchars($this->input->post('nomor', true)),
        'nama' => htmlspecialchars($this->input->post('nama', true)),
        'tanggal' => strtotime(htmlspecialchars($this->input->post('tanggal', true))),
        'no_dipa' => htmlspecialchars($this->input->post('no_dipa', true)),
        'akun_id' => htmlspecialchars($this->input->post('akun_id', true)),
        'rate' => htmlspecialchars($this->input->post('rate', true)),
        'jenis_rate' => htmlspecialchars($this->input->post('jenis_rate', true)),
        'no_spk' => htmlspecialchars($this->input->post('no_spk', true)),
        'tgl_spk' => strtotime(htmlspecialchars($this->input->post('tgl_spk', true))),
        'lama' => htmlspecialchars($this->input->post('lama', true)),
        'no_st' => htmlspecialchars($this->input->post('no_st', true)),
        'tgl_st' => strtotime(htmlspecialchars($this->input->post('tgl_st', true))),
        'date_created' => time()
      ];
      $this->db->update('data_sk', $data, ['id' => $id]);
      redirect('kegiatan/sk-index/' . $kegiatan_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('sk/edit', $data);
    $this->load->view('template/footer');
  }

  public function sk_delete($kegiatan_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('data_sk', ['id' => $id])) {
      redirect('kegiatan/sk-index/' . $kegiatan_id . '');
    }
  }

  public function sk_cetak($kegiatan_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // query
    $data['sk'] = $this->db->get_where('data_sk', ['id' => $id])->row_array();
    $data['petugas'] = $this->db->get_where('data_petugas', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $id])->result_array();
    $kdbps = getBps()['kdbps'];
    $data['bps'] = $this->db->get_where('ref_bps', ['kode' => $kdbps])->row_array();
    $data['jabatan'] = $this->db->get_where('ref_jabatan', ['kdbps' => $kdbps, 'kode' => '01'])->row_array();
    //cetak
    ob_start();
    $this->load->view('laporan/sk', $data);
    $html = ob_get_clean();
    $html2pdf = new Pdf('P', 'A4', 'en', false, 'UTF-8', array(20, 10, 20, 10));
    $html2pdf->pdf->SetTitle('SK');
    $html2pdf->writeHTML($html);
    $html2pdf->output('sk.pdf');
  }

  //kelurahan
  public function kelurahan_index($kegiatan_id = null, $sk_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    // data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['title'] = $this->judul->title();
    $data['kelurahan'] = $this->db->get_where('data_kelurahan', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id])->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('kelurahan/index', $data);
    $this->load->view('template/footer');
  }

  public function kelurahan_add($kegiatan_id = null, $sk_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    //providing data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['title'] = $this->judul->title();
    $kdbps = getBps()['kdbps'];
    $data['master'] = $this->db->query("SELECT DISTINCT kdprov,kdkab,kdkec,kddesa,nmdesa FROM ref_master_file WHERE kdbps='$kdbps'")->result_array();
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('kelurahan/add', $data);
    $this->load->view('template/footer');
  }

  public function addkelurahan()
  {
    $kegiatan_id = $this->input->post('kegiatan_id');
    $sk_id = $this->input->post('sk_id');
    $kode_desa = $this->input->post('kode_desa');
    $nama_desa = $this->input->post('nama_desa');

    $data = [
      'kegiatan_id' => $kegiatan_id,
      'sk_id' => $sk_id,
      'kode_desa' => $kode_desa,
      'nama_desa' => $nama_desa,
      'date_created' => time()
    ];
    $cek = [
      'kegiatan_id' => $kegiatan_id,
      'sk_id' => $sk_id,
      'kode_desa' => $kode_desa
    ];

    $result = $this->db->get_where('data_kelurahan', $cek);

    if ($result->num_rows() < 1) {
      $this->db->insert('data_kelurahan', $data);
    } else {
      $this->db->delete('data_kelurahan', $cek);
    }
  }

  public function kelurahan_delete($kegiatan_id = null, $sk_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('data_kelurahan', ['id' => $id])) {
      redirect('kegiatan/kelurahan-index/' . $kegiatan_id . '/' . $sk_id . '');
    }
  }

  //petugas
  public function petugas_index($kegiatan_id = null, $sk_id = null, $kelurahan_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    // data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['kelurahan_id'] = $kelurahan_id;
    $data['title'] = $this->judul->title();
    $data['petugas'] = $this->db->get_where('data_petugas', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id, 'kelurahan_id' => $kelurahan_id])->result_array();
    //query
    // validasi
    $rules = [
      [
        'field' => 'jumlah_petugas',
        'label' => 'Jumlah Petugas',
        'rules' => 'trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'jumlah_petugas' => htmlspecialchars($this->input->post('jumlah_petugas', true)),
        'jumlah_target' => htmlspecialchars($this->input->post('jumlah_target', true)),
        'jumlah_bruto' => htmlspecialchars($this->input->post('jumlah_bruto', true))
      ];
      $this->db->update('data_kelurahan', $data, ['id' => $kelurahan_id]);
      redirect('kegiatan/kelurahan-index/' . $kegiatan_id . '/' . $sk_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('petugas/index', $data);
    $this->load->view('template/footer');
  }

  public function petugas_add($kegiatan_id = null, $sk_id = null, $kelurahan_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    //providing data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['kelurahan_id'] = $kelurahan_id;
    $data['title'] = $this->judul->title();
    // $data['token_name'] = $this->security->get_csrf_token_name();
    // $data['token_hash'] = $this->security->get_csrf_hash();
    $data['petugas'] = [];
    // load ref petugas
    if ($this->input->post('keyword')) {
      $keyword = htmlspecialchars($this->input->post('keyword', true));
      $this->db->select('nik,nama,jalan,rt,rw,kel,kec,kota,prov,pekerjaan,gol');
      $this->db->from('ref_petugas');
      $this->db->like('nama', $keyword);
      $this->db->or_like('nik', $keyword);
      $query = $this->db->get();
      $data['petugas'] = $query->result_array();
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('petugas/add', $data);
    $this->load->view('template/footer');
  }

  public function addpetugas()
  {
    $kegiatan_id = $this->input->post('kegiatan_id');
    $sk_id = $this->input->post('sk_id');
    $kelurahan_id = $this->input->post('kelurahan_id');
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $pekerjaan = $this->input->post('pekerjaan');
    $gol = $this->input->post('gol');

    //no urut
    $petugas = $this->db->query("SELECT no_urut FROM data_petugas WHERE kegiatan_id='$kegiatan_id' AND sk_id='$sk_id' ORDER BY no_urut DESC LIMIT 1")->row_array();
    if ($petugas) {
      $nomor = intval($petugas['no_urut']) + 1;
      if (strlen($nomor) == 1) {
        $no_urut = '000' . $nomor;
      } else if (strlen($nomor) == 2) {
        $no_urut = '00' . $nomor;
      } else if (strlen($nomor) == 3) {
        $no_urut = '0' . $nomor;
      } else {
        $no_urut = $nomor;
      }
    } else {
      $no_urut = '0001';
    }

    $data = [
      'kegiatan_id' => $kegiatan_id,
      'sk_id' => $sk_id,
      'kelurahan_id' => $kelurahan_id,
      'nik' => $nik,
      'nama' => $nama,
      'alamat' => $alamat,
      'pekerjaan' => $pekerjaan,
      'gol' => $gol,
      'no_urut' => $no_urut,
      'date_created' => time()
    ];
    $cek = [
      'kegiatan_id' => $kegiatan_id,
      'sk_id' => $sk_id,
      'kelurahan_id' => $kelurahan_id,
      'nik' => $nik
    ];

    $result = $this->db->get_where('data_petugas', $cek);

    if ($result->num_rows() < 1) {
      $this->db->insert('data_petugas', $data);
    } else {
      $this->db->delete('data_petugas', $cek);
    }
  }

  public function petugas_delete($kegiatan_id = null, $sk_id = null, $kelurahan_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // query
    if ($this->db->delete('data_petugas', ['id' => $id])) {
      redirect('kegiatan/petugas-index/' . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id . '');
    }
  }

  public function spk_edit($kegiatan_id = null, $sk_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    //providing data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['title'] = $this->judul->title();
    $data['spk'] = $this->db->get_where('data_petugas', ['id' => $id])->row_array();
    // query
    // validasi
    $rules = [
      [
        'field' => 'no_spk',
        'label' => 'Nomor SPK',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_spk',
        'label' => 'Tanggal SPK',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'no_spk' => htmlspecialchars($this->input->post('no_spk', true)),
        'tgl_spk' => strtotime(htmlspecialchars($this->input->post('tgl_spk', true)))
      ];
      $this->db->update('data_petugas', $data, ['id' => $id]);
      redirect('kegiatan/petugas-index/' . $kegiatan_id . '/' . $sk_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('spk/edit', $data);
    $this->load->view('template/footer');
  }

  public function st_edit($kegiatan_id = null, $sk_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    //providing data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['title'] = $this->judul->title();
    $data['st'] = $this->db->get_where('data_petugas', ['id' => $id])->row_array();
    // query
    // validasi
    $rules = [
      [
        'field' => 'no_st',
        'label' => 'Nomor ST',
        'rules' => 'required|trim'
      ],
      [
        'field' => 'tgl_st',
        'label' => 'Tanggal ST',
        'rules' => 'required|trim'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $data = [
        'no_st' => htmlspecialchars($this->input->post('no_st', true)),
        'tgl_st' => strtotime(htmlspecialchars($this->input->post('tgl_st', true)))
      ];
      $this->db->update('data_petugas', $data, ['id' => $id]);
      redirect('kegiatan/petugas-index/' . $kegiatan_id . '/' . $sk_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('st/edit', $data);
    $this->load->view('template/footer');
  }

  public function target_edit($kegiatan_id = null, $sk_id = null, $kelurahan_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    //providing data
    $data['kegiatan_id'] = $kegiatan_id;
    $data['sk_id'] = $sk_id;
    $data['kelurahan_id'] = $kelurahan_id;
    $data['title'] = $this->judul->title();
    $data['target'] = $this->db->get_where('data_petugas', ['id' => $id])->row_array();
    // query
    // validasi
    $rules = [
      [
        'field' => 'target',
        'label' => 'Target',
        'rules' => 'required|numeric'
      ]
    ];
    $validation = $this->form_validation->set_rules($rules);
    if ($validation->run()) {
      //query
      $target = htmlspecialchars($this->input->post('target', true));
      $tarif = $this->db->query("SELECT rate,jenis_rate FROM data_sk WHERE kegiatan_id='$kegiatan_id' AND id='$sk_id'")->row_array();
      if ($tarif['jenis_rate'] == 'Lumpsum') {
        $bruto = $tarif['rate'];
      } else {
        $bruto = $target * $tarif['rate'];
      }
      $data = [
        'target' => $target,
        'bruto' => $bruto
      ];
      $this->db->update('data_petugas', $data, ['id' => $id]);
      redirect('kegiatan/petugas-index/' . $kegiatan_id . '/' . $sk_id . '/' . $kelurahan_id . '');
    }
    // form
    $this->load->view('template/header');
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('target/edit', $data);
    $this->load->view('template/footer');
  }

  public function spk_cetak($kegiatan_id = null, $sk_id = null, $kelurahan_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // query
    $kdbps = getBps()['kdbps'];
    $data['bps'] = $this->db->get_where('ref_bps', ['kode' => $kdbps])->row_array();
    $data['petugas'] = $this->db->get_where('data_petugas', ['id' => $id])->row_array();
    $data['kegiatan'] = $this->db->get_where('data_kegiatan', ['id' => $kegiatan_id])->row_array();
    $data['sk'] = $this->db->query("SELECT a.*,b.kd_program,b.kd_kegiatan FROM data_sk a LEFT JOIN ref_akun b ON a.akun_id=b.id WHERE a.id='$sk_id'")->row_array();
    $data['jabatan'] = $this->db->get_where('ref_jabatan', ['kdbps' => $kdbps, 'kode' => '02'])->row_array();
    $data['lampiran'] = $this->db->get_where('data_lampiran_spk', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id])->result_array();
    //cetak
    ob_start();
    $this->load->view('laporan/spk', $data);
    $html = ob_get_clean();
    $html2pdf = new Pdf('P', 'A4', 'en', false, 'UTF-8', array(20, 10, 20, 10));
    $html2pdf->pdf->SetTitle('SPK');
    $html2pdf->writeHTML($html);
    // $html2pdf->output('spk.pdf', 'D');
    $html2pdf->output('spk.pdf');
  }

  public function st_cetak($kegiatan_id = null, $sk_id = null, $kelurahan_id = null, $id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    if (!isset($id)) redirect('auth/blocked');
    // query
    $kdbps = getBps()['kdbps'];
    $data['bps'] = $this->db->get_where('ref_bps', ['kode' => $kdbps])->row_array();
    $data['jabatan'] = $this->db->get_where('ref_jabatan', ['kdbps' => $kdbps, 'kode' => '01'])->row_array();
    $data['petugas'] = $this->db->get_where('data_petugas', ['id' => $id])->row_array();
    $data['kegiatan'] = $this->db->get_where('data_kegiatan', ['id' => $kegiatan_id])->row_array();
    $data['sk'] = $this->db->query("SELECT a.*,b.kd_program,b.kd_kegiatan ,b.kd_output,b.kd_komponen,b.kd_akun FROM data_sk a LEFT JOIN ref_akun b ON a.akun_id=b.id WHERE a.id='$sk_id'")->row_array();
    //cetak
    ob_start();
    $this->load->view('laporan/st', $data);
    $html = ob_get_clean();
    $html2pdf = new Pdf('P', 'A4', 'en', false, 'UTF-8', array(20, 10, 20, 10));
    $html2pdf->pdf->SetTitle('ST');
    $html2pdf->writeHTML($html);
    $html2pdf->output('st.pdf');
  }

  public function cetak_spk_all($kegiatan_id = null, $sk_id = null, $kelurahan_id = null)
  {
    // cek id
    if (!isset($kegiatan_id)) redirect('auth/blocked');
    if (!isset($sk_id)) redirect('auth/blocked');
    if (!isset($kelurahan_id)) redirect('auth/blocked');
    // query
    $kdbps = getBps()['kdbps'];
    $data['bps'] = $this->db->get_where('ref_bps', ['kode' => $kdbps])->row_array();
    $data['kegiatan'] = $this->db->get_where('data_kegiatan', ['id' => $kegiatan_id])->row_array();
    $data['sk'] = $this->db->query("SELECT a.*,b.kd_program,b.kd_kegiatan FROM data_sk a LEFT JOIN ref_akun b ON a.akun_id=b.id WHERE a.id='$sk_id'")->row_array();
    $data['jabatan'] = $this->db->get_where('ref_jabatan', ['kdbps' => $kdbps, 'kode' => '02'])->row_array();
    $data['lampiran'] = $this->db->get_where('data_lampiran_spk', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id])->result_array();
    //cetak
    $petugas = $this->db->get_where('data_petugas', ['kegiatan_id' => $kegiatan_id, 'sk_id' => $sk_id, 'kelurahan_id' => $kelurahan_id])->result_array();

    foreach ($petugas as $r) {
      $this->spk_cetak($kegiatan_id, $sk_id, $kelurahan_id, $r['id']);
    }
  }
}
