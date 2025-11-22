<?php
$students = array
    (
        array("Alex","220401","0812345678"),
        array("Bianca","220402","0812345687"),
        array("Candice","220403","0812345665"),
    );
    
for ($row = 0; $row < 3; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$students[$row][$col]."</li>";
    }
    echo "</ul>";
}

//soal 3.5.1
// menambahkan 5 databaru ke dalam array
$newStudents = array
    (
    array("Daffa", "220404", "0812345604"),
    array("Diaz", "220405", "0812345605"),
    array("Bila", "220406", "0812345606"),
    array("Hilmy", "220407", "0812345607"),
    array("Mahir", "220408", "0812345608")
    );

$students = array_merge($students, $newStudents);
echo"<h3>Data Students setelah penambahan 5 data baru</h3>";

for ($row = 0; $row < count($students); $row++) {
    echo"<p><b>Row number $row</b></p>";
    echo"<ul>";
    for($col=0;$col< 3; $col++) {
        echo"<li>".$students[$row][$col]."</li>";
    }
    echo"</ul>";
}
    echo"<br>";

//soal 3.5.2
// menampilkan data dalam array bentuk tabel

echo "<h1>Data Students(Tabel)</h1>";
echo "<table border='1'cellpadding='6' cellspacing='0'>";
echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";

foreach($students as $s) {
    echo "<tr>";
    echo "<td>".$s[0]."</td>";
    echo "<td>".$s[1]."</td>";
    echo "<td>".$s[2]."</td>";
    echo "</tr>";
}
echo"</table>";
?>