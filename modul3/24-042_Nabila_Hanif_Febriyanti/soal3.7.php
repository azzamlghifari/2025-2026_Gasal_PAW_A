<?php
//soal 3.7.1
// Membuat array daftar produk dan harga
$produk = array(
    "Buku" => 5000,
    "Pensil" => 2000,
    "Polpen" => 3000,
    "penghapus" => 1000,
    "penggaris" => 4000
);

// Menampilkan daftar produk dan harga
echo "<h3>Daftar Produk dan Harga</h3>";
foreach ($produk as $nama => $harga) {
    echo "Produk: $nama - Harga: Rp" . number_format($harga, 0, ',', '.') . "<br>";
}

echo "<br>";
//soal 3.7.2
// Array multidimensi: nama dan tiga nilai
$mahasiswa = array(
    array("Diaz", 85, 60, 88),
    array("Bila", 85, 80, 75),
    array("Davina", 95, 85, 80),
    array("Mahir", 60, 75, 80)
);

// Fungsi untuk menghitung rata-rata nilai tiap mahasiswa
function hitungRataRata($data) {
    foreach ($data as $mhs) {
        $nama = $mhs[0];
        $nilai = array_slice($mhs, 1); // ambil nilai saja
        $rata = array_sum($nilai) / count($nilai);
        echo "Nama: $nama - Rata-rata Nilai: " . number_format($rata, 2) . "<br>";
    }
}

// Menampilkan hasil
echo "<h3>Rata-rata Nilai Mahasiswa</h3>";
hitungRataRata($mahasiswa);
?>