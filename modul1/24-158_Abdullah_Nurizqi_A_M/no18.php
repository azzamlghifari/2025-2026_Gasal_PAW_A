<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata diri</title>
</head>
<body>
<?php
$nama = "Abdullah Nurizqi A.M";
$nim = "240411100158";
$asal= "Bangkalan";
$ttl = "08-05-2006";
$email = "uqi.muhammad08@gmail.com";
?>
<h1></h1>
<table border="2" cellpadding="5">
    <thead>
        <tr>
            <th colspan="2" class="judul">Biodata Diri</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th style="text-align: left;">Nama </th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <th style="text-align: left;">NIM</th>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <th style="text-align: left;">asal</th>
            <td><?php echo $asal; ?></td>
        </tr>
        <tr>
            <th style="text-align: left;">tanggal/tahun lahir</th>
            <td><?php echo $ttl; ?></td>
        </tr>
        <tr>
            <th style="text-align: left;">Email</th>
            <td><?php echo $email; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>