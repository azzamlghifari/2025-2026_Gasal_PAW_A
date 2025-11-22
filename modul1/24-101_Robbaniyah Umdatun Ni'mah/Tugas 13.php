<html>
<head>
    <title>Soal 13: Fungsi Dasar</title>
</head>
<body>

<h1>Contoh Fungsi Sederhana</h1>

<?php
function writeMsg() {
    echo "Hello world!<br>";
}

// Memanggil fungsi
writeMsg();

// Buat fungsi baru
function sapa($nama) {
    echo "Halo, $nama!<br>";
}

sapa("Andi");
sapa("Budi");
?>

</body>
</html>