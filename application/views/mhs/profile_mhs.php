<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3></h3>
            </div>
            <!-- <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div> -->
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
					<h5>Informasi Pribadi</h5>
                    <div class="card-body">
                        <!-- <div class="d-flex justify-content-center align-items-center flex-column"> -->
                            <!-- <div class="avatar avatar-2xl">
                                <img src="./assets/compiled/jpg/2.jpg" alt="Avatar">
                            </div>

                            <h3 class="mt-3"><?php echo isset($mahasiswa['nama']) ? $mahasiswa['nama'] : 'Nama Mahasiswa'; ?></h3>
                            <p class="text-small"><?php echo isset($mahasiswa['nim']) ? $mahasiswa['nim'] : 'NIM'; ?></p> -->
                        <div class="form-group">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" id="nim" class="form-control" value="<?php echo isset($mahasiswa['nim']) ? $mahasiswa['nim'] : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="<?php echo isset($mahasiswa['nama']) ? $mahasiswa['nama'] : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="lok_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="lok_lahir" id="lok_lahir" class="form-control" value="<?php echo isset($mahasiswa['lok_lahir']) ? $mahasiswa['lok_lahir'] : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?php echo convert_date_format($mahasiswa['tgl_lahir']) ? convert_date_format($mahasiswa['tgl_lahir']) : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="fakultas" class="form-label">Fakultas</label>
                            <input type="text" name="fakultas" id="fakultas" class="form-control" value="<?php echo isset($mahasiswa['fakultas']) ? $mahasiswa['fakultas'] : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="prodi" class="form-label">Prodi</label>
                            <input type="text" name="prodi" id="prodi" class="form-control" value="<?php echo isset($mahasiswa['prodi']) ? $mahasiswa['prodi'] : ''; ?>" readonly>
							
                        </div>
                        <div class="form-group">
                            <label for="ipk" class="form-label">IPK</label>
                            <input type="text" name="ipk" id="ipk" class="form-control" value="<?php echo isset($mahasiswa['ipk']) ? $mahasiswa['ipk'] : ''; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="tamu" class="form-label">Jumlah Tamu Tambahan</label>
                            <input type="text" name="tamu" id="tamu" class="form-control" value="<?php echo isset($mahasiswa['tamu']) ? $mahasiswa['tamu'] : ''; ?>" readonly>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
				<div class="card">
					<div class="card-body">
						<!-- Personal Information -->
						 <br>
                        <div class="form-group">
							<label for="skripsi" class="form-label">Judul Skripsi</label>
                            <textarea name="skripsi" id="skripsi" class="form-control" rows="3" readonly><?php echo isset($mahasiswa['skripsi']) ? $mahasiswa['skripsi'] : ''; ?></textarea>
							
                        </div>
                        <div class="form-group">
							<label for="alamat" class="form-label">Alamat</label>
                            
							<textarea name="alamat" id="alamat" class="form-control" rows="3" readonly><?php echo isset($mahasiswa['alamat']) ? $mahasiswa['alamat'] : ''; ?></textarea>
                        </div>
                        <div class="form-group">
							<label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo isset($mahasiswa['email']) ? $mahasiswa['email'] : ''; ?>" readonly>
                        </div>
						<div class="form-group">
							<label for="hp" class="form-label">No. HP</label>
							<input type="tel" name="hp" id="hp" class="form-control" value="<?php echo isset($mahasiswa['hp']) ? $mahasiswa['hp'] : ''; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="size" class="form-label">Ukuran Baju Toga</label>
							<input type="text" name="size" id="size" class="form-control" value="<?php echo isset($mahasiswa['size']) ? $mahasiswa['size'] : ''; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="foto_almet" class="form-label">Link Gdrive Foto Almamater</label>
							<input type="text" name="foto_almet" id="foto_almet" class="form-control" value="<?php echo isset($mahasiswa['foto_almet']) ? $mahasiswa['foto_almet'] : ''; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="foto_keluarga" class="form-label">Link Gdrive Foto Keluarga</label>
                            <input type="text" name="foto_keluarga" id="foto_keluarga" class="form-control" value="<?php echo isset($mahasiswa['foto_keluarga']) ? (strpos($mahasiswa['foto_keluarga'], 'http') === 0 ? $mahasiswa['foto_keluarga'] : 'https://' . $mahasiswa['foto_keluarga']) : ''; ?>" readonly>
							
						</div>

                    </div>
					
                </div>
            </div>
			<div class="form-group mt-3" style="margin-left: 40vw;">
				<a href="<?php echo base_url('mhs/edit'); ?>" class="btn btn-primary">Update Data</a>
				</div>
        </div>
</div>
</section>
</div>
