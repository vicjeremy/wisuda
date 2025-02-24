<div class="table-responsive">
    <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row dt-row">
            <div class="col-sm-12">
                <table class="table dataTable no-footer" id="table1" aria-describedby="table1_info">
                    <thead>
                        <tr>
                            <th>Nim</th>
                            <th>Jubah</th>
                            <th>Topi</th>
                            <th>Skecel</th>
                            <th>Samir</th>
                            <th>Logo</th>
                            <th>Selendang</th>
                            <th>Action</th>
                            <th>Print</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($status as $sts): ?>
                            <tr>
                                <td><?= $sts['nim']; ?></td>
                                <td><?= ucfirst(toga($sts['baju'])) ?></td>
                                <td><?= ucfirst(toga($sts['topi'])) ?></td>
                                <td><?= ucfirst(toga($sts['skecel'])) ?></td>
                                <td><?= ucfirst(toga($sts['samir'])) ?></td>
                                <td><?= ucfirst(toga($sts['logo'])) ?></td>
                                <td>
                                    <?= $sts['selendang'] ?>
                                    <?= ($sts['selendang'] !== 'Tidak Dapat') ? ', ' . ucfirst(toga($sts['sts_selendang'])) : '' ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('toga/edit_toga/' . $sts['nim']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm printButton">Print Data</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
