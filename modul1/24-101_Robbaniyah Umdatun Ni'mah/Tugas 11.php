<html>
<head>
    <title>Soal 11: Pencarian dalam String</title>
</head>
<body>

<h1>Mencari Posisi Kata dengan strpos()</h1>

<?php
$teks = "Hello world!";
$kata = "world";

echo "Teks: '$teks'<br>";
echo "Mencari kata: '$kata'<br>";
echo "Posisi: " . strpos($teks, $kata) . "<br>";

// Coba cari dia yang tidak ada
$kata2 = "DUIT";
$posisi = strpos($teks, $kata2);
if ($posisi === false) {
    echo "Kata '$kata2' tidak ditemukan.<br>";
} else {
    echo "Posisi kata '$kata2': $posisi<br>";
}
?>

</body>
</html>