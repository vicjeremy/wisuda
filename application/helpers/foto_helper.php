<?php
function foto($status)
{
    $foto = [
        'unknown' => 'Belum Upload Foto',
        0 => 'Sedang Diperiksa',
        1 => 'Disetujui',
        2 => 'Ditolak, Silahkan Upload Ulang Foto Almet',
        3 => 'Ditolak, Silahkan Upload Ulang Foto Keluarga',
        4 => 'Ditolak, Silahkan Upload Ulang Foto Almet dan Keluarga',
    ];
    return $foto[$status] ?? 'Unknown';
}
