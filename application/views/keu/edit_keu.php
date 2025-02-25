<!-- Content Wrapper. Contains page content -->
<div class="page-content " style="margin-left: 5vw; margin-right: 5vw;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Edit Status</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="<?php echo base_url(); ?>keu/update_uang" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $status['nim']; ?>">
                </div>
                <div class="form-group">
                  <label for="nim">NIM</label>
                  <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $status['nim']; ?>"
                    readonly>
                </div>
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $status['nama']; ?>"
                    readonly>
                </div>
                <div class="form-group">
                  <label for="fakultas">Fakultas</label>
                  <input type="text" class="form-control" id="fakultas" name="fakultas"
                    value="<?php echo $status['fakultas']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="prodi">Prodi</label>
                  <input type="text" class="form-control" id="prodi" name="prodi"
                    value="<?php echo $status['prodi']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="tamu">Jumlah Tamu Tambahan</label>
                  <input type="number" class="form-control" id="tamu" name="tamu"
                    value="<?php echo $status['tamu']; ?>">
									</div>
										<div class="form-group" id="stsTamuDiv" style="display: none;">
										<label for="sts_tamu">Pembayaran Tamu Tambahan</label>
										<select class="form-control" id="sts_tamu" name="sts_tamu">
											<option value="0" <?php if ($status['sts_tamu'] == 0)
												echo 'selected'; ?>>Tidak ada tamu tambahan</option>
											<option value="1" <?php if ($status['sts_tamu'] == 1)
												echo 'selected'; ?>>Belum bayar</option>
											<option value="2" <?php if ($status['sts_tamu'] == 2)
												echo 'selected'; ?>>Lunas</option>
										</select>
									</div>
                <div class="form-group">
                  <label for="wisuda">Pembayaran Wisuda</label>
                  <select class="form-control" id="wisuda" name="wisuda">
                    <option value="0" <?php if ($status['sts_wsd'] == 0)
                      echo 'selected'; ?>>Belum Bayar</option>
                    <option value="1" <?php if ($status['sts_wsd'] == 1)
                      echo 'selected'; ?>>Lunas</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="toga">Pembayaran Toga</label>
                  <select class="form-control" id="toga" name="toga">
                    <option value="0" <?php if ($status['sts_toga'] == 0)
                      echo 'selected'; ?>>Belum Bayar</option>
                    <option value="1" <?php if ($status['sts_toga'] == 1)
                      echo 'selected'; ?>>Lunas</option>
                  </select>
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- bs-custom-file-input -->
<script
  src="<?php echo base_url('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
<script>
	document.getElementById('tamu').addEventListener('input', function () {
		var stsTamuDiv = document.getElementById('sts_tamu').parentElement;
		var stsTamuSelect = document.getElementById('sts_tamu');
		
		if (this.value > 2) {
			alert('Jumlah tamu yang dapat dimasukkan maksimal hanya 2');
			this.value = 2;
			stsTamuDiv.style.display = 'block';
			// Enable only "Belum bayar" and "Lunas" options
			stsTamuSelect.options[0].disabled = true;
			stsTamuSelect.options[1].disabled = false;
			stsTamuSelect.options[2].disabled = false;
			if (stsTamuSelect.value == '0') {
				stsTamuSelect.value = '1';
			}
		} else if (this.value < 0) {
			this.value = 0;
			stsTamuDiv.style.display = 'none';
			stsTamuSelect.value = '0';
		} else if (this.value == 0) {
			stsTamuDiv.style.display = 'none';
			stsTamuSelect.value = '0';
		} else {
			stsTamuDiv.style.display = 'block';
			// Enable only "Belum bayar" and "Lunas" options
			stsTamuSelect.options[0].disabled = true;
			stsTamuSelect.options[1].disabled = false;
			stsTamuSelect.options[2].disabled = false;
			if (stsTamuSelect.value == '0') {
				stsTamuSelect.value = '1';
			}
		}
	});

	// Check initial value on page load
	window.addEventListener('load', function() {
		var tamuValue = document.getElementById('tamu').value;
		var stsTamuDiv = document.getElementById('sts_tamu').parentElement;
		var stsTamuSelect = document.getElementById('sts_tamu');
		
		if (tamuValue == 0) {
			stsTamuDiv.style.display = 'none';
			stsTamuSelect.value = '0';
		} else {
			// Enable only "Belum bayar" and "Lunas" options for non-zero tamu
			stsTamuSelect.options[0].disabled = true;
			stsTamuSelect.options[1].disabled = false;
			stsTamuSelect.options[2].disabled = false;
			if (stsTamuSelect.value == '0') {
				stsTamuSelect.value = '1';
			}
		}
	});
</script>
</body>

</html>
