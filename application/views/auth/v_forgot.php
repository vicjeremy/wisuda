<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lupa Kata Sandi - Mazer Admin Dashboard</title>

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
            <div class="auth-logo">
            <h1>Sistem Wisuda</h1>
            </div>
          <h1 class="auth-title">Lupa Kata Sandi</h1>
          <p class="auth-subtitle mb-5">Masukkan email Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.</p>

          <form action="<?php echo site_url('forgot/reset_password_request'); ?>" method="post">
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="email" class="form-control form-control-xl" placeholder="Email" id="email" name="email" required>
              <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Kirim</button>
          </form>
          <div class="text-center mt-5 text-lg fs-4">
            <p class='text-gray-600'>Ingat akun Anda? <a href="<?php echo site_url('login'); ?>" class="font-bold">Masuk</a>.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right"></div>
      </div>
    </div>
  </div>
</body>

</html>