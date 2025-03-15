<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/img/logo.png'); ?>">
    <title>Wisuda Unkartur</title>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/app-dark.css'); ?>">
    <link rel="stylesheet"
        href="<?= base_url('assets/mazor/extensions/@fortawesome/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/mazor/compiled/css/iconly.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/mazor/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css'); ?>">
    <link rel="stylesheet"  href="<?= base_url('assets/mazor/compiled/css/table-datatable-jquery.css'); ?>">
    <!-- Scripts -->
    <!-- <script src="<?= base_url('assets/mazor/js/scripts.js'); ?>" defer></script> -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>

<body>
    <script src="<?= base_url('assets/mazor/static/js/initTheme.js'); ?>"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <nav class="navbar navbar-expand navbar-top">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">X</span>
                    </button>
                    <!-- Theme Toggle -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="theme-toggle d-flex gap-2 align-items-center mt-2 me-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
							<img src="<?= base_url('assets/img/logo.png'); ?>" style="width: 48px; height: 48px;" alt="">
                        <h5> Wisuda Universitas Nasional Karangturi</h5>
                        </div>
                        <!-- logout  -->
                        <ul class="navbar-nav ms-auto mb-lg-0">
							<a href="<?= base_url('adm') ?>" class="btn btn-link" style="text-decoration: none; margin-right: 2vw;">
										<h5>Menu</h5>
									</a>
                            <a href="<?php echo site_url('Auth/logout'); ?>" class="btn btn-danger">Logout</a>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ./Navbar -->

            <!-- <div class="container"> -->
            <div class="page-content" style="margin-left: 5vw; margin-right: 5vw;">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
								<!-- <div> <?= $error ?> </div> -->
                                <h1>Dashboard Admin</h1>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php if ($this->session->flashdata('message')): ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <?= htmlspecialchars($this->session->flashdata('message')); ?>
                                        </div>
                                        <?php endif; ?>
											<div class="d-flex gap-2 mb-3" style="align-items: center;">
												<button class="btn btn-secondary filter-option" type="button" 
												id="filterDropdown" data-filter="timeline" href="#">
												 Timeline
											</button>
											<button class="btn btn-secondary filter-option" type="button" 
											id="filterDropdown" data-filter="gallery" href="#">
											 Gallery
										</button>
										<button class="btn btn-secondary filter-option" type="button" 
										id="filterDropdown" data-filter="text" href="#">
										 Text
									</button>
								</div>
								<hr>
								<div class="d-flex gap-2 mb-3">
									<button type="button" class="btn btn-primary " data-bs-toggle="modal"
										data-bs-target="#addModal">
										Tambah Konten
									</button>
									<button type="button" class="btn btn-info" id="orderBtn" data-bs-toggle="modal"
										data-bs-target="#orderModal">
										Atur Display Order
									</button>

									
									
								</div>

                                        
                                        <?php $this->load->view('adm/tbl_kntn'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- </div> -->
			
			<!-- Modal for Display Order -->
			<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="orderModalLabel">Atur Display Order</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<ul id="sortable" class="list-group">
							
							</ul>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" id="saveOrder">Save Changes</button>
						</div>
					</div>
				</div>
			</div>

            <!-- Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
                aria-hidden="undefined">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Tambah Data Akun</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="undefined">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url('adm/create'); ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="content_type" class="form-label">Content Type</label>
                                    <select class="form-select" id="content_type" name="content_type">
                                        <option selected value="timeline" <?= set_select('content_type', 'timeline') ?>>Timeline</option>
                                        <option value="gallery" <?= set_select('content_type', 'gallery') ?>>Gallery</option>
                                        <option value="text" <?= set_select('content_type', 'text') ?>>Text</option>
                                    </select>
                                </div>
                                <div class="form-group">
										<label for="title" class="form-label">Title</label>
        								<input type="text" class="form-control" id="title" name="title" value="<?= set_value('title') ?>" required>
                                </div>
                                <div class="form-group image-field">
                                    <label for="gallery" class="form-label">Upload Image</label>
        							<input type="file" class="form-control" id="gallery" name="gallery" accept="image/*">
                                </div>
                                <div class="form-group text-field">
                                    <label for="text_content" class="form-label">Text Content</label>
        							<textarea class="form-control" id="text_content" name="text_content" rows="5"><?= set_value('text_content') ?></textarea>
                                </div>
								<div class="form-group time-field">
									<div class="row">
										<div class="col-md-6">
											<label for="start_date">Tanggal Mulai</label>
											<input type="date" class="form-control" id="start_date" name="start_date" value="<?= set_value('start_date') ?>">
										</div>
										<div class="col-md-6">
											<label for="end_date">Tanggal Selesai</label>
											<input type="date" class="form-control" id="end_date" name="end_date" value="<?= set_value('end_date') ?>">
										</div>
									</div>
								</div>
                                <div class="form-group">
                                	<input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" <?= set_checkbox('is_active', '1', true) ?>>
									<label class="form-check-label" for="is_active">Active</label>
								</div>
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <!-- <div class="container"> -->
                <div class="footer clearfix mb-0 text-muted" style="margin-left: 5vw; margin-right: 5vw;">
                    <div class="float-start">
                        <p>&copy; Sistem Informasi Wisuda. Program Studi Sistem Informasi 2025.</p>
                    </div>
                </div>
                <!-- </div> -->
            </footer>
        </div>
    </div>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	<!-- Mazor -->
	<script src="<?= base_url('assets/mazor/extensions/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>
	<script src="<?= base_url('assets/mazor/compiled/js/app.js'); ?>"></script>
	<script src="<?= base_url('assets/mazor/static/js/components/dark.js'); ?>"></script>
	<script src="<?= base_url('assets/mazor/extensions/jquery/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/mazor/extensions/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
	<script src="<?= base_url('assets/mazor/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js'); ?>">
	</script>
	<script src="<?= base_url('assets/mazor/static/js/pages/datatables.js'); ?>"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
	$(document).ready(function() {
		// Handle edit button clicks with event delegation (works for dynamically loaded content)
		$(document).on('click', '.edit-button', function() {
			const id_home = $(this).data('id_home');
			const contentType = $(this).data('content_type');
			const title = $(this).data('title');
			const gallery = $(this).data('gallery');
			const textContent = $(this).data('text_content');
			const startDate = $(this).data('start_date');
			const endDate = $(this).data('end_date');
			const isActive = $(this).data('is_active');

			// Set values in form
			$('#edit-id_home').val(id_home);
			$('#edit-content-type').val(contentType);
			$('#edit-title').val(title);
			$('#edit-text-content').val(textContent);
			$('#edit-start-date').val(startDate);
			$('#edit-end-date').val(endDate);
			$('#edit-is-active').prop('checked', isActive == 1);

			// Hide all content type fields first
			$('.image-field, .text-field, .time-field').hide();
			
			// Show fields based on content type
			if (contentType === 'gallery') {
				$('.image-field').show();
				if (gallery) {
					$('.current-image img').attr('src', gallery);
					$('.current-image').show();
				} else {
					$('.current-image').hide();
				}
			} else if (contentType === 'text') {
				$('.text-field').show();
			} else if (contentType === 'timeline') {
				$('.time-field').show();
			}
		});
	});
</script>

<!-- Tambah data -->
<script>
    $(document).ready(function() {

        // Function accepting a context (if provided, use modal context, otherwise document)
        function updateFields(context) {
            let $ctx = context ? $(context) : $(document);
            const selectedType = $ctx.find('#content_type').val();
            $ctx.find('.image-field, .text-field, .time-field').hide();

            if (selectedType === 'gallery') {
                $ctx.find('.image-field').show();
            } else if (selectedType === 'timeline') {
                $ctx.find('.time-field').show();
            } else if (selectedType === 'text') {
                $ctx.find('.text-field').show();
            }
        }

        // Bind change event for content_type inside modal
        $(document).on('change', '#content_type', function() {
            updateFields($(this).closest('.modal'));
        });

        // When modal is shown, update fields using the modal context
        $('#addModal').on('shown.bs.modal', function() {
            updateFields(this);
        });

        // For cases where the element exists in the document (outside modal)
        updateFields();
    });
</script>

<!-- Content filtering script -->
<script>
	let currentFilter = '';
	document.addEventListener('DOMContentLoaded', function() {
		const filterOptions = document.querySelectorAll('.filter-option');
		const tableContainer = document.querySelector('.table-responsive');

		function filterContent(filterValue) {
			// Show loading indicator
			if (tableContainer) {
				tableContainer.innerHTML = '<div class="text-center my-3"><div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div></div>';
			}

			// Server-side filtering with fetch
			fetch(`<?= site_url('adm/filter_content') ?>?filter=${filterValue}`)
				.then(response => response.text())
				.then(html => {
					if (tableContainer) {
						tableContainer.innerHTML = html;
					}
				})
				.catch(error => {
					console.error("Error filtering content:", error);
					if (tableContainer) {
						tableContainer.innerHTML = '<div class="alert alert-info">No data found for the selected filter.</div>';
					}
				});
		}

		// Set default filter
		if (filterOptions.length > 0) {
			const defaultFilter = filterOptions[0];
			defaultFilter.classList.remove('btn-secondary');
			defaultFilter.classList.add('btn-success');
			currentFilter = defaultFilter.dataset.filter;
            filterContent(currentFilter);
		}

		// Setup filter button clicks
		filterOptions.forEach(option => {
			option.addEventListener('click', function() {
				filterOptions.forEach(btn => {
					btn.classList.remove('btn-success');
					btn.classList.add('btn-secondary');
				});
				
				this.classList.remove('btn-secondary');
				this.classList.add('btn-success');
				currentFilter = this.dataset.filter;
                filterContent(currentFilter);
			});
		});
	});

	// Display Order - load order items based on the current filter
    $('#orderModal').on('shown.bs.modal', function(){
        let filter = currentFilter;
        $.ajax({
            url: "<?= site_url('adm/get_order_items') ?>",
            type: "GET",
            data: { filter: filter },
            success: function(html){
                $('#sortable').html(html);
                $('#sortable').sortable({
                    placeholder: "ui-state-highlight"
                });
            },
            error: function(xhr, status, error){
                alert('Error loading order items: ' + error);
            }
        });
    });

    // When the user clicks the "Save Changes" button, get new order then send it to the server.
    $('#saveOrder').click(function(){
        let order = [];
        $('#sortable li').each(function(index){
            order.push({
                id_home: $(this).data('id'),
                display_order: index + 1
            });
        });
        $.ajax({
            url: "<?= site_url('content/update_order'); ?>",
            type: "POST",
            data: { order: JSON.stringify(order) },
            success: function(response){
                alert('Order updated successfully!');
                location.reload();
            },
            error: function(xhr, status, error){
                alert('An error occurred: ' + error);
            }
        });
    });
</script>

</body>

</html>
