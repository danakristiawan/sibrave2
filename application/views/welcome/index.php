<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Sibrave</title>
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/sibrave.png" type="image/x-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <div class="container">
      <nav class="navbar bg-white">

      </nav>
    </div>

    <div class="container text-center" style="margin-top:80px;">
      <div class="row text-muted">
        <div class="col">
          <h5 style="font-weight:80;">Selamat Datang di</h5>
        </div>
      </div>
      <div class="row">
        <div class=" col">
          <h1 class="display-3" style="font-weight:200;">Si<strong>BRAVE</strong></h1>
        </div>
      </div>
      <div class="col mt-3">
        <img src="<?= base_url(); ?>assets/img/sibrave.png" alt="sibrave">
      </div>
      <div class="row text-muted">
        <div class="col mt-2">
          <h6 style="font-weight:100;">Sistem Pengelolaan Beban Tugas, Rating, dan Evaluasi Petugas Survei dan Sensus</h6>
        </div>
      </div>
      <div class="row mt-3 mb-5">
        <div class="col">
          <a href="<?= base_url('auth'); ?>" class="btn btn-outline-primary">Masuk Aplikasi</a>
          <a href="<?= base_url(); ?>assets/files/petunjuk-pengguna-sibrave.pdf" class="btn btn-outline-success ml-2" target="_blank">Petunjuk Pengguna</a>
        </div>
      </div>
    </div>

    <div class="container">
      <nav class="navbar fixed-bottom bg-white text-muted">
        <div></div>
        <div class="float-right d-none d-sm-inline-block text-muted">
          <small>&copy; 2020 Istiqamah Rani. All rights reserved.</small>
        </div>
      </nav>
    </div>

  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    // $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/datatables/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>assets/dist/js/adminlte.js"></script>
  <script src="<?= base_url(); ?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
</body>

</html>