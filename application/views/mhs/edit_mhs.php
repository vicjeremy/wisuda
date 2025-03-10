<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app-dark.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('assets/mazor/extensions/@fortawesome/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazor/compiled/css/iconly.css'); ?>">
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
                        </div>
                        <!-- logout  -->
                        <ul class="navbar-nav ms-auto mb-lg-0">
                            <a href="<?php echo site_url('Auth/logout'); ?>" class="btn btn-danger">Logout</a>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ./Navbar -->

            <div class="container">
                <div class="page-content">
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-12 col-md-6 order-md-1 order-last">
                                    <h3>Edit Data</h3>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo base_url('mhs/update_data'); ?>" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" name="id_mhs" id="id_mhs"
                                                    value="<?php echo isset($result['id_mhs']) ? $result['id_mhs'] : ''; ?>">
                                                <div class="form-group">
                                                    <label for="nim" class="form-label">NIM</label>
                                                    <input type="text" name="nim" id="nim" class="form-control"
                                                        value="<?php echo isset($result['nim']) ? $result['nim'] : ''; ?>"
                                                        disabled>
                                                    <input type="hidden" name="nim" id="nim" class="form-control"
                                                        value="<?php echo isset($result['nim']) ? $result['nim'] : ''; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nama" class="form-label">Nama</label>
                                                    <input type="text" name="nama" id="nama" class="form-control"
                                                        value="<?php echo isset($result['nama']) ? $result['nama'] : ''; ?>"
                                                        disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lok_lahir" class="form-label">Tempat Lahir</label>
                                                    <input type="text" name="lok_lahir" id="lok_lahir"
                                                        class="form-control"
                                                        value="<?php echo isset($result['lok_lahir']) ? $result['lok_lahir'] : ''; ?>"
                                                        disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                                    <input type="date" name="tgl_lahir" id="tgl_lahir"
                                                        class="form-control"
                                                        value="<?php echo isset($result['tgl_lahir']) ? $result['tgl_lahir'] : ''; ?>"
                                                        disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="fakultas" class="form-label">Fakultas</label>
                                                    <input type="text" name="fakultas" id="fakultas"
                                                        class="form-control"
                                                        value="<?php echo isset($result['fakultas']) ? $result['fakultas'] : ''; ?>"
                                                        disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="prodi" class="form-label">Prodi</label>
                                                    <input type="text" name="prodi" id="prodi" class="form-control"
                                                        value="<?php echo isset($result['prodi']) ? $result['prodi'] : ''; ?>"
                                                        disabled>

                                                </div>
                                                <div class="form-group">
                                                    <label for="ipk" class="form-label">IPK</label>
                                                    <input type="text" name="ipk" id="ipk" class="form-control"
                                                        value="<?php echo isset($result['ipk']) ? $result['ipk'] : ''; ?>"
                                                        disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tamu" class="form-label">Jumlah Tamu Tambahan</label>
                                                    <input type="text" name="tamu" id="tamu" class="form-control"
                                                        value="<?php echo isset($result['tamu']) ? $result['tamu'] : ''; ?>"
                                                        disabled>
                                                </div>
                                                <h6>Hubungi BAAK untuk mengubah data ini.</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="skripsi" class="form-label">Judul Skripsi</label>
                                                    <textarea name="skripsi" id="skripsi" class="form-control"
                                                        rows="3"><?php echo isset($result['skripsi']) ? $result['skripsi'] : ''; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <textarea name="alamat" id="alamat" class="form-control"
                                                        rows="3"><?php echo isset($result['alamat']) ? $result['alamat'] : ''; ?></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        value="<?php echo isset($result['email']) ? $result['email'] : ''; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="hp" class="form-label">No HP</label>
                                                    <input type="tel" name="hp" id="hp" class="form-control"
                                                        value="<?php echo isset($result['hp']) ? $result['hp'] : ''; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="size" class="form-label">Ukuran Baju Toga</label>
                                                    <select class="form-control" id="size" name="size"
                                                        <?php echo ($result['sts_toga'] == 1) ? 'disabled' : ''; ?>
                                                        required>
                                                        <option> Pilih Ukuran</option>
                                                        <option value="S"
                                                            <?php echo ($result['size'] == 'S') ? 'selected' : ''; ?>>S
                                                        </option>
                                                        <option value="M"
                                                            <?php echo ($result['size'] == 'M') ? 'selected' : ''; ?>>M
                                                        </option>
                                                        <option value="L"
                                                            <?php echo ($result['size'] == 'L') ? 'selected' : ''; ?>>L
                                                        </option>
                                                        <option value="XL"
                                                            <?php echo ($result['size'] == 'XL') ? 'selected' : ''; ?>>
                                                            XL</option>
                                                        <option value="XXL"
                                                            <?php echo ($result['size'] == 'XXL') ? 'selected' : ''; ?>>
                                                            XXL</option>
                                                    </select>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <label for="size" class="form-label">Ukuran Baju Toga</label>
                                                    <input type="text" name="size" id="size" class="form-control" value="<?php echo isset($result['size']) ? $result['size'] : ''; ?>">
                                                </div> -->
                                                <!-- <div class="form-group">
                                                    <label for="foto_almet" class="form-label">Foto Almet</label>
                                                    <input type="url" name="foto_almet" id="foto_almet" class="form-control" value="<?php echo isset($result['foto_almet']) ? $result['foto_almet'] : ''; ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto_keluarga" class="form-label">Foto Keluarga</label>
                                                    <input type="url" name="foto_keluarga" id="foto_keluarga" class="form-control" value="<?php echo isset($result['foto_keluarga']) ? $result['foto_keluarga'] : ''; ?>">
                                                </div> -->
                                                <?php if ($result['sts_foto'] != 1): ?>
                                                <div class="form-group">
                                                    <label for="foto_almet" class="form-label">Foto dengan Almet</label>
                                                    <?php if ($result['sts_foto'] == 2 || $result['sts_foto'] == 4): ?>
                                                    <input type="text" class="form-control" id="foto_almet"
                                                        name="foto_almet" value="<?php echo $result['foto_almet']; ?>"
                                                        required>
                                                    <?php else: ?>
                                                    <p class="form-control-static"><?php echo $result['foto_almet']; ?>
                                                    </p>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="foto_keluarga" class="form-label">Foto dengan
                                                        Keluarga</label>
                                                    <?php if ($result['sts_foto'] == 3 || $result['sts_foto'] == 4): ?>
                                                    <input type="text" class="form-control" id="foto_keluarga"
                                                        name="foto_keluarga"
                                                        value="<?php echo $result['foto_keluarga']; ?>" required>
                                                    <?php else: ?>
                                                    <p class="form-control-static">
                                                        <?php echo $result['foto_keluarga']; ?></p>
                                                    <?php endif; ?>
                                                </div>
                                                <?php endif; ?>
                                                <div class="form-group mt-3">
                                                    <button type="submit" class="btn btn-primary">Update Data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>&copy; Sistem Informasi Wisuda. Program Studi Sistem Informasi 2025.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php $this->load->view('mhs/script'); ?>
</body>

</html>