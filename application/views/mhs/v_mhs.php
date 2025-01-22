<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <!-- Mazor -->
  <link rel="stylesheet" href="assets/mazor/compiled/css/app.css">
  <link rel="stylesheet" href="assets/mazor/compiled/css/app-dark.css">
  <link rel="stylesheet" href="assets/mazor/extensions/@fortawesome/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" crossorigin href="assets/mazor/compiled/css/iconly.css">
  <script src="assets/mazor/js/scripts.js" defer></script>

</head>

<body>
  <script src="assets/static/js/initTheme.js"></script>
  <div id="app">
    <div id="main">
      <header class="mb-3 d-flex justify-content-between align-items-center">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>
      <main class="page-content">
        <section class="content-header">
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
                </path>
              </svg>
            </div>
            <!-- ./Toggle tema -->
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Data Mahasiswa</h1>
              </div>

              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="<?= site_url('home/') ?>">Home</a></li>
                  <li class="breadcrumb-item active">Data Mahasiswa</li>
                </ol>

              </div>
            </div>
          </div>
        </section>

        <section class="row">
          <div class="col-12 col-lg-9">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">

                    <div class="d-flex justify-content-end">
                      <a href="<?php echo site_url('Auth/logout'); ?>" class="btn btn-danger">Logout</a>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputModal">
                      Edit Data
                    </button>
                  </div>
                  <div class="card-body">
                    <!-- Alert -->
                    <?php if ($this->session->flashdata('update_success')): ?>
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data berhasil diupdate.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    <?php endif; ?>
                    <!-- ./Alert -->
                    <!-- Table -->
                    <div class="table-responsive">
                      <table class="table table-striped dataTable-table" id="table1">
                        <thead>
                          <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Fakultas</th>
                            <th>Prodi</th>
                            <th>IPK</th>
                            <th>Skripsi</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Ukuran Toga</th>
                            <th>Status Toga</th>
                            <th>Foto Almet</th>
                            <th>Foto Keluarga</th>
                            <th>Tamu</th>
                            <th>Status Keuangan</th>
                            <th>Status Pembayaran Toga</th>
                            <th>Status Foto</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if (!empty($result)): ?>
                            <?php foreach ($result as $value): ?>
                              <tr>
                                <td><?php echo $value['nim']; ?></td>
                                <td><?php echo $value['nama']; ?></td>
                                <td><?php echo $value['lok_lahir']; ?></td>
                                <td><?php echo $value['tgl_lahir']; ?></td>
                                <td><?php echo $value['fakultas']; ?></td>
                                <td><?php echo $value['prodi']; ?></td>
                                <td><?php echo $value['ipk']; ?></td>
                                <td><?php echo $value['skripsi']; ?></td>
                                <td><?php echo $value['alamat']; ?></td>
                                <td><?php echo $value['email']; ?></td>
                                <td><?php echo $value['hp']; ?></td>
                                <td><?php echo $value['size']; ?></td>
                                <td><?php echo $value['ambil_toga'] == 1 ? 'Sudah Ambil' : 'Belum Ambil'; ?></td>
                                <td><?php echo $value['foto_almet']; ?></td>
                                <td><?php echo $value['foto_keluarga']; ?></td>
                                <td><?php echo $value['tamu']; ?></td>
                                <td><?php echo $value['sts_keu'] == 1 ? 'Sudah Lunas' : 'Belum Lunas'; ?></td>
                                <td><?php echo $value['sts_toga'] == 1 ? 'Sudah Lunas' : 'Belum Lunas'; ?></td>
                                <td>
                                  <?php
                                  switch ($value['sts_foto']) {
                                    case 0:
                                      echo 'Sedang di proses';
                                      break;
                                    case 1:
                                      echo 'Disetujui';
                                      break;
                                    case 2:
                                      echo 'Ditolak Harap Upload Ulang Foto dengan Almet';
                                      break;
                                    case 3:
                                      echo 'Ditolak Harap Upload Ulang Dengan Foto Keluarga';
                                      break;
                                    case 4:
                                      echo 'Ditolak Harap Upload Ulang Semua Foto';
                                      break;
                                    default:
                                      echo 'Status tidak diketahui';
                                      break;
                                  }
                                  ?>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                          <?php else: ?>
                            <tr>
                              <td colspan="19" class="text-center">No data available in table</td>
                            </tr>
                          <?php endif; ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Fakultas</th>
                            <th>Prodi</th>
                            <th>IPK</th>
                            <th>Skripsi</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Ukuran Toga</th>
                            <th>Status Toga</th>
                            <th>Foto Almet</th>
                            <th>Foto Keluarga</th>
                            <th>Tamu</th>
                            <th>Status Keuangan</th>
                            <th>Status Pembayaran Toga</th>
                            <th>Status Foto</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                  <!-- /.table -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- Modal -->
        <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="inputModalLabel">Input Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php if (empty($mahasiswa['nim'])): ?>
                  <p>Data Kosong/Tidak ada Data yang Sesuai</p>
                <?php else: ?>
                  <form action="<?php echo site_url('crud/update_data'); ?>" method="post">
                    <div class="form-group">
                      <label for="nim">NIM</label>
                      <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa['nim']; ?>"
                        readonly>
                    </div>
                    <div class="form-group">
                      <label for="lok_lahir" class="form-label">Tempat Lahir</label>
                      <input type="text" class="form-control" id="lok_lahir" name="lok_lahir"
                        value="<?php echo $mahasiswa['lok_lahir']; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="skripsi" class="form-label">Judul Skripsi</label>
                      <input type="text" class="form-control" id="skripsi" name="skripsi"
                        value="<?php echo $mahasiswa['skripsi']; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email"
                        value="<?php echo $mahasiswa['email']; ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="hp" class="form-label">No Hp</label>
                      <input type="text" class="form-control" id="hp" name="hp" value="<?php echo $mahasiswa['hp']; ?>"
                        required>
                    </div>
                    <div class="form-group">
                      <label for="size" class="form-label">Ukuran Toga</label>
                      <select class="form-control" id="size" name="size" <?php echo ($mahasiswa['sts_toga'] == 0) ? 'disabled' : ''; ?> required>
                        <option> Pilih Ukuran</option>
                        <option value="S" <?php echo ($mahasiswa['size'] == 'S') ? 'selected' : ''; ?>>S</option>
                        <option value="M" <?php echo ($mahasiswa['size'] == 'M') ? 'selected' : ''; ?>>M</option>
                        <option value="L" <?php echo ($mahasiswa['size'] == 'L') ? 'selected' : ''; ?>>L</option>
                        <option value="XL" <?php echo ($mahasiswa['size'] == 'XL') ? 'selected' : ''; ?>>XL</option>
                        <option value="XXL" <?php echo ($mahasiswa['size'] == 'XXL') ? 'selected' : ''; ?>>XXL</option>
                      </select>
                    </div>
                    <?php if ($mahasiswa['sts_foto'] != 1): ?>
                      <div class="form-group">
                        <label for="foto_almet" class="form-label">Foto dengan Almet</label>
                        <?php if ($mahasiswa['sts_foto'] == 2 || $mahasiswa['sts_foto'] == 4): ?>
                          <input type="text" class="form-control" id="foto_almet" name="foto_almet"
                            value="<?php echo $mahasiswa['foto_almet']; ?>" required>
                        <?php else: ?>
                          <p class="form-control-static"><?php echo $mahasiswa['foto_almet']; ?></p>
                        <?php endif; ?>
                      </div>
                      <div class="form-group">
                        <label for="foto_keluarga" class="form-label">Foto dengan Keluarga</label>
                        <?php if ($mahasiswa['sts_foto'] == 3 || $mahasiswa['sts_foto'] == 4): ?>
                          <input type="text" class="form-control" id="foto_keluarga" name="foto_keluarga"
                            value="<?php echo $mahasiswa['foto_keluarga']; ?>" required>
                        <?php else: ?>
                          <p class="form-control-static"><?php echo $mahasiswa['foto_keluarga']; ?></p>
                        <?php endif; ?>
                      </div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </main>
      <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
          <p>&copy; 2025 Sistem Wisuda. Semua hak cipta dilindungi.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url('assets/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/compiled/js/app.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/static/js/components/dark.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/extensions/simple-datatables/umd/simple-datatables.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/static/js/pages/simple-datatables.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
  <script
    src="<?= base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
  <script
    src="<?= base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
  z
  <script>
    $(function () {
      $("#example2").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "language": {
          "emptyTable": "No data available in table"
        }
      });
    });
  </script>
</body>

</html>