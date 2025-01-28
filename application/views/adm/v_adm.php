<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app-dark.css'); ?>">
  <link rel="stylesheet"
    href="<?= base_url('assets/mazor/extensions/@fortawesome/fontawesome-free/css/all.min.css'); ?>">
  <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazor/compiled/css/iconly.css'); ?>">
  <link rel="stylesheet" href="assets/mazor/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" crossorigin="" href="assets/mazor/compiled/css/table-datatable-jquery.css">
  <!-- Scripts -->
  <script src="<?= base_url('assets/mazor/js/scripts.js'); ?>" defer></script>
</head>

<body>
  <script src="<?= base_url('assets/mazor/static/js/initTheme.js'); ?>"></script>
  <div id="app">
    <div id="main">
      <!-- Navbar -->
      <nav class="navbar navbar-expand navbar-top">
        <div class="container-fluid">
          <!-- Toggle tema -->
          <div class="theme-toggle d-flex gap-2 mt-2 justify-content-end align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="iconify iconify--system-uicons" width="20" height="20"
              preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
              <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                  opacity=".3"></path>
                <g transform="translate(-210 -1)">
                  <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                  <circle cx="220.5" cy="11.5" r="4"></circle>
                  <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                </g>
              </g>
            </svg>
            <div class="form-check form-switch fs-6">
              <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
              <label class="form-check-label"></label>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
              role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
              viewBox="0 0 24 24">
              <path fill="currentColor"
                d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
              </path>
            </svg>
          </div>
          <!-- ./Toggle tema -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-lg-0">
              <a href="<?php echo site_url('Auth/logout'); ?>" class="btn btn-danger">Logout</a>
            </ul>
          </div>
        </div>
      </nav>
      <!-- ./Navbar -->

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Dashboard Admin</h1>
            </div>
            <div class="col-sm-auto">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?= site_url('home/') ?>">Home</a></li>
                <li class="breadcrumb-item active">Dashboard Admin</li>
              </ol>
            </div>
          </div>
        </div>
      </section>

      <section class="row">
        <div class="col-12 col-lg-9">
          <div class="row">
            <div class="col-12 col-auto">
              <div class="card">
                <div class="card-body">
                  <?php if ($this->session->flashdata('message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?= htmlspecialchars($this->session->flashdata('message')); ?>

                    </div>
                  <?php endif; ?>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                    Tambah Data
                  </button>
                  <div class="table-responsive">
                    <table id="example2" class="table table-lg">
                      <thead>
                        <tr>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($status as $sts): ?>
                          <tr>
                            <td><?= htmlspecialchars($sts['user']); ?></td>
                            <td><?= htmlspecialchars($sts['pass']); ?></td>
                            <td><?= htmlspecialchars($sts['level']); ?></td>
                            <td>
                              <a href="<?php echo base_url(); ?>adm/delete_akn/<?php echo $sts['user']; ?>"
                                class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      </main>
      <!-- Modal -->
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addModalLabel">Tambah Data Akun</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo base_url(); ?>adm/save_akn" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username"
                    required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password"
                    placeholder="Masukkan Password" required>
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" id="level" name="level" required>
                    <option value="1">Admin</option>
                    <option value="2">Akademik</option>
                    <option value="3">Keuangan</option>
                    <option value="4">Toga</option>
                    <option value="5">Foto</option>
                    <option value="6">Mahasiswa</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
          <p>&copy; 2025 Sistem Wisuda. Semua hak cipta dilindungi.</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>