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