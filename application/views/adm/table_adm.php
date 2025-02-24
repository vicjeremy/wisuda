<div class="table-responsive" style="height: 300px; overflow-y: scroll;">
    <table id="example1" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($status as $sts): ?>
                <tr>
                    <td><?= htmlspecialchars($sts['user']); ?></td>
                    <td><?= htmlspecialchars($sts['pass']); ?></td>
                    <td><?= htmlspecialchars($sts['level']); ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>adm/delete_akn/<?php echo $sts['user']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>