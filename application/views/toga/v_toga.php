<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pengambilan Toga</title>
  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app-dark.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/mazor/extensions/@fortawesome/fontawesome-free/css/all.min.css'); ?>">
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
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">X</span>
          </button>
          <!-- Theme Toggle -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="theme-toggle d-flex gap-2 align-items-center mt-2 me-auto">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                  <g transform="translate(-210 -1)">
                    <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                    <circle cx="220.5" cy="11.5" r="4"></circle>
                    <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                  </g>
                </g>
              </svg>
              <div class="form-check form-switch fs-6">
                <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                <label class="form-check-label"></label>
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path>
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
                    <!-- Tabel -->
                    <?php $this->load->view('toga/tabel_toga'); ?>
                  </div>
                </div>
              </section>
            </div>
          </section>
        </div>
      </div>

      <footer>
        <div class="container">
          <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
              <p>&copy; 2025 Sistem Wisuda. Semua hak cipta dilindungi.</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Mazor -->
  <script src="<?= base_url('assets/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/compiled/js/app.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/static/js/components/dark.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/extensions/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/extensions/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js'); ?>"></script>
  <script src="<?= base_url('assets/mazor/static/js/pages/datatables.js'); ?>"></script>
  <!-- AdminLte -->
  <script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
  <script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": [{
            extend: 'copy',
            title: 'Kuitansi Toga'
          },
          {
            extend: 'csv',
            title: 'Kuitansi Toga'
          },
          {
            extend: 'excel',
            title: 'Kuitansi Toga'
          },
          {
            extend: 'pdf',
            title: 'Kuitansi Toga'
          },
          {
            extend: 'print',
            title: 'Kuitansi Toga'
          },
          {
            extend: 'colvis'
          }
        ]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

      // Print Button for Specific Row
      $(document).on('click', '.printButton', function() {
        var now = new Date();
        var dateTime = now.toLocaleString();

        // Get the row data
        const row = $(this).closest('tr');
        const nim = row.find('td:eq(0)').text();
        const jubah = row.find('td:eq(1)').text();
        const topi = row.find('td:eq(2)').text();
        const skecel = row.find('td:eq(3)').text();
        const samir = row.find('td:eq(4)').text();
        const logo = row.find('td:eq(5)').text();
        const selendang = row.find('td:eq(6)').text();

        // Prepare content to print
        const printHeader = `<div class="text-center mb-3">
          <h2>Data Pengambilan Toga Mahasiswa</h2>
          <p>Dicetak pada: ${dateTime}</p>
        </div>`;

        const printContent = `
          <table border="1" style="border-collapse: collapse; width: 100%;">
            <tr><th>Nim</th><td>${nim}</td></tr>
            <tr><th>Jubah</th><td>${jubah}</td></tr>
            <tr><th>Topi</th><td>${topi}</td></tr>
            <tr><th>Skecel</th><td>${skecel}</td></tr>
            <tr><th>Samir</th><td>${samir}</td></tr>
            <tr><th>Logo</th><td>${logo}</td></tr>
            <tr><th>Selendang</th><td>${selendang}</td></tr>
          </table>`;

        // Create new window and print content
        const printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Print Data</title>');
        printWindow.document.write('<style>');
        printWindow.document.write('table { border-collapse: collapse; width: 100%; }');
        printWindow.document.write('th, td { border: 1px solid black; padding: 8px; text-align: left; }');
        printWindow.document.write('</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(printHeader);
        printWindow.document.write(printContent);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
      });
    });
  </script>
</body>

</html>