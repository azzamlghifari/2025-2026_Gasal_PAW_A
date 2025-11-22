<?php
// Menambah 5 data baru
$height["Hasbul"] = "170";
$height["Hanifah"] = "162";
$height["Aisyah"] = "159";
$height["Yasmin"] = "158";
$height["Haura"] = "160";
// Menampilkan seluruh data menggunakan for 
foreach ($height as $x => $x_value){
    echo "Key: " . $x . "," . " Value: " . $x_value;
    echo "<br>";
};
?>