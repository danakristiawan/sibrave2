<section class="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col">
        <div class="card">
          <?= form_open(); ?>

          <div class="card-header">

          </div>
          <div class="card-body">
            <table class="table table-sm" id="example1">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($petugas as $r) : ?>
                  <tr>
                    <td><?= $r['nik']; ?></td>
                    <td><?= $r['nama']; ?></td>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" <?= check_nik($r['nik']); ?> data-nik="<?= $r['nik']; ?>" data-nama="<?= $r['nama']; ?>">
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <a href="<?= base_url('user'); ?>" class="btn btn-sm btn-primary float-left"><i class="nav-icon fa fa-arrow-left"></i> Kembali</a>
          </div>

          </form>
        </div>
      </div>
    </div>

  </div>
</section>