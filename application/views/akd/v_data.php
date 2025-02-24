              <div class="container">
                <?php if ($this->session->flashdata('update_success')): ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil diupdate.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>
                <!-- Table -->
                <?php $this->load->view('akd/table_akd'); ?>
              </div>
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