<html>
<head>
    <title>Soal 14: Fungsi dengan Argumen</title>
</head>
<body>

<h1>Fungsi dengan Satu Argumen</h1>

<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Nia");
familyName("Laila");
familyName("Aini");
familyName("Remi");
familyName("Luffy");

// Tambah argumen lain
function sapa($nama, $gelar = "Mr.") {
    echo "$gelar $nama, selamat datang!<br>";
}

sapa("Andi");
sapa("Budi", "Dr.");
?>

</body>
</html>