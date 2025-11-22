<?php
echo "<h4>Array Asosiatif Awal (height)</h4>";
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");
echo "Andy is " . $height['Andy'] . " cm tall.";


//NOMOR 1
echo "<h2>Nomor 1 : Menambahkan Lima Data Baru ke Array Lheight</h2>";

$daftarTinggi["Salwa"] = 180;
$daftarTinggi["Sekar"] = 168;
$daftarTinggi["Gading"] = 158;
$daftarTinggi["Gracia"] = 172;
$daftarTinggi["Nisa"] = 162;

echo "<strong>Isi array daftar Tinggi setelah penambahan data:</strong><br>";
foreach ($daftarTinggi as $nama => $tinggi) {
    echo $nama . " = " . $tinggi . " cm<br>";
}

// Mencari elemen terakhir secara manual (tanpa array_key_last)
$namaTerakhir = "";
$tinggiTerakhir = 0;

foreach ($daftarTinggi as $nama => $tinggi) {
    $namaTerakhir = $nama;
    $tinggiTerakhir = $tinggi;
}

echo "<br>Nilai terakhir: <strong>$namaTerakhir = $tinggiTerakhir cm</strong><br>";
echo "<em>Jumlah data saat ini: " . count($daftarTinggi) . "</em>";

echo "<hr>";

//NOMOR 2
echo "<h2>Nomor 2 : Menghapus Satu Data dari Array height</h2>";

// Hapus salah satu data (misal: Gading)
unset($daftarTinggi["Gading"]);

echo "<strong>Isi array daftarTinggi setelah menghapus 'Gading':</strong><br>";
foreach ($daftarTinggi as $nama => $tinggi) {
    echo $nama . " = " . $tinggi . " cm<br>";
}

$namaTerakhir = "";
$tinggiTerakhir = 0;

foreach ($daftarTinggi as $nama => $tinggi) {
    $namaTerakhir = $nama;
    $tinggiTerakhir = $tinggi;
}

echo "<br>Nilai terakhir sekarang: <strong>$namaTerakhir = $tinggiTerakhir cm</strong><br>";
echo "<em>Jumlah data saat ini: " . count($daftarTinggi) . "</em>";

echo "<hr>";


//NOMOR 3
echo "<h2>Nomor 3 : Membuat Array weight</h2>";

$weight = array("Ahmad" => 70, "Alfan" => 60, "Abrisam" => 65);

echo "<strong>Isi array daftarBerat:</strong><br>";
foreach ($weight as $nama => $berat) {
    echo $nama . " = " . $berat . " kg<br>";
}

// Data kedua dari array 
$namaKedua = "";
$beratKedua = 0;
$index = 0;

foreach ($weight as $nama => $berat) {
    if ($index == 1) { // data kedua 
        $namaKedua = $nama;
        $beratKedua = $berat;
        break; 
    }
    $index++;
}
echo "<br>Data kedua dari array daftarBerat: <strong>$namaKedua = $beratKedua kg</strong>";
?>

