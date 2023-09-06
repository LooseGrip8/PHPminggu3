<?php

$Kuota = 10;
$UkuranDownload = 15;

if ($pesanan <= $Kuota) {
    echo "Kuota tersedia. Silakan download.";
} else {
    echo "Maaf, sisa kuota tidak mencukupi.";
}
