<div class="login-box">
  <div class="login-logo">
    <?= $judul; ?>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="alert alert-info">
        <h5>
          <center><?= $this->session->userdata('reset_email'); ?></center>
        </h5>
      </div>

      <?= $this->session->flashdata('message'); ?>

      <form action="<?= base_url('auth/changepassword'); ?>" method="post" autocomplete="off">

        <div class="form-group has-feedback">
          <label>Password :</label>
          <input type="password" name="password1" class="form-control" placeholder="Password">
          <?= form_error('password1', '<small class="text-danger pl-0">', '</small>'); ?>
        </div>

        <div class="form-group has-feedback">
          <label>Ulangi Password :</label>
          <input type="password" name="password2" class="form-control" placeholder="Ulangi Password">
          <?= form_error('password2', '<small class="text-danger pl-0">', '</small>'); ?>
        </div>

        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Reset</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">

      </p>
      <p class="mb-0">
        <a href="<?= base_url('auth'); ?>" class="text-center">Kembali ke halaman login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->