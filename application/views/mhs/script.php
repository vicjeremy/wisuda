<script src="<?= base_url('assets/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/compiled/js/app.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/static/js/components/dark.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/extensions/simple-datatables/umd/simple-datatables.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/static/js/pages/simple-datatables.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script
    src="<?= base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script
    src="<?= base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
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
        $("#example2").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "emptyTable": "No data available in table"
            }
        });
    });
</script>