// Menandai awal kode PHP.
<?php 
// Menampilkan judul “Generator Kode Tiket Bioskop Studio 1 (A001 - A100)”.
echo "<h3>Generator Kode Tiket Bioskop Studio 1 (A001 - A100)</h3>"; 
// Membuat wadah untuk tiket. display:flex membuat tiket tersusun fleksibel, flex-wrap:wrap membuatnya turun ke baris berikutnya jika sudah penuh, dan gap:5px memberi jarak antar tiket.
echo "<div style='display:flex; flex-wrap:wrap; gap:5px;'>"; 
// Melakukan perulangan dari angka 1 sampai 100.
for ($i = 1; $i <= 100; $i++) {    
    // Membentuk format 3 digit dengan angka 0 di depan  //  
    $nomor_tiket = "A" . str_pad($i, 3, "0", STR_PAD_LEFT);        
    // Membuat tampilan setiap tiket seperti kotak berwarna biru dengan tulisan putih.
    echo "<span style='background:#1e40af; color:white; padding:4px 8px; border-radius:4px; fontsize:11px;'>";    
    // Menampilkan kode tiket yang sudah dibuat.
    echo $nomor_tiket;    
    // Menutup elemen tiket.
    echo "</span> "; 
// Mengakhiri perulangan for.
} 
// Menutup wadah tiket.
echo "</div>"; 
// Menandai akhir kode PHP.
?>