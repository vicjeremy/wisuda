<div class="table-responsive" style="max-height: 62vh; overflow-y: scroll; overflow-x: scroll; ">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>IPK</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $value): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $value['nim']; ?></td>
                    <td><?php echo $value['nama']; ?></td>
					<td><?php echo $value['lok_lahir']; ?></td>
                    <td><?php echo convert_date_format($value['tgl_lahir']); ?></td>
                    <td><?php echo $value['fakultas']; ?></td>
                    <td><?php echo $value['prodi']; ?></td>
                    <td><?php echo $value['ipk']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal"
                            data-nim="<?php echo $value['nim']; ?>" data-nama="<?php echo $value['nama']; ?>"
                            data-tgl_lahir="<?php echo date_to_html($value['tgl_lahir']); ?>"
                            data-fakultas="<?php echo $value['fakultas']; ?>" data-prodi="<?php echo $value['prodi']; ?>"
                            data-ipk="<?php echo $value['ipk']; ?>">
                            Edit
                        </button>
                    </td>
                    <td>
                        <a href="<?php echo base_url(); ?>akd/delete/<?php echo $value['nim']; ?>"
                            class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

