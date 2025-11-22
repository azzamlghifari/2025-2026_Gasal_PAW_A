<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata Diri</title>
</head>
<body>
<?php

$nama  = $_GET['nama']  ?? "-";
$nim   = $_GET['nim']   ?? "-";
$asal  = $_GET['asal']  ?? "-";
$ttl   = $_GET['ttl']   ?? "-";
$email = $_GET['email'] ?? "-";

?>

<table border="2" cellpadding="5">
    <thead>
        <tr>
            <th colspan="2" class="judul">Biodata Diri</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th style="text-align: left;">Nama</th>
            <td><?= htmlspecialchars($nama); ?></td>
        </tr>
        <tr>
            <th style="text-align: left;">NIM</th>
            <td><?= htmlspecialchars($nim); ?></td>
        </tr>
        <tr>
            <th style="text-align: left;">Asal</th>
            <td><?= htmlspecialchars($asal); ?></td>
        </tr>
        <tr>
            <th style="text-align: left;">Tanggal/Tahun Lahir</th>
            <td><?= htmlspecialchars($ttl); ?></td>
        </tr>
        <tr>
            <th style="text-align: left;">Email</th>
            <td><?= htmlspecialchars($email); ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
<h4>untuk menampilkan isi dari biodata diri menggunakan ?nama=Abdullah%20Nurizqi%20A.M&nim=240411100158&asal=Bangkalan&ttl=08-05-2006&email=uqi.muhammad08@gmail.com</h4>
