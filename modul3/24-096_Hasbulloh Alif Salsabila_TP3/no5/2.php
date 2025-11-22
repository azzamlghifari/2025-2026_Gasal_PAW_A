<?php
$students = array(
    array("Alex","220401","0812345678"),
    array("Bianca","220402","0812345687"),
    array("Candice","220403","0812345665"),
    );

// Menambah 5 data baru dalam array
$new_students = array("Hasbul", "220004", "0812345444");
$students[] = $new_students;
$new_students = array("Hanifah", "220440", "0812345666");
$students[] = $new_students;
$new_students = array("Yasmin", "220444", "0812345888");
$students[] = $new_students;
$new_students = array("Aisyah", "220404", "0812345222");
$students[] = $new_students;
$new_students = array("Haura", "220044", "0812345111");
$students[] = $new_students;

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