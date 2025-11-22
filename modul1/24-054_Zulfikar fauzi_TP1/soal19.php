<?php 
$nama    = isset($_GET['nama']) ? $_GET['nama'] : "Tidak ada data"; 
$nim     = isset($_GET['nim']) ? $_GET['nim'] : "Tidak ada data"; 
$kelas   = isset($_GET['kelas']) ? $_GET['kelas'] : "Tidak ada data"; 
$jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : "Tidak ada data"; 
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Mahasiswa</title>
</head>
<body>
    <h2 align="center">Biodata Mahasiswa</h2>
    <table border="1" cellspacing="0" cellpadding="8" align="center">
        <tr>
            <td><b>Nama</b></td>
            <td><?php echo htmlspecialchars($nama); ?></td>
        </tr>
        <tr>
            <td><b>NIM</b></td>
            <td><?php echo htmlspecialchars($nim); ?></td>
        </tr>
        <tr>
            <td><b>Kelas</b></td>
            <td><?php echo htmlspecialchars($kelas); ?></td>
        </tr>
        <tr>
            <td><b>Jurusan</b></td>
            <td><?php echo htmlspecialchars($jurusan); ?></td>
        </tr>
    </table>
</body>
</html>