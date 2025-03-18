<div class="table-responsive" style="max-height: 62vh; overflow-y: scroll; overflow-x: scroll; ">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title text-primary mb-3">Tahun Lulus</h6>
                <div id="thnLulusFilter" class="d-flex flex-wrap gap-3">
                    <!-- Filled dynamically by AJAX -->
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title text-primary mb-3">Program Studi</h6>
                <div id="prodiFilter" class="d-flex flex-wrap gap-3">
                    <?php 
                    $prodi = [
                        'Sistem Informasi',
                        'Teknologi Pangan',
                        'Managemen Informasi Kesehatan',
                        'Managemen',
                        'Akuntansi', 
                        'Psikologi',
                        'Pendidikan Bahasa Inggris'
                    ];
                    foreach($prodi as $p): ?>
                    <div class="form-check">
                        <input class="form-check-input prodi-checkbox" type="checkbox" value="<?= $p ?>" id="prodi_<?= str_replace(' ', '_', $p) ?>">
                        <label class="form-check-label" for="prodi_<?= str_replace(' ', '_', $p) ?>">
                            <?= $p ?>
                        </label>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
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
                <th>Tahun Lulus</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="mhsTableBody">
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
                    <td><?php echo $value['thn_lulus']; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal"
                            data-nim="<?php echo $value['nim']; ?>" data-nama="<?php echo $value['nama']; ?>"
                            data-tgl_lahir="<?= date('Y-m-d', strtotime($mhs['tgl_lahir'])); ?>"
                            data-fakultas="<?php echo $value['fakultas']; ?>" data-prodi="<?php echo $value['prodi']; ?>"
                            data-ipk="<?php echo $value['ipk']; ?>" data-thn_lulus="<?php echo $value['thn_lulus']; ?>">
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function () {
    // Load tahun lulus saat halaman dimuat
    loadTahunLulus();

    // Event listener untuk perubahan pada checkbox tahun lulus
    $(document).on("change", ".thn-checkbox", function () {
        loadMahasiswa();
    });

    // Event listener untuk perubahan pada checkbox program studi
    $(document).on("change", ".prodi-checkbox", function () {
        loadMahasiswa();
    });

    function loadTahunLulus() {
        $.ajax({
            url: "<?php echo base_url('Akd/get_tahun_lulus'); ?>",
            type: "GET",
            dataType: "json",
            success: function (response) {
                var filterDiv = $("#thnLulusFilter");
                filterDiv.empty();

                if (response && response.length > 0) {
                    $.each(response, function (index, tahun) {
                        filterDiv.append('<div class="form-check">' +
                            '<input class="form-check-input thn-checkbox" type="checkbox" value="' + tahun.thn_lulus + '" id="thn_' + tahun.thn_lulus + '">' +
                            '<label class="form-check-label" for="thn_' + tahun.thn_lulus + '">' + tahun.thn_lulus + '</label>' +
                            '</div>');
                    });
                } else {
                    filterDiv.html('<p>Tidak ada data tahun lulus</p>');
                }
                
                // Setelah memuat tahun, load data mahasiswa pertama kali
                loadMahasiswa();
            },
            error: function () {
                console.log("Error loading tahun lulus");
                $("#thnLulusFilter").html('<p class="text-danger">Error loading data</p>');
                loadMahasiswa(); // Tetap mencoba load data
            }
        });
    }

    function loadMahasiswa() {
        var thn_lulus = [];
        $(".thn-checkbox:checked").each(function () {
            thn_lulus.push($(this).val());
        });

        var prodi = [];
        $(".prodi-checkbox:checked").each(function () {
            prodi.push($(this).val());
        });

        console.log("Filter Tahun Lulus:", thn_lulus); // Debugging
        console.log("Filter Prodi:", prodi); // Debugging

        $.ajax({
            url: "<?php echo base_url('Akd/get_mahasiswa_by_filter'); ?>",
            type: "POST",
            data: { thn_lulus: thn_lulus, prodi: prodi },
            dataType: "json",
            success: function (response) {
                var tbody = $("#mhsTableBody");
                tbody.empty();

                if (response && response.length > 0) {
                    $.each(response, function (index, mhs) {
                        var row = "<tr>";
                        row += "<td>" + (index + 1) + "</td>";
                        row += "<td>" + mhs.nim + "</td>";
                        row += "<td>" + mhs.nama + "</td>";
                        row += "<td>" + mhs.lok_lahir + "</td>";
                        row += "<td>" + mhs.tgl_lahir + "</td>";
                        row += "<td>" + mhs.fakultas + "</td>";
                        row += "<td>" + mhs.prodi + "</td>";
                        row += "<td>" + mhs.ipk + "</td>";
                        row += "<td>" + mhs.thn_lulus + "</td>";
                        row += "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#editModal' ";
                        row += "data-nim='" + mhs.nim + "' data-nama='" + mhs.nama + "' data-tgl_lahir='" + mhs.tgl_lahir + "' ";
                        row += "data-fakultas='" + mhs.fakultas + "' data-prodi='" + mhs.prodi + "' data-ipk='" + mhs.ipk + "' data-thn_lulus='" + mhs.thn_lulus + "'>Edit</button></td>";
                        row += "<td><a href='<?php echo base_url(); ?>akd/delete/" + mhs.nim + "' class='btn btn-danger'>Delete</a></td>";
                        row += "</tr>";
                        tbody.append(row);
                    });
                } else {
                    tbody.html('<tr><td colspan="11" class="text-center">Tidak ada data yang sesuai</td></tr>');
                }
            },
            error: function () {
                console.error("AJAX Error: gagal memuat data");
                $("#mhsTableBody").html('<tr><td colspan="11" class="text-center text-danger">Gagal memuat data</td></tr>');
            }
        });
    }
});

</script>
