<!DOCTYPE html>
<html>
<body>

<form method="post">
  Pilih Menu:
  <select name="menu">
    <option value="1">Nasi Goreng - Rp15000</option>
    <option value="2">Mie Goreng - Rp12000</option>
    <option value="3">Ayam Geprek - Rp18000</option>
    <option value="4">Soto - Rp12000</option>
    <option value="5">Es Teh - Rp5000</option>
    <option value="6">Es Jeruk - Rp6000</option>
  </select><br><br>

  Jumlah Beli: <input type="number" name="jumlah" min="1" required><br><br>

  <input type="submit" name="hitung" value="Hitung">
</form>

<?php
$menu = [
  1 => ["nama" => "Nasi Goreng", "harga" => 15000],
  2 => ["nama" => "Mie Goreng",  "harga" => 12000],
  3 => ["nama" => "Ayam Geprek",  "harga" => 18000],
  4 => ["nama" => "Soto",  "harga" => 12000],
  5 => ["nama" => "Es Teh",      "harga" => 5000],
  6 => ["nama" => "Es Jeruk",    "harga" => 6000]
];


if (isset($_POST['hitung'])) {
  $pilih  = $_POST['menu'];
  $jumlah = $_POST['jumlah'];
  $total  = $menu[$pilih]['harga'] * $jumlah;
  

  echo "<h3>Hasil Transaksi:</h3>";
  echo "Menu   : {$menu[$pilih]['nama']}<br>";
  echo "Harga  : Rp{$menu[$pilih]['harga']}<br>";
  echo "Jumlah : $jumlah<br>";
  echo "Total  : Rp$total<br>";
}

?>
</body>
</html>
