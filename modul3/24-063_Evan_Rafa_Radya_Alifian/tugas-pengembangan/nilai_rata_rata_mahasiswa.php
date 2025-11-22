<?php

function getAverageScore($s_arr) {
  return array_sum($s_arr["scores"]) / count($s_arr["scores"]);
}

$students = [
  [
    "name" => "Evan Alifian",
    "scores" => [80, 90, 85]
  ],
  [
    "name" => "Nurhasanah",
    "scores" => [100, 95, 90]
  ],
  [
    "name" => "Eko Ismaryanto",
    "scores" => [90, 80, 70]
  ],
];
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
        <th>Nilai</th>
        <th>Rata - rata nilai</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($row = 0; $row < count($students); $row++): ?>
        <tr>
          <td><?= $students[$row]["name"]; ?></td>
          <td>
            <?php foreach ($students[$row]["scores"] as $score): ?>
              <?= $score ?>,
            <?php endforeach ?>
          </td>
          <td><?= getAverageScore($students[$row]) ?></td>
        </tr>
      <?php endfor ?>
    </tbody>
  </table>
</body>
</html>