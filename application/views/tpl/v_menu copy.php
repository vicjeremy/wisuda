<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
        <!-- Menu Mahasiswa -->
        <?php if ($this->session->userdata('level') == 6): ?>
          <b>
            <li class="nav-header">Menu Mahasiswa</li>
          </b>
          <li class="nav-item ">
            <a href="<?= site_url('mhs') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('mhs/lihat_data') ?>" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabel Mahasiswa
              </p>
            </a>
          </li>

          <!-- Menu Keuangan -->
        <?php elseif ($this->session->userdata('level') == 3): ?>
          <b>
            <li class="nav-header">Menu Keuangan</li>
          </b>
          <li class="nav-item ">
            <a href="<?= site_url('keu/') ?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-university"></i>
              <p>
                Perkuliahan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('Akademik/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Prodi/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Program Studi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Matakuliah/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('tahun_akademik/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tahun Akademik</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Krs/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KRS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Nilai/input_nilai') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Nilai</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('Nilai/') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>KHS</p>
                </a>
              </li>

              <!-- Menu Akademik -->
            <?php elseif ($this->session->userdata('level') == 2): ?>
              <b>
                <li class="nav-header">Menu Akademik</li>
              </b>
              <li class="nav-item ">
                <a href="<?= site_url('akd/') ?>" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-university"></i>
                  <p>
                    Akademik
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= site_url('akd/download') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Download Excel</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('akd/add_mhs') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Input Data Mahasiswa</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('akd/lihat_data') ?>" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tabel Data Mahasiswa</p>
                    </a>
                  </li>

                  <!-- Menu Admin -->
                <?php elseif ($this->session->userdata('level') == 1): ?>
                  <b>
                    <li class="nav-header">Menu Admin</li>
                  </b>
                  <li class="nav-item ">
                    <a href="<?= site_url('adm/') ?>" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-table"></i>
                      <p>
                        Tabel
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="<?= site_url('adm/view_akn') ?>" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tabel Hak Akses</p>
                        </a>
                      </li>
                    </ul>
                  </li>

                <?php endif; ?>
              </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>