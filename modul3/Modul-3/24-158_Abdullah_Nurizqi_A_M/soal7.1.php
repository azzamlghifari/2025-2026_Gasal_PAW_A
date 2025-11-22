<?php
$produk = [
    "bolpen" => 3000,
    "buku" => 5000,
    "pensil" => 1000,
];
foreach ($produk as $p => $val){
    echo "Produk ". $p. " - Seharga Rp.". $val;
    echo "<br>";
}
?>