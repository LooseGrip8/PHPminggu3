<?php
$username = "Thoriq";
$password = "LooseGrip8";

$truename = "Thoriq";
$truepass = "Loosegrip8";

if ($username == $truename && $password == $truepass) {
    echo "<h1>";
    echo "Halo " . $username;
    echo "</h1>";
} else {
    echo "<h1>";
    echo "Siapa Kamu!?";
    echo "</h1>";
}
