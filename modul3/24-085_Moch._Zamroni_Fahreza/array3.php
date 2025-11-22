<?php
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");
echo "Andy is " . $height['Andy'] . " cm tall.";

// 1.1
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

$lastKey = array_key_last($height);
echo "<br><br>";
echo "Nilai terakhir Lheight: " . $lastKey . " = " . $height[$lastKey];

echo "<br><br>";

// 2.2
unset($height["Barry"]);

$lastKey = array_key_last($height);
echo "Setelah hapus Barry, nilai terakhir Lheight: " . $lastKey . " = " . $height[$lastKey];

echo "<br><br>";

// 3.3
$weight = [
  "nama" => "Afdres",
  "kelas" => "Tgresda",
  "asal" => "Fredgs"
];

$values = array_values($weight);
$keys = array_keys($weight);

echo "Data kedua Lweight: " . $keys[1] . " = " . $values[1];
?>