<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3></h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center flex-column">
                            <div class="avatar avatar-2xl">
                                <img src="./assets/compiled/jpg/2.jpg" alt="Avatar">
                            </div>

                            <h3 class="mt-3"><?php echo isset($mahasiswa['nama']) ? $mahasiswa['nama'] : 'Nama Mahasiswa'; ?></h3>
                            <p class="text-small"><?php echo isset($mahasiswa['nim']) ? $mahasiswa['nim'] : 'NIM'; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Personal Information -->
                        <h5>Informasi Pribadi</h5>
                        <div class="form-group">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" id="nim" class="form-control" value="<?php echo isset($mahasiswa['nim']) ? $mahasiswa['nim'] : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo isset($mahasiswa['nama']) ? $mahasiswa['nama'] : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?php echo isset($mahasiswa['tgl_lahir']) ? $mahasiswa['tgl_lahir'] : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="hp" class="form-label">Nomor HP</label>
                            <input type="text" name="hp" id="hp" class="form-control" value="<?php echo isset($mahasiswa['hp']) ? $mahasiswa['hp'] : ''; ?>" readonly>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <a href="<?php echo base_url('mhs/edit'); ?>" class="btn btn-primary">Edit Data</a>
                        </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>