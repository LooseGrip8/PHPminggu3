<?php
$nilai = 45;

if ($nilai >= 90) {
    $grade = 'S';
} elseif ($nilai >= 80) {
    $grade = 'A';
} elseif ($nilai >= 70) {
    $grade = 'B';
} elseif ($nilai >= 60) {
    $grade = 'C';
} elseif ($nilai >= 50) {
    $grade = 'D';
} elseif ($nilai >= 40) {
    $grade = 'E';
} else {
    $grade = 'f';
}

echo "Grade Anda adalah: $grade";
