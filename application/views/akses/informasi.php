<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
    <title>Wisuda Unkartur</title>
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app-dark.css'); ?>" />
    <link rel="stylesheet"
        href="<?= base_url('assets/mazor/extensions/@fortawesome/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" crossorigin href="<?= base_url('assets/mazor/compiled/css/iconly.css'); ?>" />
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
                            <img src="<?= base_url('assets/img/logo.png'); ?>" style="width: 48px; height: 48px;"
                                alt="">
                            <h5> Wisuda Universitas Nasional Karangturi</h5>
                        </div>
                        <!-- login  -->
                        <ul class=" navbar-nav ms-auto mb-lg-0">
                            <a href="<?php echo base_url('akses'); ?>" class="btn btn-link"
                                style="text-decoration: none;">Home</a>
                            <a href="<?php echo base_url('login'); ?>" class="btn btn-link"
                                style="text-decoration: none;">Login</a>
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
                                <div class="col-sm-6">
                                    <h1>Informasi Data Wisuda</h1>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                    <div class="stats-icon purple mb-2">
                                                        <i class="iconly-boldProfile"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Jumlah Mahasiswa</h6>
                                                    <h6 class="font-extrabold mb-0">
                                                        <?php echo number_format($student_count); ?>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                    <div class="stats-icon green mb-2">
                                                        <i>
                                                            <dt class="the-icon">
                                                                <span class="fa-fw select-all fas"></span>
                                                            </dt>
                                                        </i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Mahasiswa Lunas</h6>
                                                    <h6 class="font-extrabold mb-0">
                                                        <?php echo number_format($paid_students); ?>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                    <div class="stats-icon red mb-2">
                                                        <i class=""><span class="fa-fw select-all fas"></span></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Sudah Ambil Toga</h6>
                                                    <h6 class="font-extrabold mb-0">
                                                        <?php echo number_format($sudah_ambil); ?>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-6 col-12">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                                    <div class="stats-icon blue mb-2">
                                                        <i class="iconly-boldAdd-User"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Jumlah Tamu</h6>
                                                    <h6 class="font-extrabold mb-0"><?php echo number_format($tamu); ?>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Table -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Data Mahasiswa</h4>
                                        </div>
                                        <div class="card-body">
											<div class="row mb-4">
												<div class="col-md-6">
													<div class="card">
														<div class="card-body">
															<h6 class="card-title text-primary mb-3">Program Studi</h6>
															<div id="prodiFilter" class="d-flex flex-wrap gap-3">
																<?php 
																$prodi = [
																	'Sistem Informasi',
																	'Teknologi Pangan',
																	'Managemen Informasi Kesehatan',
																	'Managemen',
																	'Akuntansi', 
																	'Psikologi',
																	'Pendidikan Bahasa Inggris'
																];
																foreach($prodi as $p): ?>
																<div class="form-check">
																	<input class="form-check-input prodi-checkbox" type="checkbox" value="<?= $p ?>" id="prodi_<?= str_replace(' ', '_', $p) ?>">
																	<label class="form-check-label" for="prodi_<?= str_replace(' ', '_', $p) ?>">
																		<?= $p ?>
																	</label>
																</div>
																<?php endforeach; ?>
															</div>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="card">
														<div class="card-body">
															<h6 class="card-title text-primary mb-3">Tahun Lulus</h6>
															<div id="thnLulusFilter" class="d-flex flex-wrap gap-3">
																<!-- Filled dynamically by AJAX -->
															</div>
														</div>
													</div>
												</div>
											</div>

                                            <div class="table-responsive mt-3">
                                                <table class="table table-lg">
                                                    <thead>
                                                        <tr>
                                                            <th>NIM</th>
                                                            <th>Status Keuangan</th>
                                                            <th>Ambil Toga</th>
															<th>Tahun Lulus</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="mhsTableBody">
                                                        <?php if (!empty($mhs_data)): ?>
                                                        <?php foreach ($mhs_data as $mhs): ?>
                                                        <tr>
                                                            <td><?php echo $mhs['nim']; ?></td>
                                                            <td><?php echo $mhs['sts_wsd'] == 1 ? '<b>Sudah Lunas</b>' : 'Belum Lunas'; ?>
                                                            </td>
                                                            <td><?php echo $mhs['ambil_toga'] == 1 ? '<b>Sudah Ambil</b>' : 'Belum Ambil'; ?>
															
                                                            </td>
															<td><?php echo isset($mhs['thn_lulus']) ? $mhs['thn_lulus'] : ''; ?></td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
                                                        <tr>
                                                            <td colspan="3" class="text-center">Tidak ada data</td>
                                                        </tr>
                                                        <?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function () {
	// Load the tahun lulus options and initial data
	loadTahunLulus();
	
	// Use event delegation for dynamically added elements
	$("#thnLulusFilter").on("change", ".thn-checkbox", function() {
		loadMahasiswa();
	});
	
	// Use event delegation for static elements as well for consistency
	$("#prodiFilter").on("change", ".prodi-checkbox", function() {
		loadMahasiswa();
	});
	
	function loadTahunLulus() {
		$.ajax({
			url: "<?php echo base_url('Akses/get_tahun_lulus'); ?>",
			type: "GET",
			dataType: "json",
			success: function (response) {
				var filterDiv = $("#thnLulusFilter");
				filterDiv.empty();
				
				if (response && response.length > 0) {
					$.each(response, function (index, tahun) {
						filterDiv.append('<div class="form-check">' +
							'<input class="form-check-input thn-checkbox" type="checkbox" value="' + tahun.thn_lulus + '" id="thn_' + tahun.thn_lulus + '">' +
							'<label class="form-check-label" for="thn_' + tahun.thn_lulus + '">' + tahun.thn_lulus + '</label>' +
							'</div>');
					});
				} else {
					filterDiv.html('<p>Tidak ada data tahun lulus</p>');
				}
				
				// After loading years, load the initial data
				loadMahasiswa();
			},
			error: function (xhr, status, error) {
				console.log("Error loading tahun lulus: " + error);
				$("#thnLulusFilter").html('<p class="text-danger">Error loading data</p>');
				loadMahasiswa(); // Still try to load data even if years fail
			}
		});
	}

	function loadMahasiswa() {
		var prodi = [];
		$(".prodi-checkbox:checked").each(function () {
			prodi.push($(this).val());
		});

		var thn_lulus = [];
		$(".thn-checkbox:checked").each(function () {
			thn_lulus.push($(this).val());
		});
		
		console.log("Filtering by prodi:", prodi, "and years:", thn_lulus);

		$.ajax({
			url: "<?php echo base_url('Akses/get_mahasiswa_by_filter'); ?>",
			type: "POST",
			data: { prodi: prodi, thn_lulus: thn_lulus },
			dataType: "json",
			success: function (response) {
				var tbody = $("#mhsTableBody");
				tbody.empty();

				if (response && response.length > 0) {
					$.each(response, function (index, mhs) {
						var row = "<tr>";
						row += "<td>" + mhs.nim + "</td>";
						row += "<td>" + (mhs.sts_wsd == 1 ? "<b>Sudah Lunas</b>" : "Belum Lunas") + "</td>";
						row += "<td>" + (mhs.ambil_toga == 1 ? "<b>Sudah Ambil</b>" : "Belum Ambil") + "</td>";
						row += "<td>" + (mhs.thn_lulus || '-') + "</td>";
						row += "</tr>";
						tbody.append(row);
					});
				} else {
					tbody.html('<tr><td colspan="4" class="text-center">Tidak ada data yang sesuai dengan filter</td></tr>');
				}
			},
			error: function (xhr, status, error) {
				console.error("AJAX Error:", error);
				$("#mhsTableBody").html('<tr><td colspan="4" class="text-center text-danger">Gagal memuat data</td></tr>');
			}
		});
	}
});
</script>



    <!-- Mazor -->
    <script src="<?= base_url('assets/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/compiled/js/app.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/static/js/components/dark.js'); ?>"></script>
</body>

</html>
