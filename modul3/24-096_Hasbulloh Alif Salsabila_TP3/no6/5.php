<?php
echo "Implementasi array_filter()";
echo "<br>";
$filterbrandCar = array_filter($brandCar, function($value){ //menampilkan yang valuenya > 6
    return strlen($value) > 6;
});
print_r($filterbrandCar);
?>