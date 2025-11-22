<html>
<head>
    <title>Soal 3: Komentar pada PHP</title>
</head>
<body>

<h1>Contoh Komentar pada PHP</h1>

<?php
// Ini adalah komentar satu baris
echo "Baris ini tidak dikomentari<br>";

# Ini juga komentar satu baris (style Unix)
echo "Komentar # pun bisa digunakan<br>";

/*
Ini adalah komentar
banyak baris
yang bisa
menjelaskan
sesuatu secara puuanjang
*/
echo "Komentar multiline gak dieksekusi<br>";

// Kamu juga bisa komen bagian dari kode
$x = 5 /* + 15 */ + 5;
echo "Nilai x adalah: $x<br>"; // Outputnya nanti 10, karena +15 dikomen

?>

</body>
</html>