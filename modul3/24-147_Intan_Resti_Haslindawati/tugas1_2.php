<?php
$Lfruits = array('avocado', 'blueberry', 'cherry');
array_push($Lfruits, "strawberry", "raspberry", "blackberry", "cranberry", "mulbery");

unset($Lfruits[7]);

echo "Nilai dengan indeks tertinggi: " . end($Lfruits) . "<br>";
echo "Indeks tertinggi: " . (count($Lfruits) - 1);
?>