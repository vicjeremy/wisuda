<div class="table-responsive" style="max-height: 62vh; overflow-y: scroll; overflow-x: scroll;">
<table id="example1" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Tamu Tambahan</th>
            <th>Pembayaran Tamu Tambahan</th>
            <th>Pembayaran Wisuda</th>
            <th>Pembayaran Toga</th>
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
                <td><?= ucfirst(pembayaran($sts['sts_tamu'])) ?></td>
                <td><?= ucfirst(pembayaran($sts['sts_wsd'])) ?></td>
                <td><?= ucfirst(pembayaran($sts['sts_toga'])) ?></td>
                <td>
                    <form method="post" action="<?php echo base_url('Keu/edit_uang/'.$sts['nim']); ?>" style="display: inline;">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Update Data
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
    </tfoot>
</table>
</div>
