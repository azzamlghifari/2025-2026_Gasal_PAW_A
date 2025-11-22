<?php

$score = 0;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $score = $_POST["nilai"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grade Nilai</title>
</head>
<body>
  <h1>Grade Nilai</h1>
  <form action="" method="post">
    <label for="nama_mhs">
      Nama Mahasiswa:
      <input type="text" name="nama_mhs" id="nama_mhs" required>
    </label><br><br>
    <label for="matkul">
      Mata Kuliah:
      <input type="text" name="matkul" id="matkul" required>
    </label><br><br>
    <label for="nilai">
      Nilai:
      <input type="number" name="nilai" id="nilai" required>
    </label><br><br>
    <button type="submit">Kirim</button>
  </form>
  <hr>
  <?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?>
    <h2>Hasil grade nilai</h2>
    <p>Mata Kuliah: <?php echo $_POST["nama_mhs"] ?></p>
    <p>Mata Kuliah: <?= $_POST["matkul"] ?></p>
    <?php if ($score >= 90 && $score <= 100): ?>
      <p>Nilai: <?= $score ?> (A)</p>
    <?php elseif ($score >= 80 && $score <= 89): ?>
      <p>Nilai: <?= $score ?> (B)</p>
    <?php elseif ($score >= 70 && $score <= 79): ?>
      <p>Nilai: <?= $score ?> (C)</p>
    <?php elseif ($score >= 60 && $score <= 69): ?>
      <p>Nilai: <?= $score ?> (D)</p>
    <?php elseif ($score > 100): ?>
      <p>Warning: nilai tidak boleh lebih dari 100</p>
    <?php else: ?>
      <p>Nilai: <?= $score ?> (E)</p>
    <?php endif ?>
  <?php endif ?>
</body>
</html>