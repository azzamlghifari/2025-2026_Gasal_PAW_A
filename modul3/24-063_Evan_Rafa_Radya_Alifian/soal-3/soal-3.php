<?php
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");
echo "Andy is " . $height['Andy'] . " cm tall.";

$height += [
  "Evan" => "165",
  "Rafa" => "150",
  "Radya" => "160",
  "Alifian" => "170",
  "Uqi" => "200"
];

echo "<br>";
echo "Uqi is " . $height['Uqi'] . " cm tall.";

// hapus data pada array assoc
unset($height["Uqi"]);
echo "<br>";
echo "Alifian is " . $height['Alifian'] . " cm tall.";


// membuat array assoc weight
$weight = [
  "Evan" => "70",
  "Rafa" => "50",
  "Radya" => "85",
];

echo "<br>";
echo "Radya's weight is " . $weight['Radya'] . "kg";