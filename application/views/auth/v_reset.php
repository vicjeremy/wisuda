<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
    <title>Wisuda Unkartur</title>
  
  <link rel="shortcut icon" href="<?php echo base_url('assets/mazor/compiled/svg/favicon.svg'); ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url('assets/mazor/compiled/css/app.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mazor/compiled/css/app-dark.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/mazor/compiled/css/auth.css'); ?>">
</head>
<body>
  <script src="<?php echo base_url('assets/mazor/static/js/initTheme.js'); ?>"></script>
  <div id="auth">
    <div class="row h-100">
      <div class="col-lg-5 col-12">
        <div id="auth-left">
          <div class="text-center">
						<img src="<?= base_url('assets/img/logo.png'); ?>" style="width: 128px; height: 128px;" alt="">
						<br>
						<br>
						<p class="auth-subtitle mb-5">Sistem Wisuda UNKARTUR</p>
					</div>
          <h4 class="">Reset Kata Sandi</h4>
          <p class=" mb-5">Silahkan buat kata sandi baru Anda.</p>

          <form action="<?php echo site_url('forgot_password/reset_password'); ?>" method="post">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control form-control-xl" placeholder="Kata Sandi Baru" id="password" name="password" required>
              <div class="form-control-icon">
                <i class="bi bi-lock"></i>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5" style="background-color: rgba(129, 23, 33, 50); color: #f7f7f7;">Ubah Kata Sandi</button>
          </form>
        </div>
      </div>
      <!-- Gambar bagian kanan -->
            <div class="col-lg-7 d-none d-lg-block">
                <div class="row" style="display: flex; background-color: rgba(129, 23, 33, 0.6);">
                    <img src="<?= base_url('assets/img/wisuda4.png'); ?>" alt=""
                        style="height: 100vh; max-width: 31vw; flex: 1;">
                    <img src="<?= base_url('assets/img/wisuda5.png'); ?>" alt="" style="max-height: 100vh; flex: 1;">
                </div>
            </div>
    </div>
  </div>
</body>
</html>
