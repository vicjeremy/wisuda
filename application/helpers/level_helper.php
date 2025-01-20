<?php
function get_level_name($level)
{
    $levels = [
        1 => 'Admin',
        2 => 'Akademik',
        3 => 'Keuangan',
        4 => 'Toga',
        5 => 'Foto',
        6 => 'Mahasiswa'
    ];
    return $levels[$level] ?? 'Unknown';
}
