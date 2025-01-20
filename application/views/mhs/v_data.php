<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
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
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
            <?php if ($this->session->flashdata('update_success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data berhasil diupdate.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php endif; ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputModal">
                Edit Data
              </button>
              <table id="example2" class="table table-bordered table-striped">
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
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Modal -->
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
        <?php if (empty($mahasiswa['nim'])): ?>
          <p>Data Kosong/Tidak ada Data yang Sesuai</p>
        <?php else: ?>
        <form action="<?php echo site_url('crud/update_data'); ?>" method="post">
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $mahasiswa['nim']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="lok_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="lok_lahir" name="lok_lahir" value="<?php echo $mahasiswa['lok_lahir']; ?>" required>
          </div>
          <div class="form-group">
            <label for="skripsi" class="form-label">Judul Skripsi</label>
            <input type="text" class="form-control" id="skripsi" name="skripsi" value="<?php echo $mahasiswa['skripsi']; ?>" required>
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $mahasiswa['email']; ?>" required>
          </div>
          <div class="form-group">
            <label for="hp" class="form-label">No Hp</label>
            <input type="text" class="form-control" id="hp" name="hp" value="<?php echo $mahasiswa['hp']; ?>" required>
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
            <input type="text" class="form-control" id="foto_almet" name="foto_almet" value="<?php echo $mahasiswa['foto_almet']; ?>" required>
            <?php else: ?>
            <p class="form-control-static"><?php echo $mahasiswa['foto_almet']; ?></p>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <label for="foto_keluarga" class="form-label">Foto dengan Keluarga</label>
            <?php if ($mahasiswa['sts_foto'] == 3 || $mahasiswa['sts_foto'] == 4): ?>
            <input type="text" class="form-control" id="foto_keluarga" name="foto_keluarga" value="<?php echo $mahasiswa['foto_keluarga']; ?>" required>
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
      </div>
    </div>
  </div>
</div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [
        {
          extend: 'copy',
          title: 'Data Mahasiswa'
        },
        {
          extend: 'csv',
          title: 'Data Mahasiswa'
        },
        {
          extend: 'excel',
          title: 'Data Mahasiswa'
        },
        {
          extend: 'pdf',
          title: 'Data Mahasiswa'
        },
        {
          extend: 'print',
          title: function(){
            var printTitle = 'Data Mahasiswa';
            return printTitle;
          }
        },
        {
          extend: 'colvis'
        }
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
