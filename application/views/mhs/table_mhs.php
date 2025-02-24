<div class="table-responsive">
    <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row dt-row">
            <div class="col-sm-12">
                <table class="table" id="table2" aria-describedby="table1_info">
                    <thead>
                        <tr>
                            <th class="sorting" style="width: 10%">IPK</th>
                            <th class="sorting" style="width: 20%">Skripsi</th>
                            <th class="sorting" style="width: 15%">Status Toga</th>
                            <th class="sorting" style="width: 15%">Status Keuangan</th>
                            <th class="sorting" style="width: 15%">Status Pembayaran Toga</th>
                            <th class="sorting" style="width: 25%">Status Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($mahasiswa)): ?>
                            <tr>
                                <td class="align-middle"><?php echo $mahasiswa['ipk']; ?></td>
                                <td class="align-middle"><?php echo $mahasiswa['skripsi']; ?></td>
                                <td class="align-middle">
                                    <span class="badge <?php echo $mahasiswa['ambil_toga'] == 1 ? 'bg-success' : 'bg-warning'; ?>">
                                        <?php echo $mahasiswa['ambil_toga'] == 1 ? 'Sudah Ambil' : 'Belum Ambil'; ?>
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
                                            $statusClass = 'bg-info';
                                            $statusText = 'Sedang di proses';
                                            break;
                                        case 1:
                                            $statusClass = 'bg-success';
                                            $statusText = 'Disetujui';
                                            break;
                                        case 2:
                                            $statusClass = 'bg-danger';
                                            $statusText = 'Ditolak Harap Upload Ulang Foto dengan Almet';
                                            break;
                                        case 3:
                                            $statusClass = 'bg-danger';
                                            $statusText = 'Ditolak Harap Upload Ulang Dengan Foto Keluarga';
                                            break;
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