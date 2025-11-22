<?php
$Lfruits = array('avocado', 'blueberry', 'cherry');
array_push($Lfruits, "strawberry", "raspberry", "blackberry", "cranberry", "mulbery");
$arrlength = count($Lfruits);

for ($x = 0; $x < $arrlength; $x++) {
    echo $Lfruits[$x];
    echo "<br>";
}
?>
