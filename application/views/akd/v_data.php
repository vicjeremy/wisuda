  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('home/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
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
              <div class="container">
                <?php if ($this->session->flashdata('update_success')): ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil diupdate.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
          					<th>Nama</th>
                    <th>Tempat Lahir</th>
          					<th>Tanggal Lahir</th>
          					<th>Fakultas</th>
          					<th>Prodi</th>
          					<th>IPK</th>
          					<th>Edit</th>
                    <th>Delete</th>
                  </tr>
				          </thead>
                  <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($mahasiswa as $value): ?>
                    <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['nim']; ?></td>
                    <td><?php echo $value['nama']; ?></td>
                    <td><?php echo $value['lok_lahir']; ?></td>
                    <td><?php echo $value['tgl_lahir']; ?></td>
                    <td><?php echo $value['fakultas']; ?></td>
                    <td><?php echo $value['prodi']; ?></td>
                    <td><?php echo $value['ipk']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal" data-nim="<?php echo $value['nim']; ?>" data-nama="<?php echo $value['nama']; ?>" data-tgl_lahir="<?php echo $value['tgl_lahir']; ?>" data-fakultas="<?php echo $value['fakultas']; ?>" data-prodi="<?php echo $value['prodi']; ?>" data-ipk="<?php echo $value['ipk']; ?>">
                          Edit
                        </button></td>
                        <td>
                        <a href="<?php echo base_url(); ?>akd/delete/<?php echo $value['nim']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
          					<th>Nama</th>
                    <th>Tempat Lahir</th>
          					<th>Tanggal Lahir</th>
          					<th>Fakultas</th>
          					<th>Prodi</th>
          					<th>IPK</th>
          					<th>Edit</th>
                    <th>Delete</th>
                  </tr>
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
  <!-- /.content-wrapper -->
   <!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(); ?>akd/update" method="post">
          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" readonly>
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" required value="">
          </div>
          <div class="form-group">
            <label for="fakultas">Fakultas</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas" required>
          </div>
          <div class="form-group">
            <label for="prodi">Prodi</label>
            <input type="text" class="form-control" id="prodi" name="prodi" required>
          </div>
          <div class="form-group">
            <label for="ipk">IPK</label>
            <input type="text" class="form-control" id="ipk" name="ipk" required>
          </div>
          <!-- Add more form fields as needed -->
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
  $('#editModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var nim = button.data('nim'); // Extract info from data-* attributes
    var nama = button.data('nama');
    var tgl_lahir = button.data('tgl_lahir');
    var fakultas = button.data('fakultas');
    var prodi = button.data('prodi');
    var ipk = button.data('ipk');

    var modal = $(this);
    modal.find('.modal-body #nim').val(nim);
    modal.find('.modal-body #nama').val(nama);
    modal.find('.modal-body #tgl_lahir').val(tgl_lahir);
    modal.find('.modal-body #fakultas').val(fakultas);
    modal.find('.modal-body #prodi').val(prodi);
    modal.find('.modal-body #ipk').val(ipk);
  });
</script>
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
          title: function(){
            var printTitle = 'Data Mahasiswa Akademik';
            return printTitle;
          }
        },
        {
          extend: 'colvis'
        }
      ]
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
</body>
</html>
