<?php
// DATABASE VOUCHER VERSI 2.0
$voucherDb = [
    [
        "kode" => "RPLJUARA",
        "potongan" => 50000,
        "min_belanja" => 150000,
        "kuota" => 10
    ],
    [
        "kode" => "HEMATTERUS",
        "potongan" => 20000,
        "min_belanja" => 50000,
        "kuota" => 0
    ],
    [
        "kode" => "KILAT",
        "potongan" => 10000,
        "min_belanja" => 20000,
        "kuota" => 50
    ]
];

// Mengecek apakah tombol ditekan
if (isset($_POST['cek'])) {

    // menerima input dari form html
    $kodeInput = strtoupper($_POST['kode']);
    $totalBelanja = $_POST['total_belanja'];

    //variabel bendera
    $ditemukan = false;

    // looping: pencarian linear
    foreach ($voucherDb as $voucher) {

        // Cek apakah kode voucher ada
        if ($voucher['kode'] == $kodeInput) {

            $ditemukan = true;

            // Nested If: cek kuota
            if ($voucher['kuota'] > 0) {

                // Cek minimal belanja
                if ($totalBelanja >= $voucher['min_belanja']) {

                    // Semua syarat terpenuhi
                    $totalBayar = $totalBelanja - $voucher['potongan'];

                    echo "Voucher berhasil digunakan!<br>";
                    echo "Potongan: Rp " . number_format($voucher['potongan'], 0, ',', '.') . "<br>";
                    echo "Total Bayar Akhir: Rp " . number_format($totalBayar, 0, ',', '.');

                } else {
                    echo "Minimal belanja tidak terpenuhi.";
                }

            } else {
                echo "Maaf, Kuota voucher habis.";
            }

            break;
        }
        
    }

    // Jika kode tidak ditemukan
    if (!$ditemukan) {
        echo "Voucher tidak valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Database Voucher</title>
</head>
<body>

    <h2>Form Voucher</h2>

    <form method="post">
        <label>Kode Voucher:</label>
        <input type="text" name="kode" required>

        <br><br>

        <label>Total Belanja (Rp):</label>
        <input type="number" name="total_belanja" required>

        <br><br>

        <button type="submit" name="cek">Cek Voucher</button>
    </form>

</body>
</html>