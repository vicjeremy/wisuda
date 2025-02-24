<div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
    <div id="table1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row dt-row">
            <div class="col-sm-12">
                <table class="table table-bordered dataTable no-footer" id="table1" aria-describedby="table1_info" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="table1" style="min-width: 100px;">Nim</th>
                            <th class="sorting" tabindex="0" aria-controls="table1" style="min-width: 150px;">Nama</th>
                            <th class="sorting" tabindex="0" aria-controls="table1" style="min-width: 200px;">Link Gdrive Foto Almet</th>
                            <th class="sorting" tabindex="0" aria-controls="table1" style="min-width: 200px;">Link Gdrive Foto Keluarga</th>
                            <th class="sorting" tabindex="0" aria-controls="table1" style="min-width: 100px;">Status</th>
                            <th style="min-width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($status as $sts): ?>
                            <tr>
                                <td><?php echo $sts['nim']; ?></td>
                                <td><?php echo $sts['nama']; ?></td>
                                <td>
                                    <a href="<?= strpos($sts['foto_almet'], 'http') === 0 ? $sts['foto_almet'] : 'https://' . $sts['foto_almet'] ?>"
                                        target="_blank">
                                        <?= $sts['foto_almet'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= strpos($sts['foto_keluarga'], 'http') === 0 ? $sts['foto_keluarga'] : 'https://' . $sts['foto_keluarga'] ?>"
                                        target="_blank">
                                        <?= $sts['foto_keluarga'] ?>
                                    </a>
                                </td>
                                <td><?= ucfirst(foto($sts['sts_foto'])) ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm editStatus" data-toggle="modal"
                                        data-target="#editStatusModal" data-nim="<?php echo $sts['nim']; ?>"
                                        data-status="<?php echo $sts['sts_foto']; ?>">
                                        Edit Status
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
