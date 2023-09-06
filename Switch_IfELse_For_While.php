<?php
$waktu = 4;

echo "CONTOH IF ELSE <br>";
if ($waktu > 4) {
    echo "Selamat mie instan anda sudah selesai <br>";
} else {
    echo "Maaf mie instan anda masih keras  <br>";
};

echo "CONTOH SWITCH <br>";
switch ($waktu) {
    case 5:
        echo "Nilai yang dipilih 5 <br>";
        break;
    case 4:
        echo "Nilai yang dipilih 4 <br>";
        break;
}

echo "CONTOH FOR <br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Looping FOR ke : " . $i . "<br>";
}

echo "CONTOH WHILE <br>";
$j = 1;
while ($j <= 7) {
    echo "Looping While ke : " . $j . "<br>";
    $j++;
}
