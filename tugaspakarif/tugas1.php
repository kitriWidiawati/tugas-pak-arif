
<?php
$uang_jajan = 500000;
$pengeluaran = 480000;
$sisa = $uang_jajan - $pengeluaran;

if ($sisa >= 200000) {
    $status = "Aman, masih banyak ";
} elseif ($sisa >= 50000) {
    $status = "Hati-hati, mulai hemat ";
} else {
    $status = "Boncos! Jangan jajan dulu ";
}

echo "Sisa uang jajan: Rp" . number_format($sisa) . "<br>";
echo "Status: $status";
?>