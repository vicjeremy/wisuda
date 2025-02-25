<div class="table-responsive">
    <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row dt-row">
            <div class="col-sm-12">
                <table class="table" id="table2" aria-describedby="table1_info">
                    <thead>
                        <tr>
                            <th class="sorting" style="width: 20%">Status Pengambilan Toga</th>
                            <th class="sorting" style="width: 20%">Status Pembayaran Tamu Tambahan</th>
                            <th class="sorting" style="width: 20%">Status Pembayaran Wisuda</th>
                            <th class="sorting" style="width: 20%">Status Pembayaran Toga</th>
                            <th class="sorting" style="width: 25%">Status Upload Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mahasiswa)): ?>
                            <tr>
								<td class="align-middle">
									<span class="badge <?php echo $mahasiswa['ambil_toga'] == 1 ? 'bg-success' : 'bg-warning'; ?>">
										<?php echo $mahasiswa['ambil_toga'] == 1 ? 'Sudah Ambil' : 'Belum Ambil'; ?>
									</span>
								</td>
								<td class="align-middle">
									<span class="badge <?php 
										switch ($mahasiswa['sts_tamu']) {
											case 0:
												echo 'bg-info';
												break;
											case 1:
												echo 'bg-warning';
												break;
											case 2:
												echo 'bg-success';
												break;
											default:
												echo 'bg-secondary';
										}
									?>">
										<?php 
										switch ($mahasiswa['sts_tamu']) {
											case 0:
												echo 'Tidak ada tamu tambahan';
												break;
											case 1:
												echo 'Belum Lunas';
												break;
											case 2:
												echo 'Sudah Lunas';
												break;
											default:
												echo 'Status tidak diketahui';
										}
										?>
									</span>
								</td>
                                <td class="align-middle">
                                    <span class="badge <?php echo isset($mahasiswa['sts_wsd']) && $mahasiswa['sts_wsd'] == 1 ? 'bg-success' : 'bg-warning'; ?>">
                                        <?php echo isset($mahasiswa['sts_wsd']) ? ($mahasiswa['sts_wsd'] == 1 ? 'Sudah Lunas' : 'Belum Lunas') : 'Data tidak tersedia'; ?>
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <span class="badge <?php echo isset($mahasiswa['sts_toga']) && $mahasiswa['sts_toga'] == 1 ? 'bg-success' : 'bg-warning'; ?>">
                                        <?php echo isset($mahasiswa['sts_toga']) ? ($mahasiswa['sts_toga'] == 1 ? 'Sudah Lunas' : 'Belum Lunas') : 'Data tidak tersedia'; ?>
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <?php
                                    $statusClass = '';
                                    $statusText = '';
                                    switch ($mahasiswa['sts_foto']) {
                                        case 0:
                                            $statusClass = 'bg-warning';
                                            $statusText = 'Belum upload';
                                            break;
                                        case 1:
                                            $statusClass = 'bg-info';
                                            $statusText = 'Sedang diperiksa';
                                            break;
                                        case 2:
                                            $statusClass = 'bg-success';
                                            $statusText = 'Disetujui';
                                            break;
                                        case 3:
                                            $statusClass = 'bg-danger';
                                            $statusText = 'Ditolak Harap Upload Ulang Foto dengan Almet';
                                            break;
                                        case 4:
                                            $statusClass = 'bg-danger';
                                            $statusText = 'Ditolak Harap Upload Ulang Dengan Foto Keluarga';
                                        case 4:
                                            $statusClass = 'bg-danger';
                                            $statusText = 'Ditolak Harap Upload Ulang Semua Foto';
                                            break;
                                        default:
                                            $statusClass = 'bg-secondary';
                                            $statusText = 'Status tidak diketahui';
                                            break;
                                    }
                                    ?>
                                    <span class="badge <?php echo $statusClass; ?>">
                                        <?php echo $statusText; ?>
                                    </span>
                                </td>
                            </tr>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center">No data available in table</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
