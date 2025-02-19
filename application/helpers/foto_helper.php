<?php
function foto($status)
{
	$foto = [
		0 => 'Belum Upload Foto',
		1 => 'Sedang Diperiksa',
		2 => 'Disetujui',
		3 => 'Ditolak, Silahkan Upload Ulang Foto Almet',
		4 => 'Ditolak, Silahkan Upload Ulang Foto Keluarga',
		5 => 'Ditolak, Silahkan Upload Ulang Foto Almet dan Keluarga',
	];
	return $foto[$status] ?? 'Unknown';
}
