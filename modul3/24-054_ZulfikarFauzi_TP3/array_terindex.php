<?php

$Lfruits = array("Alpukat", "Blueberry", "Cherry");

// Tampilkan array awal
echo "<b>Array awal:</b><br>";
print_r($Lfruits);
echo "<br><br>";

// 1.1 Tambahkan 5 data baru ke array Lfruits
array_push($Lfruits, "Durian", "Mangga", "Pepaya", "Jeruk", "Apel");
echo "<b>Setelah menambah 5 data:</b><br>";
print_r($Lfruits);
echo "<br>";

// 1.2 Tampilkan nilai dan indeks tertinggi
$indeks_tertinggi = count($Lfruits) - 1;
echo "<br>Indeks tertinggi sekarang: $indeks_tertinggi";
echo "<br>Nilainya: " . $Lfruits[$indeks_tertinggi];

// 2.1 Hapus satu data tertentu (misalnya Mango)
unset($Lfruits[4]); // menghapus data dengan indeks 4

echo "<br><br><b>Setelah menghapus satu data (Mango):</b><br>";
print_r($Lfruits);

// 2.2 Hitung ulang indeks tertinggi
$indeks_tertinggi_baru = max(array_keys($Lfruits));
echo "<br><br>Indeks tertinggi setelah penghapusan: $indeks_tertinggi_baru";
echo "<br>Nilainya: " . $Lfruits[$indeks_tertinggi_baru];

// 3.1 Buat array baru Lvegies
$Lvegies = array("Carrot", "Broccoli", "Spinach");

// 3.2 Menampilkan data dari Lvegies
echo "<br><br><b>Array Lvegies:</b><br>";
foreach ($Lvegies as $veg) {
    echo $veg . "<br>";
}
?>
