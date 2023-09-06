<?php
$Suhu_badan = 25;

if ($Suhu_badan < 22) {
    $kategori = 'Dingin';
} elseif ($Suhu_badan >= 23 && $Suhu_badan < 30) {
    $kategori = 'Normal';
} elseif ($Suhu_badan >= 31 && $Suhu_badan < 35) {
    $kategori = 'Panas';
} else {
    $kategori = 'Panas Tinggi';
}

echo "Suhu tubuh anda: $kategori";
