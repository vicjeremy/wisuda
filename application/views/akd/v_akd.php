<!-- Main Content -->
<main class="page-content">
  <div class="content-header">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row mb-2">
          <div class="col-sm-6">
            <i class="fa fa-users"></i>
            Selamat Datang Sebagai <?= ucfirst($this->fungsi->user_login()->user) ?>
            <b>(<?= ucfirst(get_level_name($this->fungsi->user_login()->level)) ?>)</b>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="<?= site_url('home/') ?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Akademik</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    </section>

    <section class="section">
      <div class="card">
        <div class="card-header">
          <h1>Dashboard Akademik</h1>
        </div>
        <div class="card-body">
          <h4>Selamat Datang</h4>
        </div>
      </div>
    </section>
</main>
<div class="footer clearfix mb-0 text-muted">
  <div class="float-start">
    <p>&copy; 2025 Sistem Wisuda. Semua hak cipta dilindungi.</p>
  </div>
</div>
</div>
</div>
</body>

</html>