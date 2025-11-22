<?php
$students = array(
  array("Alex", "220401", "0812345678"),
  array("Bianca", "220402", "0812345687"),
  array("Candice", "220403", "0812345665"),
);

for ($row = 0; $row < 3; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";

  for ($col = 0; $col < 3; $col++) {
    echo "<li>" . $students[$row][$col] . "</li>";
  }
  echo "</ul>";
}

// 5.1
$injectData = array(
  array("Dio", "6586453", "7454376"),
  array("Eka", "9487645", "456312"),
  array("Fajar", "735095", "8920573"),
  array("Gilang", "45327", "23349476"),
  array("Hasan", "0962345", "9723456"),
);
foreach ($injectData as $v) {
  $students[] = $v;
}
var_dump($students);


echo "<br><br>";
// 5.2
echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>NIM</th>";
echo "<th>Mobile</th>";
echo "</tr>";
foreach($students as $v){
  echo "<tr>";
  echo "<td>$v[0]</td>";
  echo "<td>$v[1]</td>";
  echo "<td>$v[2]</td>";
  echo "</tr>";
}
echo "</table>"
?>