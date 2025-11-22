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

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>No. HP</th>
      </tr>";

for ($row = 0; $row < count($students); $row++) {
    echo "<tr>";
    echo "<td>" . ($row + 1) . "</td>";
    for ($col = 0; $col < count($students[$row]); $col++) {
        echo "<td>" . $students[$row][$col] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
