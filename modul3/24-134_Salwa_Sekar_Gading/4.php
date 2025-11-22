<?php
echo "<h2>Array Asosiatif Awal (height)</h2>";

// Array awal dengan pasangan nama dan tinggi badan
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

// Menampilkan array awal
foreach($height as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}
echo "<hr>";

// NOMOR 1: Menambahkan Lima Data Baru ke Array height
echo "<h2>Nomor 1 : Menambahkan Lima Data Baru ke Array height</h2>";

// Menambahkan 5 data baru ke array
$height["Nio"] = 180;
$height["Bhahtyar"] = 168;
$height["Riko"] = 158;
$height["Brilian"] = 172;
$height["Anton"] = 162;

// Menampilkan seluruh data
foreach ($height as $nama => $tinggi) {
    echo "Key = " . $nama . ", Value = " . $tinggi . " cm<br>";
}

echo "<br><strong>Total data saat ini: " . count($height) . "</strong>";
echo "<br><em>Tidak perlu mengubah struktur foreach karena perulangan ini otomatis membaca seluruh elemen array, termasuk data yang baru ditambahkan.</em>";
echo "<hr>";

// NOMOR 2: Membuat Array weight
echo "<h2>Nomor 2 : Membuat Array weight</h2>";

// Membuat array baru untuk weight
$weight = array(
    "Serin" => 70,
    "Billy" => 60,
    "Zidan" => 65
);

// Menampilkan array weight
foreach ($weight as $nama => $berat) {
    echo "Key = " . $nama . ", Value = " . $berat . " kg<br>";
}

echo "<br><em>Tidak perlu membuat skrip baru. Cukup ubah nama variabel array, karena struktur foreach bekerja untuk semua array asosiatif.</em>";
?>
