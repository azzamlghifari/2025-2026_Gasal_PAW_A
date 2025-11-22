<?php
$Lheight = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");
$Lheight += array("Dian" => "160", "Melia" => "172", "Arya" => "168", "Aries" => "174", "Alisha" => "169");

$keys = array_keys(array: $Lheight);
$lastKey = end($keys);
echo "indeks terakhir: $lastKey, Nilai: " . $Lheight[$lastKey];
?>
