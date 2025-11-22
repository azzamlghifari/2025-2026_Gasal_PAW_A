<?php
$Lstudents = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665"),
    array("Daniel", "220404", "0812345644"),
    array("Ella", "220405", "0812345623"),
    array("Fiona", "220406", "0812345699"),
    array("George", "220407", "0812345600"),
    array("Hanna", "220408", "0812345611")
);

echo "<h3>Data Mahasiswa</h3>";
echo "<table border='1' cellpadding='6' cellspacing='0'>";
echo "<tr style='background-color:#f2f2f2;'>
        <th>No</th>
        <th>Name</th>
        <th>NIM</th>
        <th>Mobile</th>
      </tr>";

for ($row = 0; $row < count($Lstudents); $row++) {
    echo "<tr>";
    echo "<td>" . ($row + 1) . "</td>";
    for ($col = 0; $col < 3; $col++) {
        echo "<td>" . $Lstudents[$row][$col] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>

