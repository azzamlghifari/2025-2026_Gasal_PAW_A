<?php 
function validateNreturnData($id, $default) {
    $val = isset($_POST[$id]) ? $_POST[$id] : $default;
    $result = $val ? $val : "Data $id tidak ditemukan";
    return $result;
}

$data = [
  'name' => validateNreturnData("name", "Moch. Zamroni Fahreza"),
  'nim' => validateNreturnData("nim", "240411100085"),
  'class' => validateNreturnData("class", "Pengembangan Aplikasi Web 3A"),
  'location' => validateNreturnData("location", "Karduluk, Pragaan, Sumenep, Jawa Timur"),
];

echo "<form method='post'>";
foreach ($data as $k => $v) {
  $types = $k === 'nim' ? "number" : "text";
  echo "<label for='$k' style='text-transform: capitalize;'>$k</label>";
  echo "<br>";
  echo "<input type='$types' name='$k' id='$k' placeholder='input $k........' required>";
  echo "<br>";
}
echo "<br>";
echo '<button type="submit">OK</button>';
echo '</form>';

echo "<table border='1'>";
foreach ($data as $k => $v) {
  echo "<tr>";
  echo "<th style='text-transform: capitalize;'>$k</th>";
  echo "<td style='text-transform: capitalize;'>$v</td>";
  echo "</tr>";
}
echo "</table>";
?>