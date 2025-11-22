<?php
$fruits = array("Avocado", "Blueberry", "Cherry");
$fruits[] = "Apple";
$fruits[] = "Mango";
$fruits[] = "Banana";
$fruits[] = "Apple";
$fruits[] = "Blueberry";
$i_high =count($fruits)-1;


echo "indeks tertinggi ". $i_high . "<br>";
echo "niali indeks tertinggi ". $fruits[$i_high];
?>
