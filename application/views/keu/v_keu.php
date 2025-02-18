<!-- Content Wrapper. Contains page content -->
<div class="page-content" style="margin-left: 10px; padding-left: 10px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Keuangan Mahasiswa</h1>
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
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Prodi</th>
                    <th>Tamu Tambahan</th>
                    <th>Pembayaran Wisuda</th>
                    <th>Pembayaran Toga</th>
                    <th>Pembayaran Tamu Tambahan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($status as $sts): ?>
                    <tr>
                      <td><?php echo $sts['nim']; ?></td>
                      <td><?php echo $sts['nama']; ?></td>
                      <td><?php echo $sts['fakultas']; ?></td>
                      <td><?php echo $sts['prodi']; ?></td>
                      <td><?php echo $sts['tamu']; ?></td>
                      <td><?= ucfirst(pembayaran($sts['sts_wsd'])) ?></td>
                      <td><?= ucfirst(pembayaran($sts['sts_toga'])) ?></td>
                      <td><?= ucfirst(pembayaran($sts['sts_tamu'])) ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Keu/edit_uang/<?php echo $sts['nim']; ?>"
                          class="button">Edit</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Fakultas</th>
                    <th>Prodi</th>
                    <th>Tamu Tambahan</th>
                    <th>Pembayaran Wisuda</th>
                    <th>Pembayaran Toga</th>
                    <th>Pembayaran Tamu Tambahan</th>
                    <th>Action</th>
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