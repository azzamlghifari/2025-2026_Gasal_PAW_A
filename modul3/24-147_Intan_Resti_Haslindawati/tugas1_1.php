<?php
$Lfruits = array('avocado', 'blueberry', 'cherry');
array_push($Lfruits, "strawberry", "raspberry", "blackberry", "cranberry", "mulbery");

echo "Nilai dengan indeks tertinggi: " . end($Lfruits) . "<br>";
echo "Indeks tertinggi: " . (count($Lfruits) - 1);
?>