//memberi tahu browser bahwa dokumen yang dibuat menggunakan standar HTML5
<!DOCTYPE html> 
//tag html→ menandai awal dokumen HTML.
lang id→ memberi tahu browser dan mesin pencari bahwa bahasa yang digunakan adalah Indonesia.
<html lang="id">
    //bagian kepala dokumen HTML yang berisi informasi tentang halaman web
    <head>
        //menentukan jenis karakter atau encoding yang digunakan oleh halaman HTML. 
        <meta charset="UTF-8">
        //menentukan judul halaman web yang ditampilkan pada tab browser. 
        <title>Studi Kasus 1 - Sistem Kasir Mini</title>
         //menuliskan kode CSS langsung di dalam file HTML. CSS digunakan untuk mengatur tampilan halaman web, seperti warna, ukuran tulisan, posisi, dan bentuk elemen.
        <style> 
        //mengatur ukuran, garis, dan jarak tabel agar terlihat lebih rapi.
        table { width: 100%; border-collapse: collapse; margin-top: 10px; } 
        //sel tabel memiliki garis dan jarak isi agar terlihat lebih rapi.
        th, td { border: 1px solid #cbd5e1; padding: 8px 12px; } 
        //judul tabel memiliki latar biru tua, teks putih, dan rata kiri.
        th { background-color: #0f172a; color: white; text-align: left; } 
        //agar baris total lebih menonjol dan mudah dibedakan dari baris lainnya.
        .total-row { background-color: #e2e8f0; font-weight: bold; } 
        </style> 
    </head> 
    //bagian utama HTML yang berisi semua konten yang akan ditampilkan di halaman web.
    <body> 
        //judul atau subjudul tingkat 2 pada halaman HTML.
        <h2>Sistem Kasir Mini — SMK Mart</h2> 
        //penanda awal kode PHP.
        <?php 
        // Array multidimensi 10 produk //
        $produk = [ 
            ["nama" => "Beras Setra Ramos 5 Kg", "harga" => 74500], 
            ["nama" => "Minyak Goreng Bimoli 2L", "harga" => 35000], 
            ["nama" => "Gula Pasir Gulaku 1 Kg", "harga" => 17500], 
            ["nama" => "Teh Celup Sosro Box", "harga" => 11000], 
            ["nama" => "Kopi Kapal Api Spesial", "harga" => 14500], 
            ["nama" => "Indomie Goreng Spesial", "harga" => 3100], 
            ["nama" => "Susu Kental Manis Indomilk","harga" => 12500], 
            ["nama" => "Sabun Mandi Lifebuoy", "harga" => 4500], 
            ["nama" => "Shampo Clear Men 160ml", "harga" => 24000], 
            ["nama" => "Pasta Gigi Pepsodent", "harga" => 13500] 
        ]; 
        //penanda akhir kode PHP.
        ?> 
        //berfungsi untuk membuat sebuah tabel pada halaman HTML
        <table> 
            //berfungsi untuk membuat satu baris (row) dalam tabel HTML.
            <tr> 
                //berfungsi untuk membuat header kolom “no” dengan lebar 10% dari tabel.
                <th style="width: 10%;">No</th> 
                //berfungsi untuk membuat judul/header kolom pada tabel.
                <th>Nama Produk</th> 
                //berfungsi untuk membuat header kolom “Harga Satuan (Rp)” dengan lebar 25% dari tabel.
                <th style="width: 25%;">Harga Satuan (Rp)</th> 
                ///berfungsi untuk membuat satu baris (row) dalam tabel HTML.
            </tr> 
            //berfungsi sebagai penanda awal kode PHP.
        <?php 
        //berfungsi untuk membuat variabel $no dan memberikan nilai awal 1.
        $no = 1; 
        //berfungsi untuk membuat variabel $total_harga dengan nilai awal 0.
        $total_harga = 0; 
        
        //berfungsi untuk mengulang atau mengambil setiap data dari array $produk satu per satu.
        foreach ($produk as $item) { 
            //menampilkan tag <tr> ke halaman HTML melalui PHP.
            echo "<tr>";
            //Menampilkan nomor urut (1, 2, 3, dst.) di tengah kolom.
            echo "<td style='text-align:center;'>" . $no++ . "</td>"; 
            //Menampilkan nama produk dari data $item.
            echo "<td>" . $item['nama'] . "</td>"; 
            //Menampilkan harga produk dalam format Rupiah, misalnya Rp 15.000.
            echo "<td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>"; 
            //Menutup baris tabel yang sebelumnya dibuka dengan <tr>
            echo "</tr>"; 
            
            // Akumulasi total //
            $total_harga += $item['harga']; 
        } 
        ?> 
        //membuat baris baru dan menggunakan class
        <tr class="total-row"> 
            //membuat kolom yang digabung menjadi 2 kolom dan teksnya rata kanan.
            <td colspan="2" style="text-align: right;">TOTAL PEMBELIAN:</td> 
            //menampilkan jumlah total harga dalam format Rupiah
            <td>Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></td> 
        </tr> 
    </table> 
</body> 
</html>