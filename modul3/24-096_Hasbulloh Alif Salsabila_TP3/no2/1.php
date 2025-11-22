<?php
// Menambahkan 5 data baru menggunakan FOR
for ($i = 0; $i < 5; $i++){
    $fruits[] = "data buah ke- " . ($i+1);
};
// Menampilkan panjang atau jumlah data pada array
echo "Panjang Array setelah di tambah 5 data baru: ". count($fruits);
echo "<br>";
// Menampilkan seluruh data dalam array menggunakan struktur perulangan 
$arrlength = count($fruits);
for ($x = 0; $x < $arrlength; $x++){
    echo $fruits[$x];
    echo "<br>";
};
echo "<br>";
?>