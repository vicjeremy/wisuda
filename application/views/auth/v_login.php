<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Wisuda</title>
  <!-- Link CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/mazor/compiled/css/app.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mazor/compiled/css/auth.css'); ?>">
  <!-- Link JavaScript -->
  <script src="<?php echo base_url('assets/mazor/js/scripts.js'); ?>" defer></script>
</head>

<body>
  <div id="auth">
    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <!-- Judul dan Subjudul -->
          <h1 class="auth-title">Sistem Wisuda</h1>
          <p class="auth-subtitle mb-5">Sign in untuk mengakses sistem.</p>
          <!-- Form Login -->
          <form action="<?php echo site_url('Auth/process_login'); ?>" method="post">
            <!-- Input Username -->
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" placeholder="Masukan Username" name="username" class="form-control form-control-xl"
                required>
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <!-- Input Password -->
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" placeholder="Masukan Password" name="password" class="form-control form-control-xl"
                required>
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <!-- Pesan Error -->
            <div class="row">
              <div class="col-12">
                <?php if (isset($error)): ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $error; ?>
                  </div>
                  <script>
                    setTimeout(function () {
                      var alert = document.querySelector('.alert');
                      if (alert) {
                        alert.classList.remove('show');
                        alert.classList.add('fade');
                        setTimeout(function () {
                          alert.remove();
                        }, 150);
                      }
                    }, 5000); //otomatis hilang setelah 5 detik
                  </script>
                <?php endif; ?>
              </div>
            </div>
            <!-- Tombol Login -->
            <button type="submit" name="login" value="Login"
              class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign In</button>
          </form>
          <!-- Link Tambahan -->
          <div class="text-center mt-5 text-lg fs-4">
            <p>
              <a class="font-bold" href="<?= site_url('Forgot') ?>">Lupa kata sandi?</a>
            </p>
            <p>
              <a class="font-bold" href="<?= site_url('home') ?>">Kembali</a>
            </p>
          </div>
        </div>
      </div>
      <!-- Gambar bagian kanan -->
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
      </div>
    </div>
  </div>
  <!-- Script Tambahan -->
  <script src="<?php echo base_url('assets/mazor/js/initTheme.js'); ?>"></script>
  <script src="<?php echo base_url('assets/mazor/js/perfect-scrollbar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/mazor/js/app.js'); ?>"></script>
</body>

</html>