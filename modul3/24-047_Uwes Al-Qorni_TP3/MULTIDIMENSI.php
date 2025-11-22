<?php
$Lstudents = array(
    array("Boy", "942024", "0877787873"),
    array("Kenko", "22737", "0810011999"),
    array("Candy", "2133131", "0824343566"),
    array("Daniel", "782744", "082323232323"),
    array("Endo", "220405", "0812345623"),
    array("Markes", "2424245", "08757455757"),
    array("Gomba", "7676867", "0854648399"),
    array("Romes", "220408", "0812121212")
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

