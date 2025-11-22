<html>
<head>
    <title>Soal 17: Fungsi yang Mengembalikan Nilai</title>
</head>
<body>

<h1>Fungsi dengan Return Value</h1>

<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

// Ini membuat fungsi pengurangan
function kurang($a, $b) {
    return $a - $b;
}

echo "10 - 3 = " . kurang(10, 3) . "<br>";
echo "20 - 8 = " . kurang(20, 8) . "<br>";
?>

</body>
</html>