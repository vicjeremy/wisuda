<?php
function toga($status)
{
    $toga = [
        0 => 'Belum Ambil',
        1 => 'Sudah Ambil'
    ];
    return $toga[$status] ?? 'Unknown';
}
