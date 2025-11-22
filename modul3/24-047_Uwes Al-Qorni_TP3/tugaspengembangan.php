<?php
// Array asosiatif
$produk = array(
    "Keyboard" => 150000,
    "Mouse" => 80000,
    "Monitor" => 1200000,
    "Flashdisk" => 75000,
    "Headset" => 200000
);

//daftar produk
echo "<h3>Daftar Produk dan Harganya</h3>";
echo "<table border='1' cellpadding='6' cellspacing='0'>";
echo "<tr style='background-color:#f2f2f2;'>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga (Rp)</th>
      </tr>";

$no = 1;
foreach ($produk as $nama => $harga) {
    echo "<tr>
            <td>$no</td>
            <td>$nama</td>
            <td>" . number_format($harga, 0, ',', '.') . "</td>
          </tr>";
    $no++;
}
echo "</table>:<br>";

echo "<hr>";


// Array multidimensi
$mahasiswa = array(
    array("Nama" => "Andi", "Nilai" => array(80, 75, 90)),
    array("Nama" => "Budi", "Nilai" => array(70, 85, 88)),
    array("Nama" => "Cici", "Nilai" => array(90, 95, 92)),
    array("Nama" => "Dodi", "Nilai" => array(65, 70, 60))
);

// Fungsi menghitung rata rata nilai
function hitungRataRata($nilai) {
    $total = array_sum($nilai);
    return $total / count($nilai);
}

// data dan ratarata
echo "<h3>Daftar Nilai Mahasiswa</h3>";
echo "<table border='1' cellpadding='6' cellspacing='0'>";
echo "<tr style='background-color:#f2f2f2;'>
        <th>No</th>
        <th>Nama</th>
        <th>Nilai 1</th>
        <th>Nilai 2</th>
        <th>Nilai 3</th>
        <th>Rata-rata</th>
      </tr>";

$no = 1;
foreach ($mahasiswa as $mhs) {
    $rata = hitungRataRata($mhs["Nilai"]);
    echo "<tr>
            <td>$no</td>
            <td>{$mhs['Nama']}</td>
            <td>{$mhs['Nilai'][0]}</td>
            <td>{$mhs['Nilai'][1]}</td>
            <td>{$mhs['Nilai'][2]}</td>
            <td>" . number_format($rata, 2) . "</td>
          </tr>";
    $no++;
}
echo "</table>";
?>

