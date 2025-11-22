<?php 

$fruits = array('Avocado', 'Bluebarry', 'Cherry');
$arrlength = count($fruits);

for ($x = 0; $x < $arrlength; $x++) {
  echo $fruits[$x];
  echo "<br>";
}
echo "<br>";

// 2.1
// =============================================================
$injectData = array("Durian", "Elderberry", "Fig", "Grape", "Honeydew");
for ($i = 0; $i < count($injectData); $i++) {
  $fruits[] = $injectData[$i];
}

$arrlength = count($fruits);
echo "Jumlah data dalam array Lfruits saat ini: " . $arrlength . "<br><br>";

for ($x = 0; $x < $arrlength; $x++) {
  echo $fruits[$x] . "<br>";
}


echo "<br>";


// 2.2
// =============================================================
$lvegies = array("Manusia", "Hewan", "Tuhan");
$lvegiesLength = count($lvegies);

for ($x = 0; $x < $lvegiesLength; $x++) {
  echo $lvegies[$x];
  echo "<br>";
}

?>