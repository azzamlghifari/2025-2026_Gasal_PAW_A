<html>
<head>
    <title>Soal 12: Mengganti Text</title>
</head>
<body>

<h1>Mengganti Teks dengan str_replace()</h1>

<?php
$teks = "Hello world!";
echo "Asli: '$teks'<br>";

$baru = str_replace("world", "Dolly", $teks);
echo "Setelah diganti: '$baru'<br>";

// Ganti lebih dari satu kata
$teks2 = "Saya suka kopi dan teh";
$baru2 = str_replace(["kopi", "teh"], ["susu", "marshmallow"], $teks2);
echo "Teks baru: '$baru2'<br>";
?>

</body>
</html>