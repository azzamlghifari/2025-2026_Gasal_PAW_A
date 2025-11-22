<?php
$hewan = ["Ayam", "Bebek", "Ikan", "Sapi"];
$indeks = array_search("Ayam", $hewan);

if ($indeks !== false) {
    echo "Indeks pada 'Ayam' adalah: " . $indeks;
} else {
    echo "'Ayam' tidak ditemukan";
}

echo "<br>";
?>
