<?php
echo "Implementasi array_values()";
echo "<br>";
$vitamin = [
    "A" => "Wortel",
    "C" => "Jeruk",
    "D" => "Jamur"
];
$values = array_values($vitamin); //memberikan indeks secara numerik
print_r($values);
?>