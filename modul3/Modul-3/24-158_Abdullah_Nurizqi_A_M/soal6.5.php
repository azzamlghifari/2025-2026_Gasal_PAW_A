<?php
$hewan = ["Ayam", "Bebek", "Ikan", "Sapi"];
$filterhewan = array_filter($hewan, function($value) {
    return strlen($value) > 3;
});
print_r($filterhewan);
?>
