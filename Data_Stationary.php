<?php

$ATK = array(
    array("nama" => "Pensil", "warna" => "Merah", "harga" => 5000),
    array("nama" => "Bolpoin", "warna" => "Oranye", "harga" => 3000),
    array("nama" => "Buku Tebal", "warna" => "Hijau", "harga" => 7000),
    array("nama" => "Buku Tipis", "warna" => "Kuning", "harga" => 2000)
);


foreach ($ATK as $ATK) {
    echo "ATK: " . $ATK["nama"] . "<br>";
    echo "Warna: " . $ATK["warna"] . "<br>";
    echo "Harga: Rp." . $ATK["harga"] . "<br><br>";
}
