<?php
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");
$height += [
  "Evan" => "165",
  "Rafa" => "150",
  "Radya" => "160",
  "Alifian" => "170",
  "Uqi" => "200"
];

foreach ($height as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}