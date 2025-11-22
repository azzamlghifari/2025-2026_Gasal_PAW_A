<?php
$nama   = "Salwa Sekar";
$nim    = "240411100134";
$jurusan= "Teknik Informatika";
$kelas  = "PAW-A";
$ttl    = "Nganjuk, 14 September 2005";
$alamat = "Nganjuk";
$email  = "salwasekar00@gmail.com";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Mahasiswa</title>
</head>
<body>

<h2>Biodata Mahasiswa</h2>

<table border="1">
    <tr>
        <th>Nama</th>
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
        <th>Kelas</th>
        <td><?php echo $kelas; ?></td>
    </tr>
    <tr>
        <th>TTL</th>
        <td><?php echo $ttl; ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $email; ?></td>
    </tr>
</table>

</body>
</html>
