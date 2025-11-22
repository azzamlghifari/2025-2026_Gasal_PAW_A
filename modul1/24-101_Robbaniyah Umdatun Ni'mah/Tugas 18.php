<html>
<head>
    <title>Soal 18: Biodata dengan Tabel HTML</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h1>Biodata dalam Tabel (dengan PHP)</h1>

<?php
$nama = "Robbaniyah Umdatun Ni'mah";
$nim = "24-101";
$alamat = "Indonesia";
$hobi = "Membaca, Ngoding";
?>

<table>
    <tr>
        <th>Nama</th>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <th>NIM</th>
        <td><?php echo $nim; ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <th>Hobi</th>
        <td><?php echo $hobi; ?></td>
    </tr>
</table>

</body>
</html>