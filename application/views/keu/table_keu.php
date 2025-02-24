<div class="table-responsive" style="height: 300px; overflow-y: scroll;">
<table id="example1" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Tamu Tambahan</th>
            <th>Pembayaran Wisuda</th>
            <th>Pembayaran Toga</th>
            <th>Pembayaran Tamu Tambahan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($status as $sts): ?>
            <tr>
                <td><?php echo $sts['nim']; ?></td>
                <td><?php echo $sts['nama']; ?></td>
                <td><?php echo $sts['fakultas']; ?></td>
                <td><?php echo $sts['prodi']; ?></td>
                <td><?php echo $sts['tamu']; ?></td>
                <td><?= ucfirst(pembayaran($sts['sts_wsd'])) ?></td>
                <td><?= ucfirst(pembayaran($sts['sts_toga'])) ?></td>
                <td><?= ucfirst(pembayaran($sts['sts_tamu'])) ?></td>
                <td>
                    <a href="<?php echo base_url(); ?>Keu/edit_uang/<?php echo $sts['nim']; ?>"
                        class="button">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Tamu Tambahan</th>
            <th>Pembayaran Wisuda</th>
            <th>Pembayaran Toga</th>
            <th>Pembayaran Tamu Tambahan</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
</div>