<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
$arrlength = count($fruits);

for($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x];
    echo "<br>";
}
echo "<br>";

//soal 3.2.1
//menambahkan 5 buah baru menggunakan perulangan for
$buahbaru = array("Strawberry", "Orange", "Apple", "Pear", "Grape");

echo " 5 buah data di tambahkan : <br>";
for($y = 0; $y < count($buahbaru); $y++) {
    $fruits[] = $buahbaru[$y];
    echo "ditambahkan : " . $buahbaru[$y] . "<br>" ;
}
echo "<br>";

//menampilkan panjang array 
$new_arrlength = count($fruits);
echo " panjang array saat ini : " . $new_arrlength. "<br><br>";

//menampilkan seluruh data array yang sudah ditambahkan menggunakan perulangan for
echo " Semua data yang sudah ditambahkan : <br>";
for($z = 0; $z < $new_arrlength; $z++){
    echo "[" . $z . "] = " . $fruits[$z] . "<br>";
}
echo "<br>";

//soal 3.2.2
//membuat array baru dengan 3 data baru
echo "3 buah data baru : <br>";
$lvegies = array("carrot", "potato", "corn");

$arrlength = count($lvegies);

for ($y = 0; $y < $arrlength; $y++) {
    echo $lvegies[$y];
    echo "<br>";
}
?>