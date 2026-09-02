//memberi tahu server bahwa kode setelahnya akan diproses sebagai PHP.
<?php 
//nama variabel untuk menyimpan kumpulan data siswa.
[ ] → menandakan array.
$data_siswa = [    
    //menyimpan nama siswa.
    ["nama" => "Ahmad Fauzi",      "nilai" => 85],    
    ["nama" => "Bunga Lestari",    "nilai" => 70],    
    ["nama" => "Chandra Wijaya",   "nilai" => 92],    
    ["nama" => "Dewi Sartika",     "nilai" => 78],    
    ["nama" => "Eko Prasetyo",     "nilai" => 65],    
    ["nama" => "Fathur Rahman",    "nilai" => 88],    
    ["nama" => "Gita Permata",     "nilai" => 74],    
    ["nama" => "Hadi Saputra",     "nilai" => 80],    
    ["nama" => "Indah Kusuma",     "nilai" => 95],    
    ["nama" => "Joko Susilo",      "nilai" => 60] 
]; 
//menampilkan judul laporan dengan ukuran heading
echo "<h3>Laporan Evaluasi Hasil Belajar Siswa (KKM = 75)</h3>"; 
//membuat tabel dengan garis
echo "<table border='1' cellpadding='8' style='border-collapse: collapse; width: 100%;'>"; 
//berfungsi untuk membuat dan menampilkan baris judul (header) pada tabel.
echo "<tr style='background:#1e293b; color:white;'><th>No</th><th>Nama Siswa</th><th>Nilai Akhir</th><th>Status Kelulusan</th></tr>"; 

//Menentukan nomor awal siswa, yaitu 1.
$no = 1; 
//Mengambil setiap data siswa satu per satu dari $data_siswa
foreach ($data_siswa as $siswa) { 
    //Mengecek apakah nilai siswa lebih besar atau sama dengan 75.   
    if ($siswa['nilai'] >= 75) {   
        //Jika nilai ≥ 75, statusnya LULUS dan ditampilkan dengan warna hijau.     
        $status = "<span style='color:#059669; font-weight:bold;'>LULUS</span>"; 
       // Jika nilai tidak mencapai 75.   
    } else {        
        //Status siswa menjadi REMEDIAL dan ditampilkan dengan warna merah.
        $status = "<span style='color:#dc2626; font-weight:bold;'>REMEDIAL</span>";    
    }       
    //Membuat baris baru pada tabel.
    echo "<tr>";    
    //Menampilkan nomor urut siswa di tengah. $no++ kemudian menambah
    echo "<td align='center'>" . $no++ . "</td>";  
    //  Menampilkan nama siswa.
    echo "<td>" . $siswa['nama'] . "</td>";    
    //Menampilkan nilai siswa di tengah dan dibuat tebal.
    echo "<td align='center'><strong>" . $siswa['nilai'] . "</strong></td>";   
    // Menampilkan status kelulusan, yaitu LULUS atau REMEDIAL.
    echo "<td>" . $status . "</td>";    
    //Menutup baris tabel.
    echo "</tr>"; 
   // Menutup proses foreach.
} 
//Menutup tabel HTML.
echo "</table>"; 
//Menandai akhir kode PHP.
?>