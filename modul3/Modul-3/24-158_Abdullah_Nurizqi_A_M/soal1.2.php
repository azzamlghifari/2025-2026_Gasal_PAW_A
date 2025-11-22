<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
$fruits[] = "Apple";
$fruits[] = "Mango";
$fruits[] = "Banana";
$fruits[] = "Apple";
$fruits[] = "Blueberry";

unset($fruits[7]); 

$fruits = array_values($fruits);
$i_high = count($fruits) - 1;

echo "Nilai indeks tertinggi: " . $fruits[$i_high];
?>
