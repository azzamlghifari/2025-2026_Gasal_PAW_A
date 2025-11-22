<?php
// Ambil data dari query string, jika tidak ada maka isi default
$nama    = isset($_GET['nama']) ? $_GET['nama'] : "Nama belum diisi";
$nim     = isset($_GET['nim']) ? $_GET['nim'] : "NIM belum diisi";
$kelas   = isset($_GET['kelas']) ? $_GET['kelas'] : "Kelas belum diisi";
$jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : "Jurusan belum diisi";
$kampus  = isset($_GET['kampus']) ? $_GET['kampus'] : "Kampus belum diisi";
$Alamat  = isset($_GET['Alamat']) ? $_GET['Alamat'] : "Alamat belum diisi";

echo "
<h2>Biodata</h2>
<table border='1'>
    <tr>
        <td><b>Nama</b></td>
        <td>$nama</td>
    </tr>
    <tr>
        <td><b>NIM</b></td>
        <td>$nim</td>
    </tr>
    <tr>
        <td><b>Kelas</b></td>
        <td>$kelas</td>
    </tr>
    <tr>
        <td><b>Jurusan</b></td>
        <td>$jurusan</td>
    </tr>
    <tr>
        <td><b>Kampus</b></td>
        <td>$kampus</td>
    </tr>
    <tr>
        <td><b>Alamat</b></td>
        <td>$Alamat</td>
    </tr>
</table>
";
?>
