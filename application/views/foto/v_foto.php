<main class="page-content">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Foto Mahasiswa</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="row">
    <div class="col-12 col-lg-9">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table id="example2" class="table table-lg">
                  <thead>
                    <tr>
                      <th>Nim</th>
                      <th>Nama</th>
                      <th>Link Gdrive Foto Almet</th>
                      <th>Link Gdrive Foto Keluarga</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($status as $sts): ?>
                      <tr>
                        <td><?php echo $sts['nim']; ?></td>
                        <td><?php echo $sts['nama']; ?></td>
                        <td>
                          <a href="<?= strpos($sts['foto_almet'], 'http') === 0 ? $sts['foto_almet'] : 'https://' . $sts['foto_almet'] ?>"
                            target="_blank">
                            <?= $sts['foto_almet'] ?>
                          </a>
                        </td>
                        <td>
                          <a href="<?= strpos($sts['foto_keluarga'], 'http') === 0 ? $sts['foto_keluarga'] : 'https://' . $sts['foto_keluarga'] ?>"
                            target="_blank">
                            <?= $sts['foto_keluarga'] ?>
                          </a>
                        </td>
                        <td><?= ucfirst(foto($sts['sts_foto'])) ?></td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm editStatus" data-toggle="modal"
                            data-target="#editStatusModal" data-nim="<?php echo $sts['nim']; ?>"
                            data-status="<?php echo $sts['sts_foto']; ?>">
                            Edit Status
                          </button>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nim</th>
                      <th>Nama</th>
                      <th>Link Gdrive Foto Almet</th>
                      <th>Link Gdrive Foto Keluarga</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>

              <div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Status Foto</h5>
                      <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                      </button>
                    </div>
                    <form action="<?php echo base_url('Foto/update_foto'); ?>" method="POST">
                      <div class="modal-body">
                        <input type="hidden" name="nim" id="nim" value="<?php echo $sts['nim']; ?>">
                        <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" name="status" id="status">
                            <option value="0" <?php if ($sts['sts_foto'] == 0)
                              echo 'selected'; ?>>Sedang Diperiksa
                            </option>
                            <option value="1" <?php if ($sts['sts_foto'] == 1)
                              echo 'selected'; ?>>Disetujui</option>
                            <option value="2" <?php if ($sts['sts_foto'] == 2)
                              echo 'selected'; ?>>Ditolak, Silahkan
                              Upload Ulang Foto Almet</option>
                            <option value="3" <?php if ($sts['sts_foto'] == 3)
                              echo 'selected'; ?>>Ditolak, Silahkan
                              Upload Ulang Foto Keluarga</option>
                            <option value="4" <?php if ($sts['sts_foto'] == 4)
                              echo 'selected'; ?>>Ditolak, Silahkan
                              Upload Ulang Foto Almet dan Keluarga</option>
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
  </section>
</main>
<div class="footer clearfix mb-0 text-muted">
  <div class="float-start">
    <p>&copy; 2025 Sistem Wisuda. Semua hak cipta dilindungi.</p>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>">
</script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>">
</script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>">
</script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>">
</script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>">
</script>
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
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "responsive": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
<script>
  $(document).ready(function () {
    $('.editStatus').on('click', function () {
      var nim = $(this).data('nim');
      var status = $(this).data('status');

      $('#nim').val(nim);
      $('#status').val(status);
    });
  });
</script>
</body>

</html>