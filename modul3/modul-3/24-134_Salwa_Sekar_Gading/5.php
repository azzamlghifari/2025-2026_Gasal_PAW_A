<?php
echo "<h2>Data Mahasiswa (Array Multidimensi)</h2>";
$students = array
    (
    array("Alex", "224801", "0812345678"),
    array("Bianca", "224802", "0812345689"),
    array("Candice", "224803", "0812345690")
    );

for ($row = 0; $row < 3; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$students[$row][$col]."</li>";
    }
    echo "</ul>";
}

echo "<hr>";

//NOMOR 1
echo "<h2>Nomor 1 : Menambahkan Data Baru ke Array students</h2>";

$students[] = array("Salwa", "224804", "0812345691");
$students[] = array("Sekar", "224805", "0812345692");
$students[] = array("Salma", "224806", "0812345693");
$students[] = array("El", "224807", "0812345694");
$students[] = array("Rinda", "224808", "0812345695");

$rows = count($students);
$cols = count($students[0]);

for ($row = 0; $row < $rows; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < $cols; $col++) {
        echo "<li>" . $students[$row][$col] . "</li>";
    }
    echo "</ul>";
}

echo "<hr>";

//NOMOR 2
echo "<h2>Nomor 2 : Menampilkan Data Mahasiswa dalam Bentuk Tabel</h2>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr style='background-color:#e0f7fa; font-weight:bold;'>
        <td>Nama</td><td>NIM</td><td>No. HP</td>
      </tr>";

foreach ($students as $baris) {
    echo "<tr>";
    foreach ($baris as $data) {
        echo "<td>" . $data . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<hr>";


// EKSPOLORASI FUNGSI-FUNGSI ARRAY
echo "<h2>Eksplorasi Fungsi pada Array</h2>";

// 1. array_push() – menambah data baru
array_push($students, array("Sabrina", "224805", "0812345700"));
echo "<p><strong>Setelah array_push():</strong> Jumlah data = " . count($students) . "</p>";

// 2. array_merge() – menggabungkan dengan array baru
$arrayBaru = array(
    array("Gabriel", "224806", "0812345711"),
    array("Dafa", "224807", "0812345722")
);
$gabungan = array_merge($students, $arrayBaru);
echo "<p><strong>Setelah array_merge():</strong> Jumlah data = " . count($gabungan) . "</p>";

// 3. array_values() – menampilkan nilai array tanpa key
echo "<p><strong>Contoh array_values() (baris pertama):</strong><br>";
print_r(array_values($students[0]));
echo "</p>";

// 4. array_search() – mencari data tertentu
$cari = array_search("224802", array_column($students, 1));
echo "<p><strong>Hasil array_search('224802'):</strong> indeks ke-" . $cari . "</p>";

// 5. array_filter() – memfilter data dengan kondisi
$filter = array_filter($students, function($mhs) {
    return $mhs[1] > "224802"; // hanya yang NIM > 224802
});
echo "<p><strong>Data hasil array_filter() (NIM > 224802):</strong><br>";
print_r($filter);
echo "</p>";

// 6. sorting pada array a-z
echo "<p><strong>Nomor 6 : Implementasi Sorting pada Array a-z</strong></p>";

$nama = array("Salwa", "Dela", "El", "Rinda", "Ara");
sort($nama);

echo "<strong>Hasil pengurutan (A-Z):</strong><br>";
foreach ($nama as $n) {
    echo $n . "<br>";
}

echo "<hr>";

// TUGAS PENGEMBANGAN (WAJIB)
echo "<h2>Tugas Pengembangan</h2>";

// 1. Array produk & harga
$produk = array(
    array("Sate", 15000),
    array("Gule", 20000),
    array("Soto", 15000),
    array("Nasgor", 10000)
);

echo "<strong>Daftar Produk & Harga:</strong><br>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr style='background-color:#ffe0b2; font-weight:bold;'><td>Produk</td><td>Harga (Rp)</td></tr>";
foreach ($produk as $item) {
    echo "<tr><td>" . $item[0] . "</td><td>" . number_format($item[1], 0, ',', '.') . "</td></tr>";
}
echo "</table>";


// 2. Hitung rata-rata nilai (contoh nilai mahasiswa)
echo "<p><strong>rata-rata mahasiswa:</strong></p>";
$nilaiMahasiswa = array(
    array("Salwa", 80, 85, 90),
    array("Sekar", 75, 78, 80),
    array("Gading", 88, 90, 84)
);

$totalNilai = 0;
$jumlahData = 0;
foreach ($nilaiMahasiswa as $mhs) {
    $rata = ($mhs[1] + $mhs[2] + $mhs[3]) / 3;
    echo "<br>Rata-rata nilai " . $mhs[0] . " = " . number_format($rata, 2);
    $totalNilai += $rata;
    $jumlahData++;
}
$rataKelas = $totalNilai / $jumlahData;
echo "<p><strong>Rata-rata nilai seluruh mahasiswa = " . number_format($rataKelas, 2) . "</strong></p>";
?>
