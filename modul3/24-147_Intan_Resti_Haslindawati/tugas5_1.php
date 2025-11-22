<?php
$Lstudents = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665"),
    array("Dian", "220404", "081234522081"),
    array("Melia", "220405", "081234573568"),
    array("Arya", "220406", "08123456826"),
    array("Aries", "220407", "08123459374"),
    array("Alisha", "220408", "08123455639")
);

for ($row = 0; $row < count($Lstudents); $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < count($Lstudents[$row]); $col++) {
        echo "<li>".$Lstudents[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>
