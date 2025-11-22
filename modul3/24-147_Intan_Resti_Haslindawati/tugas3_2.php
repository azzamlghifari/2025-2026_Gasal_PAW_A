<?php
$Lheight = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");
$Lheight += array("Dian" => "160", "Melia" => "172", "Arya" => "168", "Aries" => "174", "Alisha" => "169");

unset($Lheight["Alisha"]);
$keys = array_keys($Lheight);
$lastKey = end($keys);
echo "Indeks terakhir setelah dihapus: $lastKey, Nilai: " . $Lheight[$lastKey];
?>
