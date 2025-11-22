<?php
$students = array(
  array("Alex", "220401", "0812345678"),
  array("Bianca", "220402", "0812345687"),
  array("Candice", "220403", "0812345665"),
);

array_push(
  $students,
  ["Evan", "220404", "0812345665"],
  ["Rafa", "220405", "0812345665"],
  ["Radya", "220406", "0812345665"],
  ["Alifian", "220407", "0812345665"],
  ["Uqi", "220408", "0812345665"]
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>
<body>
  <h1>Data Mahasiswa</h1>
  <table border="1" cellpadding="10">
    <thead>
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>No HP</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($row = 0; $row < count($students); $row++): ?>
        <tr>
          <?php for ($col = 0; $col < count($students[$row]); $col++): ?>
            <td><?= $students[$row][$col] ?></td>
          <?php endfor ?>
        </tr>
      <?php endfor ?>
    </tbody>
  </table>
</body>
</html>