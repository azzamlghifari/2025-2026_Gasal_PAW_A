<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
array_push($fruits, "Mango", "Banana", "Watermelon", "Orange", "Guava");
unset($fruits[7]);

$ind_high = count($fruits) - 1;

var_dump($fruits);
echo "<br>";
echo "Nilai indeks tertinggi adalah: " . $fruits[$ind_high];
echo "<br>";
echo "Indeks tertinggi adalah: " . $ind_high;
?>