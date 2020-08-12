<div class="login-box">
  <div class="login-logo">
    <?= $judul; ?>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <form action="<?= base_url('auth/registration'); ?>" method="post" autocomplete="off">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
        <div class="form-group has-feedback">
          <label>Nama :</label>
          <input type="text" name="nama" class="form-control <?= form_error('nama') ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
          <?= form_error('nama', '<small class="text-danger pl-0">', '</small>'); ?>
        </div>
        <div class="form-group has-feedback">
          <label>NIK :</label>
          <input type="text" name="nik" class="form-control <?= form_error('nik') ? 'is-invalid' : ''; ?>" placeholder="nik" value="<?= set_value('nik'); ?>">
          <?= form_error('nik', '<small class="text-danger pl-0">', '</small>'); ?>
        </div>
        <div class="form-group has-feedback">
          <label>Email :</label>
          <input type="text" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" placeholder="example@gmail.com" value="<?= set_value('email'); ?>">
          <?= form_error('email', '<small class="text-danger pl-0">', '</small>'); ?>
        </div>
        <div class="row">
          <div class="col md-6">
            <div class="form-group has-feedback">
              <label>Password :</label>
              <input type="password" name="password1" class="form-control <?= form_error('password1') ? 'is-invalid' : ''; ?>" placeholder="Password">
              <?= form_error('password1', '<small class="text-danger pl-0">', '</small>'); ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group has-feedback">
              <label>Ulangi Password :</label>
              <input type="password" name="password2" class="form-control <?= form_error('password2') ? 'is-invalid' : ''; ?>" placeholder="Ulangi Password">
              <?= form_error('password2', '<small class="text-danger pl-0">', '</small>'); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="<?= base_url('auth/forgot'); ?>">Lupa password</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('auth'); ?>" class="text-center">Kembali ke halaman Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->