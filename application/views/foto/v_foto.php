<main class="page-content" style="margin-left: 5vw; margin-right: 5vw;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Foto Mahasiswa</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="col-12">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <!-- Table Foto -->
                            <?php $this->load->view('foto/table_foto'); ?>
                        </div>

                        <div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Status Foto</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span>&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo base_url('Foto/update_foto'); ?>" method="POST">
                                        <div class="modal-body">
                                            <input type="hidden" name="nim" id="nim">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status" id="status">
                                                    <option value="0">Belum Upload Foto</option>
                                                    <option value="1">Sedang Diperiksa</option>
                                                    <option value="2">Disetujui</option>
                                                    <option value="3">Ditolak, Silahkan Upload Ulang Foto Almet</option>
                                                    <option value="4">Ditolak, Silahkan Upload Ulang Foto Keluarga
                                                    </option>
                                                    <option value="5">Ditolak, Silahkan Upload Ulang Foto Almet dan
                                                        Keluarga</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>&copy; Sistem Informasi Wisuda. Program Studi Sistem Informasi 2025.</p>
            </div>
        </div>
        </div>
    </section>
</main>

<!-- Mazor -->
<script src="assets/mazor/static/js/components/dark.js"></script>
<script src="assets/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/mazor/compiled/js/app.js"></script>
<script src="assets/mazor/extensions/jquery/jquery.min.js"></script>
<script src="assets/mazor/extensions/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/mazor/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/mazor/static/js/pages/datatables.js"></script>

<!-- jQuery -->
<script src="<?php echo base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>">
</script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>">
</script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>">
</script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>">
</script>
<script src="<?php echo base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>">
</script>
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
$(function() {
    $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "responsive": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "scrollX": true,
        "scrollY": "400px",
        "scrollCollapse": true,
    });
});
</script>
<script>
$(document).ready(function() {
    $('.editStatus').on('click', function() {
        var nim = $(this).data('nim');
        var status = $(this).data('status');

        $('#editStatusModal #nim').val(nim);
        $('#editStatusModal #status').val(status);
    });
});
</script>
</body>

</html>