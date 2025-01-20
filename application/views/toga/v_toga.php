<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengambilan Toga Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('home/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Pengambilan Toga Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nim</th>
                    <th>Jubah</th>
                    <th>Topi</th>
                    <th>Skecel</th>
                    <th>Samir</th>
                    <th>Logo</th>
                    <th>Selendang</th>
                    <th>Action</th>
                    <th>Print</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($status as $sts): ?>
                        <tr>
                            <td><?php echo $sts['nim']; ?></td>
                            <td><?= ucfirst(toga($sts['baju'])) ?></td>
                            <td><?= ucfirst(toga($sts['topi'])) ?></td>
                            <td><?= ucfirst(toga($sts['skecel'])) ?></td>
                            <td><?= ucfirst(toga($sts['samir'])) ?></td>
                            <td><?= ucfirst(toga($sts['logo'])) ?></td>
                            <td><?= $sts['selendang'] ?><?= ($sts['selendang'] !== 'Tidak Dapat') ? ',  ' . ucfirst(toga($sts['sts_selendang'])) : '' ?></td>

                            <td>
                                <a href="<?php echo base_url(); ?>toga/edit_toga/<?php echo $sts['nim']; ?>" class="button">Edit</a>
                            </td>
                            <td>
                            <button class="btn btn-primary no-print printButton">Print Data</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [
        {
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
          title: function(){
            var printTitle = 'Kuitansi Toga';
            return printTitle;
          }
        },
        {
          extend: 'colvis'
        }
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    // Print Button for Specific Row
    $(document).on('click', '.printButton', function () {
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
