<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata dalam Tabel HTML</title>
</head>
<body>
<?php
$nama = "Hasbulloh Alif Salsabila";
$nim = "123456789";
$jurusan = "Teknik Informatika";
$angkatan = 2024;
$email = "hasbul.as@contoh.ac.id";
?>
<h1>Tampilan Biodata dengan PHP dan Tabel HTML</h1>
<table border="1">
    <thead>
        <tr>
            <th colspan="2" class="judul">BIODATA MAHASISWA</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Nama Lengkap</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th>NIM</th>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <th>Jurusan</th>
            <td><?php echo $jurusan; ?></td>
        </tr>
        <tr>
            <th>Angkatan</th>
            <td><?php echo $angkatan; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $email; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>