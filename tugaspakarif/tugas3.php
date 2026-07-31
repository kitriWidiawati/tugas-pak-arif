<!DOCTYPE html>
<html>
<head><title>Simulasi Lampu Lalin</title></head>
<body>
<h2>Simulasi Lampu Lalu Lintas</h2>
<form method="POST">
    Masukkan Kode: 
    <select name="kode">
        <option value="1">1 - Merah</option>
        <option value="2">2 - Kuning</option>
        <option value="3">3 - Hijau</option>
    </select>
    <button type="submit" name="kirim">Cek</button>
</form>

<?php
if(isset($_POST['kirim'])){
    $kode = $_POST['kode'];

    if ($kode == 1) {
        $pesan = "Lampu MERAH: BERHENTI! ";
        $warna = "red";
    } elseif ($kode == 2) {
        $pesan = "Lampu KUNING: HATI-HATI! ";
        $warna = "yellow";
    } elseif ($kode == 3) {
        $pesan = "Lampu HIJAU: SILAHKAN JALAN! ";
        $warna = "green";
    } else {
        $pesan = "Kode Salah!";
        $warna = "gray";
    }

    echo "<hr>";
    echo "<h3 style='color:$warna;'>$pesan</h3>";
}
?>
</body>
</html>