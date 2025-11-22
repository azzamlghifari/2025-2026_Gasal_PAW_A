<html>
<head>
    <title>Soal 15: Fungsi dengan Banyak Argumen</title>
</head>
<body>

<h1>Fungsi dengan Dua Argumen</h1>

<?php
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year<br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

// Tambah argumen ketiga
function biodata($nama, $tahun_lahir, $pekerjaan = "Pelajar") {
    echo "$nama lahir tahun $tahun_lahir, pekerjaan: $pekerjaan<br>";
}

biodata("Andi", "2005");
biodata("Budi", "2003", "Programmer");
?>

</body>
</html>