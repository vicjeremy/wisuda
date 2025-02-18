<!-- Modal for Input Data Mahasiswa -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="inputModalLabel">Input Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form start -->
        <form method="post" action="<?= base_url(); ?>akd/save_mhs" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="import">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" id="file" name="file" required>
                  <label class="custom-file-label" for="file">Choose file</label>
                </div>
              </div>
              <br>
              <?php if ($this->session->flashdata('message')): ?>
                <div class="alert alert-success">
                  <?= $this->session->flashdata('message'); ?>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger">
                  <?= $this->session->flashdata('error'); ?>
                </div>
              <?php endif; ?>

              <?php if ($this->session->flashdata('duplicate_nims')): ?>
                <div class="alert alert-warning">
                  <strong>Perhatian!</strong> Data dengan NIM berikut sudah ada:
                  <?= $this->session->flashdata('duplicate_nims'); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    // Show input modal when "Input Data Mahasiswa" button is clicked
    $('.btn-success').on('click', function(e) {
      e.preventDefault();
      $('#inputModal').modal('show');
    });
  });
</script>