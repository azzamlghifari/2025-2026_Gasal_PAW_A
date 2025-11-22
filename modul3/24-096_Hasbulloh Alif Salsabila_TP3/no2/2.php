<?php
// Membuat array baru vegies di isi 3 buah data
$vegies = array("Kentang", "Kangkung", "Timun");
// Menampilkan seluruh data dengan perulangan for (hanya modifikasi)
$arrlength = count($vegies);
for ($x = 0; $x < $arrlength; $x++){
    echo $vegies[$x];
    echo "<br>";
};
echo "<br>";
?>