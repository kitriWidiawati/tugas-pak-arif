<?php
$nama_mhs = "Rina";
$penghasilan_ortu = 4500000;

if ($penghasilan_ortu < 2000000) {
    $golongan = 1;
    $ukt = 500000;
} elseif ($penghasilan_ortu <= 5000000) {
    $golongan = 2;
    $ukt = 1500000;
} elseif ($penghasilan_ortu <= 10000000) {
    $golongan = 3;
    $ukt = 3000000;
} else {
    $golongan = 4;
    $ukt = 5000000;
}

echo "Nama: $nama_mhs <br>";
echo "Golongan UKT: $golongan <br>";
echo "Biaya UKT: Rp" . number_format($ukt) . "/semester";
?>