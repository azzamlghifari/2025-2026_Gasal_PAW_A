<?php 
$data = [
  'name' => "Moch. Zamroni Fahreza",
  'nim' => "240411100085",
  'class' => "Pengembangan Aplikasi Web 3A",
  'location' => "Karduluk, Pragaan, Sumenep, Jawa Timur",
];

echo "<table border='1'>";
foreach ($data as $k => $v) {
echo "<tr>";
  echo "<th style='text-transform: capitalize;'>$k</th>";
  echo "<td style='text-transform: capitalize;'>$v</td>";
echo "</tr>";
}
echo "</table>";

?>