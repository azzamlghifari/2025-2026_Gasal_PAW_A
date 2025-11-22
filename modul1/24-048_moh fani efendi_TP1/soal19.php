<!DOCTYPE html>
<html>
<body>
<?php
// ambil data dari query string (URL)
// gunakan operator ?? untuk nilai default jika tidak diisi
$nama   = $_GET['nama']   ?? "Tidak ada";
$nim    = $_GET['nim']    ?? "Tidak ada";
$kelas  = $_GET['kelas']  ?? "Tidak ada";
$alamat = $_GET['alamat'] ?? "Tidak ada";
$hobi   = $_GET['hobi']   ?? "Tidak ada";

// tampilkan biodata dalam tabel HTML
echo "
<h2>Biodata Mahasiswa</h2>
<table border='1' cellpadding='8' cellspacing='0'>
  <tr><th>Nama</th><td>$nama</td></tr>
  <tr><th>NIM</th><td>$nim</td></tr>
  <tr><th>Kelas</th><td>$kelas</td></tr>
  <tr><th>Alamat</th><td>$alamat</td></tr>
  <tr><th>Hobi</th><td>$hobi</td></tr>
</table>
";
?>
</body>
</html>
