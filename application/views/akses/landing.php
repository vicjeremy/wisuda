<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
</head>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Landing Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('login'); ?>">Login</a></li>
              <li class="breadcrumb-item active">Landing Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- =========================================================== -->
    <h5 class="mt-4 mb-2"></h5>
        <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box bg-info">
              <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

              <div class="info-box-content">
                  <span class="info-box-text">Jumlah Mahasiswa</span>
                  <span class="info-box-number"><?php echo number_format($student_count); ?></span>

                  <div class="progress">
                      <div class="progress-bar" style="width: 100%"></div>
                  </div>
                  <span class="progress-description">
                      Total mahasiswa
                  </span>
              </div>
              <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
      </div>

          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Mahasiswa Lunas</span>
                    <span class="info-box-number"><?php echo number_format($paid_students); ?></span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                        Total mahasiswa lunas
                    </span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>


          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-warning">
              <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

              <div class="info-box-content">
              <span class="info-box-text">Sudah Ambil Toga</span>
                    <span class="info-box-number"><?php echo number_format($sudah_ambil); ?></span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                        Total sudah ambil toga
                    </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-comments"></i></span>

              <div class="info-box-content">
              <span class="info-box-text">Jumlah Tamu</span>
                    <span class="info-box-number"><?php echo number_format($tamu); ?></span>

                    <div class="progress">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>
                    <span class="progress-description">
                        Total Tamu
                    </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="container mt-4">
          <h3>Data Mahasiswa</h3>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>NIM</th>
                      <th>Status Keuangan</th>
                      <th>Ambil Toga</th>
                  </tr>
              </thead>
              <tbody>
                  <?php if (!empty($mhs_data)): ?>
                      <?php foreach ($mhs_data as $mhs): ?>
                          <tr>
                              <td><?php echo $mhs['nim']; ?></td>
                                <td><?php echo $mhs['sts_wsd'] == 1 ? '<b>Sudah Lunas</b>' : 'Belum Lunas'; ?></td>
                              <td><?php echo $mhs['ambil_toga'] == 1 ? '<b>Sudah Ambil</b>' : 'Belum Ambil'; ?></td>
                          </tr>
                      <?php endforeach; ?>
                  <?php else: ?>
                      <tr>
                          <td colspan="3" class="text-center">Tidak ada data</td>
                      </tr>
                  <?php endif; ?>
              </tbody>
          </table>
      </div>

<!-- jQuery -->
 <script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
</body>
</html>
