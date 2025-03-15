
<div class="table-responsive" style="max-height: 62vh; overflow-y: auto; overflow-x: auto; ">
    <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
				<th>No</th>
                    <th>Title</th>
                    <th>Preview</th>
                    <th>Order</th>
                    <th>Status</th>
                    <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($contents as $content): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $content['title'] ?></td>
            <td>
                <?php if($content['content_type'] == 'gallery'): ?>
                    <?php if(!empty($content['image_path'])): ?>
                        <img src="<?= $content['image_path']?>" width="200">
                    <?php else: ?>
                        No image
                    <?php endif; ?>
                <?php endif; ?>
                
                <?php if($content['content_type'] == 'text'): ?>
                    <div class="mt-2">
                        <?= substr($content['text_content'], 0, 50) ?>...
                    </div>
                <?php endif; ?>
                
				<?php if($content['content_type'] == 'timeline'): ?>
                    <div class="mt-2">
                        <center><?= substr($content['start_date'], 0, 50) ?> -
                        <?= substr($content['end_date'], 0, 50) ?>
						<br>
						<?= substr($content['title'], 0, 50) ?></center>
                    </div>
                <?php endif; ?>
            </td>
            <td>
                <?= $content['display_order'] ?>
            </td>
            <td>
                <?= $content['is_active'] ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-secondary">Inactive</span>' ?>
            </td>
            <td>
				<button type="button" class="btn btn-sm btn-primary edit-button" data-bs-toggle="modal"
					data-bs-target="#editModal" data-id_home="<?= $content['id_home'] ?>"
					data-content_type="<?= $content['content_type'] ?>" data-title="<?= $content['title'] ?>"
					data-gallery="<?= $content['image_path'] ?>" data-text_content="<?= $content['text_content'] ?>"
					data-start_date="<?= $content['start_date'] ?>" data-end_date="<?= $content['end_date'] ?>"
					data-is_active="<?= $content['is_active'] ?>">
					Edit
				</button>
				<a href="<?= site_url('content/delete/'.$content['id_home']) ?>" class="btn btn-sm btn-danger" 
								onclick="return confirm('Apakah kamu yakin menghapus data ini?\n\nData ini akan terhapus secara permanen dari penyimpanan termasuk gambar.\n\nJika masih ingin menyimpan data ini, disarankan untuk menonaktifkan saja melalui tombol Edit.')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
			
            <?php // $this->load->view('tpl/script'); ?>
        </tbody>
    </table>

    <!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="undefined">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Konten</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="undefined">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= site_url('content/edit/') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="hidden" name="id_home" id="edit-id_home">
                    <input type="hidden" name="content_type" id="edit-content-type">
                    
                    <div class="form-group">
                        <label for="edit-title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="edit-title" name="title" required>
                    </div>
                    
                    <!-- Gallery field - will be shown/hidden via JS -->
                    <div class="form-group image-field" style="display: none;">
                        <label for="gallery" class="form-label">Upload Image</label>
                        <div class="mb-2 current-image">
                            <img src="" width="200" class="img-thumbnail">
                        </div>
                        <input type="file" class="form-control" id="gallery" name="gallery" accept="image/*">
                        <small class="form-text text-muted">Leave empty to keep current image</small>
                    </div>
                    
                    <!-- Text field - will be shown/hidden via JS -->
                    <div class="form-group text-field" style="display: none;">
                        <label for="edit-text-content" class="form-label">Text Content</label>
                        <textarea class="form-control" id="edit-text-content" name="text_content" rows="5"></textarea>
                    </div>
                    
                    <!-- Timeline field - will be shown/hidden via JS -->
                    <div class="form-group time-field" style="display: none;">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="edit-start-date">Tanggal Mulai</label>
                                <input type="date" class="form-control" id="edit-start-date" name="start_date">
                            </div>
                            <div class="col-md-6">
                                <label for="edit-end-date">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="edit-end-date" name="end_date">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="edit-is-active" name="is_active" value="1">
                            <label class="form-check-label" for="edit-is-active">Active</label>
                        </div>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>


