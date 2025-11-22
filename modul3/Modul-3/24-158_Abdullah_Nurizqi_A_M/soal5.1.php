<?php
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665"),
);

$new_students = array(
    array("nana", "220111", "0812345111"),
    array("nini", "220222", "0812345222"),
    array("nunu", "220333", "0812345333"),
    array("tata", "220444", "0812345444"),
    array("titi", "220555", "0812345555"),
);

foreach ($new_students as $ns) {
    $students[] = $ns;
}

for ($row = 0; $row < count($students); $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < count($students[$row]); $col++) {
        echo "<li>" . $students[$row][$col] . "</li>";
    }
    echo "</ul>";
}
?>
