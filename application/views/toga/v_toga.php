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
    <!-- DataTables CSS -->
    <link rel="stylesheet"
        href="<?= base_url('assets/mazor/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css'); ?>">
    <link rel="stylesheet" crossorigin=""
        href="<?= base_url('assets/mazor/compiled/css/table-datatable-jquery.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
</head>

<body>
    <script src="<?= base_url('assets/mazor/static/js/initTheme.js'); ?>"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <nav class="navbar navbar-expand navbar-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
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

            <!-- <div class="container"> -->
            <div class="page-content" style="margin-left: 5vw; margin-right: 5vw;">
                <section class="row">
                    <div class="col-12">
                        <section class="content-header">
                            <div class="container-fluid">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h3>Data Pengambilan Toga</h3>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section">
                            <div class="card">
                                <div class="card-body">
                                    <?php $this->load->view('toga/tabel_toga'); ?>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
            <!-- </div> -->

            <footer>
                <!-- <div class="container"> -->
                <div class="footer clearfix mb-0 text-muted" style="margin-left: 5vw; margin-right: 5vw;">
                    <div class="float-start">
                        <p>&copy; Sistem Informasi Wisuda. Program Studi Sistem Informasi 2025.</p>
                    </div>
                </div>
                <!-- </div> -->
            </footer>
        </div>
    </div>

    <!-- Core Scripts -->
    <script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/compiled/js/app.js'); ?>"></script>
    <script src="<?= base_url('assets/mazor/static/js/components/dark.js'); ?>"></script>

    <!-- DataTables Scripts -->
    <script src="<?= base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>">
    </script>
    <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>

    <script>
    $(document).ready(function() {
        if ($.fn.DataTable.isDataTable('#example1')) {
            $('#example1').DataTable().destroy();
        }

        var table = $('#example1').DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "dom": "<'row'<'col-sm-12 col-md-6'B><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            "buttons": [{
                    extend: 'copy',
                    title: 'Data Pengambilan Toga'
                },
                {
                    extend: 'csv',
                    title: 'Data Pengambilan Toga'
                },
                {
                    extend: 'excel',
                    title: 'Data Pengambilan Toga'
                },
                {
                    extend: 'pdf',
                    title: 'Data Pengambilan Toga'
                },
                {
                    extend: 'print',
                    title: 'Data Pengambilan Toga'
                },
                'colvis'
            ]
        });

        $(document).on('click', '.printButton', function() {
            var now = new Date();
            var dateTime = now.toLocaleString();

            const row = $(this).closest('tr');
            const nim = row.find('td:eq(0)').text().trim();
            const jubah = row.find('td:eq(1)').text().trim();
            const topi = row.find('td:eq(2)').text().trim();
            const skecel = row.find('td:eq(3)').text().trim();
            const samir = row.find('td:eq(4)').text().trim();
            const logo = row.find('td:eq(5)').text().trim();
            const selendang = row.find('td:eq(6)').text().trim();

            const printContent = `
            <html>
            <head>
                <title>Kwitansi Pengambilan Toga</title>
                <style>
                    @page {
                        size: landscape;
                    }
                    body { 
                        font-family: Arial, sans-serif; 
                        margin: 40px;
                    }
                    .header { text-align: center; margin-bottom: 20px; }
                    .header h2 { margin: 5px 0; }
                    .info-container {
                        display: flex;
                        justify-content: space-between;
                        gap: 20px;
                        margin-bottom: 20px;
                    }
                    .info-column {
                        flex: 1;
                    }
                    .info-table { 
                        width: 100%; 
                        border-collapse: collapse; 
                        margin-bottom: 20px; 
                    }
                    .info-table.no-border th, 
                    .info-table.no-border td { 
                        border: none;
                        padding: 8px; 
                        text-align: left; 
                    }
                    .info-table th, .info-table td { 
                        border: 1px solid black; 
                        padding: 8px; 
                        text-align: left; 
                    }
                    .info-table th { background-color: #f2f2f2; }
                    .total { font-weight: bold; }
                </style>
            </head>
            <body>
                <div class="header">
                    <h2>KWITANSI PEMBAYARAN</h2>
                    <p>Dicetak pada: ${dateTime}</p>
                </div>

                <div class="info-container">
                    <div class="info-column">
                        <table class="info-table no-border">
                            <tr><th>Kode Pembayaran</th><td>XXXXX</td></tr>
                            <tr><th>Periode Pembayaran</th><td>2024</td></tr>
                            <tr><th>Tanggal Pembayaran</th><td>${dateTime}</td></tr>
                            <tr><th>NIM</th><td>${nim}</td></tr>
                        </table>
                    </div>
                    <div class="info-column">
                        <table class="info-table no-border">
                            <tr><th>Nama</th><td>John Doe</td></tr>
                            <tr><th>Program Studi</th><td>Teknik Informatika</td></tr>
                            <tr><th>Nominal</th><td>Rp 500.000</td></tr>
                        </table>
                    </div>
                </div>

                <h3>Detail Pengambilan Toga</h3>
                <table class="info-table">
                    <tr>
                        <th>Item</th>
                        <th>Status</th>
                    </tr>
                    <tr><td>Jubah</td><td>${jubah}</td></tr>
                    <tr><td>Topi</td><td>${topi}</td></tr>
                    <tr><td>Skecel</td><td>${skecel}</td></tr>
                    <tr><td>Samir</td><td>${samir}</td></tr>
                    <tr><td>Logo</td><td>${logo}</td></tr>
                    <tr><td>Selendang</td><td>${selendang}</td></tr>
                </table>

                <p style="margin-top: 30px; text-align: right;">Tanda tangan,</p>
                <p style="text-align: right; margin-top: 50px;">__________________</p>
            </body>
            </html>`;

            const printWindow = window.open('', '', 'height=600,width=800');
            printWindow.document.write(printContent);
            printWindow.document.close();
            printWindow.print();
        });
    });
    </script>


</body>

</html>
