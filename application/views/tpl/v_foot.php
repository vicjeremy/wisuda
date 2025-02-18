<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script
  src="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script
  src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script
  src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script
  src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script
  src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>

<!-- AdminLTE -->
<script src="<?php echo base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>

<!-- Mazor -->
<!-- Bootstrap JS -->
<!-- <script src="assets/static/js/initTheme.js"></script> -->
<script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/compiled/js/app.js"></script>
<script src="assets/static/js/components/dark.js"></script>
<script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/static/js/pages/simple-datatables.js"></script>
<script src="assets/extensions/filepond/filepond.js"></script>
<script src="assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.js"></script>
<script src="assets/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.js"></script>
<script src="assets/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.js"></script>
<script
  src="assets/extensions/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.js"></script>
<script src="assets/extensions/filepond-plugin-image-crop/filepond-plugin-image-crop.js"></script>
<script src="assets/extensions/filepond-plugin-image-filter/filepond-plugin-image-filter.js"></script>
<script src="assets/extensions/filepond-plugin-image-resize/filepond-plugin-image-resize.js"></script>
<script src="assets/extensions/toastify-js/src/toastify.js"></script>
<script src="assets/static/js/pages/filepond.js"></script>
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/static/js/pages/dashboard.js"></script>



<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('assets/adminlte/plugins/chart.js/Chart.min.js'); ?>"></script>
<script>
  $(function() {
    /* uPlot
     * -------
     * Here we will create a few charts using uPlot
     */
    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    <?php
    $sql = "SELECT b.nama_agama, COUNT(*) as total FROM mahasiswa a JOIN agama b ON a.id_agama = b.id_agama GROUP BY a.id_agama";
    $hasil = $this->db->query($sql)->result();

    // Inisialisasi nilai variabel awal
    $agama = "";
    $jumlah = null;
    foreach ($hasil as $item) {
      $agm = $item->nama_agama;
      $agama .= "'$agm', ";
      $jum = $item->total;
      $jumlah .= "$jum, ";
    }
    ?>
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
      labels: [<?php echo $agama; ?>],
      datasets: [{
        label: 'Data Agama ',
        backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)', 'rgb(175, 238, 239)', 'rgb(255, 255, 0)', 'rgba(255, 0, 0, 1)'],
        borderColor: ['rgb(255, 99, 132)'],
        data: [<?php echo $jumlah; ?>]
      }]
    }

    var stackedBarChartOptions = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
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
</body>

</html>