<?php
function pembayaran($status)
{
    $pembayaran = [
        0 => 'Belum Bayar',
        1 => 'Lunas'
    ];
    return $pembayaran[$status] ?? 'Tidak ada tamu tambahan';
}



