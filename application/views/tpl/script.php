

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>

<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- DataTables & Plugins -->
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

<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>

<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js'); ?>"></script>

<!-- Mazor Scripts -->
<script src="<?= base_url('assets/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/compiled/js/app.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/static/js/components/dark.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/extensions/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/static/js/pages/datatables.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/static/js/pages/horizontal-layout.js'); ?>"></script>

<!-- FilePond Scripts -->
<script src="<?= base_url('assets/mazor/extensions/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/extensions/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/extensions/filepond/filepond.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/extensions/toastify-js/src/toastify.js'); ?>"></script>
<script src="<?= base_url('assets/mazor/static/js/pages/filepond.js'); ?>"></script>

<!-- Page specific script -->
<script>
    $(function() {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });

        // Auto-hide alerts setelah 3 detik
        setTimeout(function() {
            $(".alert-dismissible").alert('close');
        }, 3000);
    });
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
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>
<script>
    $('#editModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var nim = button.data('nim');
    var nama = button.data('nama');
    var tgl_lahir = button.data('tgl_lahir'); // Apakah ini berformat YYYY-MM-DD?
    var fakultas = button.data('fakultas');
    var prodi = button.data('prodi');
    var ipk = button.data('ipk');
    var thn_lulus = button.data('thn_lulus');

    // Debugging
    console.log("🔍 Data diterima di Modal:");
    console.log("NIM:", nim);
    console.log("Nama:", nama);
    console.log("Tanggal Lahir:", tgl_lahir); // Apakah ini tampil di console?
    
    var modal = $(this);
    modal.find('.modal-body #nim').val(nim);
    modal.find('.modal-body #nama').val(nama);
    modal.find('.modal-body #tgl_lahir').val(tgl_lahir);
    modal.find('.modal-body #fakultas').val(fakultas);
    modal.find('.modal-body #prodi').val(prodi);
    modal.find('.modal-body #ipk').val(ipk);
    modal.find('.modal-body #thn_lulus').val(thn_lulus);
});

</script>
<script>
    $(function() {
        if (!$.fn.DataTable.isDataTable("#example1")) {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                        extend: 'copy',
                        title: 'Data Mahasiswa Akademik'
                    },
                    {
                        extend: 'csv',
                        title: 'Data Mahasiswa Akademik'
                    },
                    {
                        extend: 'excel',
                        title: 'Data Mahasiswa Akademik'
                    },
                    {
                        extend: 'pdf',
                        title: 'Data Mahasiswa Akademik'
                    },
                    {
                        extend: 'print',
                        title: function() {
                            var printTitle = 'Data Mahasiswa Akademik';
                            return printTitle;
                        }
                    },
                    {
                        extend: 'colvis'
                    }
                ]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        }

        if (!$.fn.DataTable.isDataTable("#example2")) {
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
                "buttons": [{
                        extend: 'copy',
                        title: 'Data Keuangan Mahasiswa'
                    },
                    {
                        extend: 'csv',
                        title: 'Data Keuangan Mahasiswa'
                    },
                    {
                        extend: 'excel',
                        title: 'Data Keuangan Mahasiswa'
                    },
                    {
                        extend: 'pdf',
                        title: 'Data Keuangan Mahasiswa'
                    },
                    {
                        extend: 'print',
                        title: function() {
                            var printTitle = 'Data Keuangan Mahasiswa';
                            return printTitle;
                        }
                    },
                    {
                        extend: 'colvis'
                    }
                ]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        }
    });
</script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
<script>
    $(document).ready(function() {
        // Show input modal when "Input Data Mahasiswa" button is clicked
        $('.btn-success').on('click', function(e) {
            e.preventDefault();
            $('#inputModal').modal('show');
        });

        // Ensure modal backdrop is removed when modal is closed
        $('#inputModal').on('hidden.bs.modal', function() {
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        });
    });
</script>
