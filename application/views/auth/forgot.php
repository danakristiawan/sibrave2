<div class="login-box">
  <div class="login-logo">
    <?= $judul; ?>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

      <?= $this->session->flashdata('message'); ?>

      <form action="<?= base_url('auth/forgot'); ?>" method="post" autocomplete="off">
        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
        <div class="form-group has-feedback">
          <label>Email :</label>
          <input type="text" name="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" placeholder="Email" value="<?= set_value('email'); ?>">
          <?= form_error('email', '<small class="text-danger pl-0">', '</small>'); ?>
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