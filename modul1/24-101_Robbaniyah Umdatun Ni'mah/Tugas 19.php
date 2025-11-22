<html>
<head>
    <title>Soal 19: Biodata Fleksibel</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h1>Biodata Fleksibel</h1>

<?php
$nama = $_GET['nama'] ?? 'Anonim';
$nim = $_GET['nim'] ?? 'N/A';
$alamat = $_GET['alamat'] ?? 'Tidak Diketahui';
$hobi = $_GET['hobi'] ?? 'Tidak Ada';
?>

<table>
    <tr>
        <th>Nama</th>
        <td><?php echo htmlspecialchars($nama); ?></td>
    </tr>
    <tr>
        <th>NIM</th>
        <td><?php echo htmlspecialchars($nim); ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?php echo htmlspecialchars($alamat); ?></td>
    </tr>
    <tr>
        <th>Hobi</th>
        <td><?php echo htmlspecialchars($hobi); ?></td>
    </tr>
</table>

<p>
    <strong>Contoh URL:</strong> 
    <a href="?nama=Andi&nim=24-102&alamat=Jakarta&hobi=Membaca">Coba link ini</a>
</p>

</body>
</html>