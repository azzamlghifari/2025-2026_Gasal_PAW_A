<?php

$Lstudents = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

echo "<b>Array awal Lstudents:</b><br>";
echo "<pre>";
print_r($Lstudents);
echo "</pre>";

// 1. Tambahkan lima data baru ke array Lstudents
array_push($Lstudents,
    array("Daniel", "220404", "0812345601"),
    array("Ella", "220405", "0812345602"),
    array("Felix", "220406", "0812345603"),
    array("Grace", "220407", "0812345604"),
    array("Henry", "220408", "0812345605")
);

echo "<b>Setelah menambah 5 data baru:</b><br>";
echo "<pre>";
print_r($Lstudents);
echo "</pre>";

// 2. Tampilkan seluruh data dalam bentuk tabel HTML
echo "<br><b>Data Lstudents dalam bentuk tabel:</b><br>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Name</th><th>NIM</th><th>Mobile</th></tr>";

// Loop untuk menampilkan tiap baris data mahasiswa
foreach ($Lstudents as $row) {
    echo "<tr>";
    foreach ($row as $col) {
        echo "<td>$col</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>