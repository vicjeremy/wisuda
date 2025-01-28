<!-- Main Content -->
<main class="page-content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Data Mahasiswa</h1>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="<?= site_url('home/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Input Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Input Data Mahasiswa</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="<?= base_url(); ?>akd/save_mhs" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="import">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" id="file" name="file" required>
                  <label class="custom-file-label" for="file">Choose file</label>
                </div>
              </div>
              <br>
              <?php if ($this->session->flashdata('message')): ?>
                <div class="alert alert-success">
                  <?= $this->session->flashdata('message'); ?>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                  <?= $this->session->flashdata('error'); ?>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('duplicate_nims')): ?>
                <div class="alert alert-warning">
                  <strong>Perhatian!</strong> Data dengan NIM berikut sudah ada:
                  <?= $this->session->flashdata('duplicate_nims'); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
    </div>
  </section>
</main>

<div class="footer clearfix mb-0 text-muted">
  <div class="float-start">
    <p>&copy; 2025 Sistem Wisuda. Semua hak cipta dilindungi.</p>
  </div>
</div>