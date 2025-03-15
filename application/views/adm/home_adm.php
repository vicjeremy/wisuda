<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
    <title>Wisuda Unkartur</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app-dark.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('assets/mazor/extensions/@fortawesome/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazor/compiled/css/iconly.css'); ?>">
    <link rel="stylesheet" href="assets/mazor/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" crossorigin="" href="assets/mazor/compiled/css/table-datatable-jquery.css">
	<link rel="stylesheet" href="https://sets.hugeicons.com/YOUR-SET-ID.css" crossorigin="anonymous">
    <!-- Scripts -->
    <script src="<?= base_url('assets/mazor/js/scripts.js'); ?>" defer></script>
</head>

<body>
    <script src="<?= base_url('assets/mazor/static/js/initTheme.js'); ?>"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <nav class="navbar navbar-expand navbar-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">X</span>
                    </button>
                    <!-- Theme Toggle -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="theme-toggle d-flex gap-2 align-items-center mt-2 me-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
							<img src="<?= base_url('assets/img/logo.png'); ?>" style="width: 48px; height: 48px;" alt="">
                        <h5> Wisuda Universitas Nasional Karangturi</h5>
                        </div>
                        <!-- logout  -->
                        <ul class="navbar-nav ms-auto mb-lg-0">
                            <a href="<?php echo site_url('Auth/logout'); ?>" class="btn btn-danger">Logout</a>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ./Navbar -->

            <!-- <div class="container"> -->
            <div class="page-content" style="margin-left: 5vw; margin-right: 5vw;">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
							<?php if ($this->session->flashdata('message')): ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <?= htmlspecialchars($this->session->flashdata('message')); ?>
                                        </div>
                                        <?php endif; ?>
                            <div class="col-sm-6">
                                <h1>Dashboard Admin</h1>

								
                            </div>
                        </div>
                    </div>
                </section>

                <section class="row">
                    <!-- <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body"> -->
                                        
                                        <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                                            data-target="#addModal">
                                            Tambah Data
                                        </button>
										<a href="<?= base_url('adm/view_kntn') ?>" class="btn btn-warning mb-3">
                                            Manajemen Konten
                                        </a> -->

										<div class="col-6 col-lg-3 col-md-6">
											<a href="<?= base_url('adm/view_adm') ?>">
												<div class="card" style="align-items: center;">
													<div class="card-header">
														<h4>Manajemen Account</h4>
													</div>
													<div class="card-body">
                                                        <img class="img-fluid" style="max-width: 100%; width: 150px;" 
                                                            src="https://img.icons8.com/stickers/500/admin-settings-male.png" 
                                                            alt="admin-settings-male"/>
													</div>
												</div>
											</a>
										</div>

										<div class="col-6 col-lg-3 col-md-6">
											<a href="<?= base_url('adm/view_kntn') ?>">
												<div class="card" style="align-items: center;">
													<div class="card-header">
														<h4>Manajemen Konten</h4>
													</div>
													<div class="card-body">
                                                        <img class="img-fluid" style="max-width: 100%; width: 150px;"
                                                            src="https://img.icons8.com/stickers/500/content.png" 
                                                            alt="content"/>
													</div>
												</div>
											</a>
										</div>
                                        
                                    <!-- </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </section>

				<footer>
            <div class="container" style="margin-left: 2vw;">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>&copy; Sistem Informasi Wisuda. Program Studi Sistem Informasi 2025.</p>
                    </div>
                </div>
            </div>
        </footer>
            </div>
            <!-- </div> -->

    <!-- Mazor -->
    <script src="<?= base_url('assets/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/compiled/js/app.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/static/js/components/dark.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/extensions/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/extensions/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js'); ?>">
    </script>
    <script src="<?= base_url('assets/mazor/static/js/pages/datatables.js'); ?>"></script>
</body>

</html>
