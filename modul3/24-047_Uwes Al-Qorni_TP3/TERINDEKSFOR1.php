<?php

//1.
$Lfruits = array("Avocado", "Blueberry", "Cherry");

// menambahkan lima data baru ke array
array_push($Lfruits, "Mango", "Strawberry", "Durian", "Apple", "Banana");

// mengetahui panjang array
$arrlength = count($Lfruits);

// menampilkan seluruh isi array menggunakan perulangan for
for($x = 0; $x < $arrlength; $x++) {
    echo "Indeks ke-$x = $Lfruits[$x]<br>";
}

echo "<hr>";

//2.
$Lvegies = array("Carrot", "Broccoli", "Spinach");

// Mengetahui panjang array
$arrlength = count($Lvegies);

// Menampilkan seluruh isi array menggunakan FOR
for($x = 0; $x < $arrlength; $x++) {
    echo "Indeks ke-$x = $Lvegies[$x]<br>";
}

?>
