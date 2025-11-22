<?php
$fruits = array("Avocado", "Blueberry", "Cherry");

// menambah 5 data baru pada array fruits
array_push($fruits, "Strawbeey", "Orange", "Papaya", "Banana", "Grapes");
$arrlength = count($fruits);

for ($x = 0; $x < $arrlength; $x++) {
  echo $fruits[$x];
  echo "<br>";
}

$vegies = ["Brocolli", "Edamame", "Onion"];

echo "<br>";
for ($x = 0; $x < count($vegies); $x++) {
  echo $vegies[$x];
  echo "<br>";
}