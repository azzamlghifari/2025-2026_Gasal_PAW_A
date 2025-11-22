<?php
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);
for ($row = 0; $row < 3; $row++){
    echo "<p><b>Row number $row</b><p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>". $students[$row][$col]. "</li>";
    };
    echo "</ul>";
};

// ==== Implementasi 1 ====
echo "Implementasi 1";
echo "<br>";
// Menambah 5 data baru dalam array
$new_students = array("Andin", "220404", "0812345777");
$students[] = $new_students;
$new_students = array("Anggun", "220405", "0812345888");
$students[] = $new_students;
$new_students = array("Bidin", "220406", "0812345999");
$students[] = $new_students;
$new_students = array("Icha", "220407", "0812345000");
$students[] = $new_students;
$new_students = array("Agustin", "220408", "0812345111");
$students[] = $new_students;

// ==== Implementasi 2 ====
echo "Implementasi 2";
echo "<br>";
// Menampilkan dalam bentuk tabel
echo "<table border='1'>";
echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";
foreach ($students as $s){
    echo "<tr>";
    foreach ($s as $val){
        echo "<td>". $val. "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>