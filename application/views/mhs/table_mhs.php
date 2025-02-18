<table class="table table-striped dataTable-table" id="table1">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>IPK</th>
            <th>Skripsi</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>Ukuran Toga</th>
            <th>Status Toga</th>
            <th>Foto Almet</th>
            <th>Foto Keluarga</th>
            <th>Tamu</th>
            <th>Status Keuangan</th>
            <th>Status Pembayaran Toga</th>
            <th>Status Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($result)): ?>
            <?php foreach ($result as $value): ?>
                <tr>
                    <td><?php echo $value['nim']; ?></td>
                    <td><?php echo $value['nama']; ?></td>
                    <td><?php echo $value['lok_lahir']; ?></td>
                    <td><?php echo $value['tgl_lahir']; ?></td>
                    <td><?php echo $value['fakultas']; ?></td>
                    <td><?php echo $value['prodi']; ?></td>
                    <td><?php echo $value['ipk']; ?></td>
                    <td><?php echo $value['skripsi']; ?></td>
                    <td><?php echo $value['alamat']; ?></td>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['hp']; ?></td>
                    <td><?php echo $value['size']; ?></td>
                    <td><?php echo $value['ambil_toga'] == 1 ? 'Sudah Ambil' : 'Belum Ambil'; ?></td>
                    <td><?php echo $value['foto_almet']; ?></td>
                    <td><?php echo $value['foto_keluarga']; ?></td>
                    <td><?php echo $value['tamu']; ?></td>
                    <td><?php echo isset($value['sts_keu']) ? ($value['sts_keu'] == 1 ? 'Sudah Lunas' : 'Belum Lunas') : 'Data tidak tersedia'; ?></td>
                    <td><?php echo isset($value['sts_toga']) ? ($value['sts_toga'] == 1 ? 'Sudah Lunas' : 'Belum Lunas') : 'Data tidak tersedia'; ?></td>
                    <td>
                        <?php
                        switch ($value['sts_foto']) {
                            case 0:
                                echo 'Sedang di proses';
                                break;
                            case 1:
                                echo 'Disetujui';
                                break;
                            case 2:
                                echo 'Ditolak Harap Upload Ulang Foto dengan Almet';
                                break;
                            case 3:
                                echo 'Ditolak Harap Upload Ulang Dengan Foto Keluarga';
                                break;
                            case 4:
                                echo 'Ditolak Harap Upload Ulang Semua Foto';
                                break;
                            default:
                                echo 'Status tidak diketahui';
                                break;
                        }
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="19" class="text-center">No data available in table</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>