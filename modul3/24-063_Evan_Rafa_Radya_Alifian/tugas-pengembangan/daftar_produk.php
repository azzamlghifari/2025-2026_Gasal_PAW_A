<?php

$products = [
  ["Mie Goreng", 10000],
  ["Nasi Goreng", 10000],
  ["Mie Goreng Special", 15000],
  ["Nasi Goreng Special", 15000],
  ["Es Teh", 5000],
  ["Teh Hangat", 3000],
  ["Es Jeruk", 5000],
  ["Air Putih", 2000],
];


echo "<b>Daftar Produk:</b><br>";
foreach ($products as $p) {
  echo "Produk: $p[0]<br>Harga: Rp. $p[1]<br><br>";
}