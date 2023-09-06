<?php
$kategori = 'Hewan';

switch ($kategori) {
    case 'elektronik':
        echo "Tampilkan buku elektronik.";
        break;
    case 'fashion':
        echo "Tampilkan buku Hewan.";
        break;
    case 'olahraga':
        echo "Tampilkan buku resep.";
        break;
    default:
        echo "Kategori buku tidak valid";
}
