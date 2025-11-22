<?php

$Lfruits = array("Alpukat", "Jeruk", "Apel");

// Tampilkan array awal
echo "<b>Array awal:</b><br>";
print_r($Lfruits);
echo "<br><br>";

// 1.1 Tambahkan 5 data baru ke array Lfruits menggunakan perulangan FOR
for ($i = 0; $i < 5; $i++) {
    $Lfruits[] = "Buah_" . ($i + 1);    
}

echo "<b>Setelah menambah 5 data:</b><br>";
print_r($Lfruits);
echo "<br>";

// 1.2 Tampilkan panjang array
$jumlah_data = count($Lfruits);
echo "<br>Panjang array Lfruits sekarang: $jumlah_data";

// 1.3 Penjelasan
echo "<br>Tidak perlu mengubah perulangan FOR karena count() otomatis menyesuaikan jumlah data.";

// 2.1 Buat array baru Lvegies berisi 3 data
$Lvegies = array("Wortel", "Bayam", "Kangkung");

// 2.2 Tampilkan seluruh data dari Lvegies menggunakan perulangan FOR
echo "<br><br><b>Isi array Lvegies:</b><br>";
for ($i = 0; $i < count($Lvegies); $i++) {
    echo $Lvegies[$i] . "<br>";
}

// 2.3 Penjelasan
echo "<br>Kode perulangan FOR bisa digunakan kembali dengan sedikit penyesuaian nama variabel saja.";

?>
     