<?php
function familyName($fname) {
  return "Nama: $fname";
}

function familyAge($fage) {
  return "Umur: $fage";
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
  <table border="1" cellpadding="10">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Tahun Lahir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= familyName("Evan") ?></td>
        <td><?= familyAge(19) ?></td>
      </tr>
      <tr>
        <td><?= familyName("Uqi") ?></td>
        <td><?= familyAge(19) ?></td>
      </tr>
    </tbody>
  </table>
</body>
</html>