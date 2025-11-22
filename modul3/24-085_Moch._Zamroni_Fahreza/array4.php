<?php
$height = array("Andy"=>"176", "Barry"=>"165", "Charlie"=>"170");

foreach($height as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

echo "<br><br>";
// 4.1
// ini nambah data
$injectData = [
  "Dio" => "180",
  "Eka" => "172",
  "Fajar" => "169",
  "Gilang" => "174",
  "Hasan" => "178"
];
foreach ($injectData as $key => $value) {
  $height[$key] = $value;
}

// nampilim
foreach($height as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

// 4.2
echo "<br><br>";
$weight = array("nama" => "Afdres", "kelas" => "Tgresda", "asal" => "Fredgs");

// mengganti sedikit
foreach($weight as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>