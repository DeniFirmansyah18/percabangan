<?php

$tinggi = 180;

if ($tinggi > 180) {
    $predikat = "Sangat Tinggi";
} elseif ($tinggi > 170) {
    $predikat = "Tinggi";
} elseif ($tinggi > 165) {
    $predikat = "Rata rata";
} elseif ($tinggi > 160) {
    $predikat = "Pendek";
} elseif ($tinggi > 155) {
    $predikat = "Pendek";
} else {
    $predikat = "Sangat pendek";
}

echo "Tinggi anda: $tinggi<br>";
echo "Predikat: $predikat";

?>