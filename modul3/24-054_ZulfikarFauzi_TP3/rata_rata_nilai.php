<?php
$mahasiswa = array(
    array("nama" => "Andi", "nilai" => 80),
    array("nama" => "Budi", "nilai" => 75),
    array("nama" => "Citra", "nilai" => 90),
    array("nama" => "Dewi", "nilai" => 85)
);

function rataRata($data) {
    $total = 0;
    $jumlah = count($data);
    foreach ($data as $mhs) {
        $total += $mhs["nilai"];
    }
    return $total / $jumlah;
}

echo "<b>Daftar Mahasiswa dan Nilai:</b><br>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>" . $mhs["nama"] . "</td>";
    echo "<td>" . $mhs["nilai"] . "</td>";
    echo "</tr>";
}

echo "</table><br>";

$hasil = rataRata($mahasiswa);
echo "<b>Rata-rata nilai mahasiswa:</b> " . $hasil;
?>
