<?php

session_start();

if(!isset($_SESSION["family"])) {
  $_SESSION["family"] = [];
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $_SESSION["family"][] = [
    "name" => $_POST["nama"],
    "age" => $_POST["umur"],
  ];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>Tambah anggota keluarga</p>
  <form action="" method="post">
    <label for="nama">
      Nama:
      <input type="text" name="nama" id="nama">
    </label><br><br>
    <label for="umur">
      Umur:
      <input type="number" name="umur" id="umur">
    </label><br><br>
    <button type="submit">Kirim</button>
  </form>
  <br><br>
  <table border="1" cellpadding="10">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Tahun Lahir</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!isset($_SESSION["family"]) || $_SESSION["family"] == []): ?>
      <tr>
        <td colspan="2">Data keluarga belum ada</td>
      </tr>
      <?php else: ?>
        <?php foreach ($_SESSION["family"] as $f): ?>
          <tr>
            <td>Nama: <?= $f["name"] ?></td>
            <td>Umur: <?= $f["age"] ?></td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
    </tbody>
  </table>
</body>
</html>