<?php
$produk = [
    "Kulkas" => 2000000,
    "Kipas" => 300000,
    "Laptop" => 8000000,
    "Sepeda" => 12000000
];
foreach ($produk as $p => $val){
    echo "Produk ". $p. " - Seharga Rp.". $val;
    echo "<br>";
}
?>