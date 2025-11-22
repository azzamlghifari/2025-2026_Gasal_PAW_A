<?php

session_start();

$cond = !isset($_SESSION["fruit"]) && !isset($_SESSION["quantity"]);

if ($cond) {
  $_SESSION["fruit"] = "";
  $_SESSION["quantity"] = 1;    
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $_SESSION["fruit"] = $_POST["menu"];
  $_SESSION["quantity"] = $_POST["quantity"] != "" ? $_SESSION["quantity"] = (int) $_POST["quantity"] : $_SESSION["quantity"] = 1;

  switch (strtolower($_POST["menu"])) {
    case 'pisang':
      $_SESSION["price"] = 25000;
      break;
    case 'mangga':
      $_SESSION["price"] = 10000;
      break;
    case 'pepaya':
      $_SESSION["price"] = 8000;
      break;
    case 'jeruk':
      $_SESSION["price"] = 10000;
      break;
    case 'kelapa':
      $_SESSION["price"] = 15000;
      break;
    case 'melon':
      $_SESSION["price"] = 45000;
      break;
    default:
      break;
  }

  $_SESSION["total_price"] = $_SESSION["price"] * $_SESSION["quantity"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistem Kasir</title>
</head>
<body>
  <h1>Sistem Kasir</h1>
  <p>Toko Sehat Buah - Buahan</p>
  <form action="" method="post">
    <label for="menu">
      Pilih buah:
      <select name="menu" id="menu">
        <option value="Pisang">Pisang</option>
        <option value="Mangga">Mangga</option>
        <option value="Pepaya">Pepaya</option>
        <option value="Jeruk">Jeruk</option>
        <option value="Kelapa">Kelapa</option>
        <option value="Melon">Melon</option>
      </select>
    </label><br><br>
    <label for="quantity">
      Jumlah buah:
      <input type="number" name="quantity" id="quantity">
    </label><br><br>
    <button type="submit">Tambah</button>
  </form>
  <hr>
  <?php if ($cond): ?>
    <p>Anda belum menambahkan buah!</p>
  <?php else: ?>
    <table border="1" cellpadding="10">
      <thead>
        <tr>
          <th>Nama Buah</th>
          <th>Harga</th>
          <th>Quantity</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $_SESSION["fruit"] ?></td>
          <td><?= $_SESSION["price"] ?></td>
          <td><?= $_SESSION["quantity"] ?></td>
        </tr>
        <tr>
          <td colspan="2">Total harga</td>
          <td>Rp. <?= $_SESSION["total_price"] ?></td>
        </tr>
      </tbody>
    </table>
  <?php endif ?>
</body>
</html>