<div id="app">
  <div id="main" class="layout-horizontal" style="margin-left: 5vw; margin-right: 5vw;">
    <!-- <div class="container"> -->
      <div class="page-heading">
        <h3>Dashboard Akademik</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12">
            <!-- Main Content -->
            <main class="page-content">
              <div class="container-fluid">
                <!-- <div class="content-header">
                  <div class="page-title">
                    <div class="row mb-2">
                      <div class="col-12 col-md-6">
                        <i class="fa fa-users"></i>
                        Selamat Datang Sebagai <?= ucfirst($this->fungsi->user_login()->user) ?>
                        <b>(<?= ucfirst(get_level_name($this->fungsi->user_login()->level)) ?>)</b>
                      </div>
                      <div class="col-12 col-md-6 order-md-2 order-first">
                        <ol class="breadcrumb float-sm-end">
                          <li class="breadcrumb-item"><a href="<?= site_url('home/') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Dashboard Akademik</li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div> -->

                <section class="section">
                  <div class="card">
                    <div class="card-body">
                      <!-- Table Data Mahasiswa -->
                      <div class="d-flex justify-content-between mb-3">
                        <a href="<?= site_url('akd/download') ?>" class="btn btn-primary">Download Excel</a>
                        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#inputModal">Input Data Mahasiswa</a>
                      </div>
                      <?php $this->load->view('akd/v_data'); ?>
                    </div>
                  </div>
                </section>
              </div>
            </main>
          </div>
        </section>
      </div>
    <!-- </div> -->

    <footer>
      <!-- <div class="container"> -->
        <div class="footer clearfix mb-0 text-muted" style="margin-left: 1vw; margin-right: 5vw;">
          <div class="float-start">
            <p>&copy; 2025 Sistem Wisuda. Semua hak cipta dilindungi.</p>
          </div>
        </div>
      <!-- </div> -->
    </footer>
  </div>
</div>

<!-- Modal for Input Data Mahasiswa -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="inputModalLabel">Input Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
    </div>
  </div>
</div>
