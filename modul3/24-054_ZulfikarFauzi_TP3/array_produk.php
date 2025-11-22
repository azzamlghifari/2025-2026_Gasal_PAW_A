<?php
$produk = array(
    "Sabun" => 5000,
    "Shampoo" => 15000,
    "Odol" => 8000,
    "Sikat Gigi" => 7000,
    "Handuk" => 20000
);

echo "<b>Daftar Produk:</b><br>";
foreach ($produk as $nama => $harga) {
    echo $nama . " - Rp" . $harga . "<br>";
}
?>
