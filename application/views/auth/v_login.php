<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
    <title>Wisuda Unkartur</title>
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
					<div class="text-center">
						<img src="<?= base_url('assets/img/logo.png'); ?>" style="width: 128px; height: 128px;" alt="">
						<br>
						<br>
						<p class="auth-subtitle mb-5">Sistem Wisuda UNKARTUR</p>
					</div>
                    <!-- Form Login -->
                    <form action="<?php echo site_url('Auth/process_login'); ?>" method="post">
                        <!-- Input Username -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" placeholder="Masukan Username" name="username"
                                class="form-control form-control-xl" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <!-- Input Password -->
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" placeholder="Masukan Password" name="password"
                                class="form-control form-control-xl" required>
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
                                setTimeout(function() {
                                    var alert = document.querySelector('.alert');
                                    if (alert) {
                                        alert.classList.remove('show');
                                        alert.classList.add('fade');
                                        setTimeout(function() {
                                            alert.remove();
                                        }, 150);
                                    }
                                }, 5000); //otomatis hilang setelah 5 detik
                                </script>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- Tombol Login -->
                        <button type="submit" name="login" value="Login" class="btn btn-block btn-lg shadow-lg mt-5"
                            style="background-color: rgba(129, 23, 33, 50); color: #f7f7f7;">Sign In</button>
                    </form>
                    <!-- Link Tambahan -->
                    <div class=" text-center mt-5 text-sm fs-4">
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
                <div class="row" style="display: flex; background-color: rgba(129, 23, 33, 0.6);">
                    <img src="<?= base_url('assets/img/wisuda4.png'); ?>" alt=""
                        style="height: 100vh; max-width: 31vw; flex: 1;">
                    <img src="<?= base_url('assets/img/wisuda5.png'); ?>" alt="" style="max-height: 100vh; flex: 1;">
                </div>
            </div>
        </div>
    </div>
    <!-- Script Tambahan -->
    <script src="<?php echo base_url('assets/mazor/js/initTheme.js'); ?>"></script>
    <script src="<?php echo base_url('assets/mazor/js/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/mazor/js/app.js'); ?>"></script>
</body>

</html>
