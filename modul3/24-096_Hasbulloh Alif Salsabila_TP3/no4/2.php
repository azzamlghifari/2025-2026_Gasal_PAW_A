<?php
// Membuat array baru diisi 3 buah data
$weight = array("Buku" => "20", "Kardus" => "80", "Papan" => "120");
// Menampilkan seluruh data dengan perulangan for (hanya modifikasi)
foreach ($weight as $x => $x_value){
    echo "Key: " . $x . " value: " . $x_value;
    echo "<br>";
};
echo "<br>";
?>