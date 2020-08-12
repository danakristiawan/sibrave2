</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div></div>
  <div class="text-right mr-2">
    &copy; 2020 Istiqamah Rani. All rights reserved.
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
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
<script>
  var csfrData = {};
  csfrData['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?= $this->security->get_csrf_hash(); ?>';
  $.ajaxSetup({
    data: csfrData
  });
  $('.datepicker').datepicker();
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  });
  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });

  $('.form-check-input').on('click', function() {
    const nik = $(this).data('nik');
    const nama = $(this).data('nama');
    $.ajax({
      url: "<?= base_url('user/adduser'); ?>",
      type: 'post',
      data: {
        nik: nik,
        nama: nama
      },
      success: function() {
        // document.location.href = "<?= base_url('daftar/add/'); ?>" + tahunId;
      }
    });
  });

  $('.form-check-input-2').on('click', function() {
    const nik = $(this).data('nik');
    const nama = $(this).data('nama');
    $.ajax({
      url: "<?= base_url('user-petugas/adduser'); ?>",
      type: 'post',
      data: {
        nik: nik,
        nama: nama
      },
      success: function() {
        // document.location.href = "<?= base_url('daftar/add/'); ?>" + tahunId;
      }
    });
  });

  $('.form-check-petugas').on('click', function() {
    let kegiatan_id = $(this).data('kegiatan_id');
    let sk_id = $(this).data('sk_id');
    let kelurahan_id = $(this).data('kelurahan_id');
    let nik = $(this).data('nik');
    let nama = $(this).data('nama');
    let alamat = $(this).data('alamat');
    let pekerjaan = $(this).data('pekerjaan');
    let gol = $(this).data('gol');
    $.ajax({
      url: "<?= base_url('kegiatan/addpetugas'); ?>",
      type: 'post',
      data: {
        kegiatan_id: kegiatan_id,
        sk_id: sk_id,
        kelurahan_id: kelurahan_id,
        nik: nik,
        nama: nama,
        alamat: alamat,
        pekerjaan: pekerjaan,
        gol: gol
      },
      success: function() {
        // console.log(data);
      }
    });
  });

  $('.form-check-kelurahan').on('click', function() {
    let kegiatan_id = $(this).data('kegiatan_id');
    let sk_id = $(this).data('sk_id');
    let kode_desa = $(this).data('kode_desa');
    let nama_desa = $(this).data('nama_desa');
    $.ajax({
      url: "<?= base_url('kegiatan/addkelurahan'); ?>",
      type: 'post',
      data: {
        kegiatan_id: kegiatan_id,
        sk_id: sk_id,
        kode_desa: kode_desa,
        nama_desa: nama_desa
      },
      success: function() {
        // console.log(data);
      }
    });
  });
</script>
</body>


</html>