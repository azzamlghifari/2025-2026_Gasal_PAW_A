<html>
<head>
    <title>Soal 16: Nilai Default pada Argumen</title>
</head>
<body>

<h1>Fungsi dengan Nilai Default</h1>

<?php
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

// Membuat fungsi dengan lebih dari satu default
function info($nama = "Anonim", $umur = 0) {
    echo "Nama: $nama, Umur: $umur tahun<br>";
}

info();
info("Andi");
info("Budi", 20);
?>

</body>
</html>