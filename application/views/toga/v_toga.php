<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pengambilan Toga</title>
    <!-- Stylesheets -->
    <link rel="shortcut icon"
        href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e"
        type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">
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
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
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