<?php
//Mengetahui panjnang array dan mengakses array terindeks menggunakan perulangan loop
echo "<h2>Mengetahui Panjang Array Menggunakan Struktur Perulangan</h2>";

$fruits = array("Avocado", "Blueberry", "Cherry");
$arrlength = count($fruits);

echo "<strong>Isi array fruits awal:</strong><br>";
for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}

//NOMOR 1
echo "<h2>Nomor 1 : Menambahkan Lima Data Baru ke Array Fruits dengan perulangan FOR</h2>";

// Menambahkan lima data baru menggunakan perulangan FOR
for($x = 1; $x <= 5; $x++) {
    $fruits[] = "Buah ke-" . $x;
}

$arrlength = count($fruits);

echo "<strong>Isi array daftarBuah setelah penambahan data:</strong><br>";
for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x] . "<br>";
}

echo "<br>Total data saat ini: <strong>" . $arrlength . "</strong>";
echo "<br>Indeks tertinggi: <strong>" . ($arrlength - 1) . "</strong>";

// Penjelasan
echo "<br><br><em>Tidak perlu mengubah struktur perulangan FOR, karena fungsi count() otomatis menyesuaikan jumlah elemen array setelah penambahan data baru.</em>";

echo "<hr>";

//NOMOR 2
echo "<h2>Nomor 2 : Membuat dan Menampilkan Array daftarSayur</h2>";


$vegies = array("Carrot", "Broccoli", "cucumber");

$jumlahSayur = count($vegies);
echo "<strong>Isi array daftarSayur:</strong><br>";
for($x = 0; $x < $jumlahSayur; $x++) {
    echo $vegies[$x] . "<br>";
}

// Penjelasan
echo "<br><em>Tidak perlu membuat skrip baru. Cukup mengganti nama variabel array karena struktur perulangan FOR dapat digunakan untuk array apa saja.</em>";
?>
