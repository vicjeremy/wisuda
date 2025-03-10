<!-- Content Wrapper. Contains page content -->
<div class="page-content" style="margin-left: 5vw; margin-right: 5vw;">
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
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php $this->load->view('keu/table_keu') ?>
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
    <footer>
        <!-- <div class="container"> -->
        <div class="footer clearfix mb-0 text-muted" style="margin-left: 1vw; margin-right: 5vw;">
            <div class="float-start">
                <p>&copy; Sistem Informasi Wisuda. Program Studi Sistem Informasi 2025.</p>
            </div>
        </div>
        <!-- </div> -->
    </footer>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->