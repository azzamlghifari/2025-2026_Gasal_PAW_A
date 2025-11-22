<html>
<head>
    <title>Soal 9: Jumlah Kata</title>
</head>
<body>

<h1>Menghitung Jumlah Kata dengan str_word_count()</h1>

<?php
$kalimat = "Hello world!";
echo "Kalimat: '$kalimat'<br>";
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";

// Coba kalimat lain
$kalimat2 = "Saya sedang belajar PHP dasar";
echo "Kalimat baru: '$kalimat2' → jumlah kata: " . str_word_count($kalimat2) . "<br>";
?>

</body>
</html>