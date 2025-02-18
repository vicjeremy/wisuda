<!-- Content Wrapper. Contains page content -->
<div id="app">
  <div id="main" class="layout-horizontal">
    <div class="container">
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-9 mx-auto">
            <h3>Form Edit Toga</h3>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?php echo base_url(); ?>toga/update_toga" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $status['id_toga']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $status['nim']; ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="baju">Jubah</label>
                    <select class="form-control" id="baju" name="baju">
                      <option value="0" <?php if ($status['baju'] == 0) echo 'selected'; ?>>Belum Diambil</option>
                      <option value="1" <?php if ($status['baju'] == 1) echo 'selected'; ?>>Sudah Diambil</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="topi">Topi</label>
                    <select class="form-control" id="topi" name="topi">
                      <option value="0" <?php if ($status['topi'] == 0) echo 'selected'; ?>>Belum Diambil</option>
                      <option value="1" <?php if ($status['topi'] == 1) echo 'selected'; ?>>Sudah Diambil</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="skecel">Skecel</label>
                    <select class="form-control" id="skecel" name="skecel">
                      <option value="0" <?php if ($status['skecel'] == 0) echo 'selected'; ?>>Belum Diambil</option>
                      <option value="1" <?php if ($status['skecel'] == 1) echo 'selected'; ?>>Sudah Diambil</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="samir">Samir</label>
                    <select class="form-control" id="samir" name="samir">
                      <option value="0" <?php if ($status['samir'] == 0) echo 'selected'; ?>>Belum Diambil</option>
                      <option value="1" <?php if ($status['samir'] == 1) echo 'selected'; ?>>Sudah Diambil</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="logo">Logo</label>
                    <select class="form-control" id="logo" name="logo">
                      <option value="0" <?php if ($status['logo'] == 0) echo 'selected'; ?>>Belum Diambil</option>
                      <option value="1" <?php if ($status['logo'] == 1) echo 'selected'; ?>>Sudah Diambil</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selendang">Selendang Penghargaan</label>
                    <select class="form-control" id="selendang" name="selendang" onchange="toggleStsSelendang()">
                      <option value="" <?php if (empty($status['selendang'])) echo 'selected'; ?> disabled>Pilih Selendang</option>
                      <option value="Tidak Dapat" <?php if ($status['selendang'] == 'Tidak Dapat') echo 'selected'; ?>>Tidak Dapat</option>
                      <option value="Cumlaude" <?php if ($status['selendang'] == 'Cumlaude') echo 'selected'; ?>>Cumlaude</option>
                      <option value="Cumlaude dan Terbaik" <?php if ($status['selendang'] == 'Cumlaude dan Terbaik') echo 'selected'; ?>>Cumlaude dan Terbaik</option>
                    </select>
                  </div>
                  <div id="stsSelendangDiv" style="display: <?php echo (in_array($status['selendang'], ['Cumlaude', 'Cumlaude dan Terbaik'])) ? 'block' : 'none'; ?>">
                    <div class="form-group">
                      <label for="sts_selendang">Status Pengambilan Selendang</label>
                      <select class="form-control" id="sts_selendang" name="sts_selendang">
                        <option value="0" <?php if ($status['sts_selendang'] == 0) echo 'selected'; ?>>Belum Diambil</option>
                        <option value="1" <?php if ($status['sts_selendang'] == 1) echo 'selected'; ?>>Sudah Diambil</option>
                      </select>
                    </div>
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
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
  $(function() {
    bsCustomFileInput.init();
  });

  function checkSelendangStatus() {
    var selendangValue = '<?php echo isset($status['selendang']) ? $status['selendang'] : ""; ?>';
    var stsSelendangDiv = document.getElementById('stsSelendangDiv');

    if (selendangValue === 'Cumlaude' || selendangValue === 'Cumlaude dan Terbaik') {
      stsSelendangDiv.style.display = 'block';
    } else {
      stsSelendangDiv.style.display = 'none';
    }
  }

  // Run on page load
  document.addEventListener('DOMContentLoaded', checkSelendangStatus);

  function toggleStsSelendang() {
    var selendangValue = document.getElementById('selendang').value;
    var stsSelendangDiv = document.getElementById('stsSelendangDiv');
    if (selendangValue === 'Cumlaude' || selendangValue === 'Cumlaude dan Terbaik') {
      stsSelendangDiv.style.display = 'block';
    } else {
      stsSelendangDiv.style.display = 'none';
    }
  }
</script>
</body>

</html>