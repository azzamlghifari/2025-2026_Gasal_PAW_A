<html>
<head>
    <title>Soal 5: Deklarasi Variabel</title>
</head>
<body>

<h1>Deklarasi dan Menampilkan Variabel di PHP</h1>

<?php
// Deklarasi variabel
$txt = "Hello World!";
$x = 5;
$y = 10.5;

// Menampilkan variabel
echo "Teks: " . $txt . "<br>";
echo "Angka bulat: " . $x . "<br>";
echo "Angka desimal: " . $y . "<br>";

// Gwbungan string dan variabel
echo "<hr>";
echo "Saya suka belajar di $txt<br>";

// Ubah variabel
$txt = "W3Schools.com";
echo "Sekarang saya suka belajar di $txt!<br>";
?>

</body>
</html>