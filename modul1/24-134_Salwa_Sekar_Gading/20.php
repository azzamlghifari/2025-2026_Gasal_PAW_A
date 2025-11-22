<?php
$nama     = isset($_GET['nama']) ? $_GET['nama'] : "belum diisi";
$nim      = isset($_GET['nim']) ? $_GET['nim'] : "belum diisi";
$prodi    = isset($_GET['prodi']) ? $_GET['prodi'] : "belum diisi";
$angkatan = isset($_GET['angkatan']) ? $_GET['angkatan'] : "belum diisi";
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
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?php echo $prodi; ?></td>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td><?php echo $angkatan; ?></td>
        </tr>
    </table>
</body>
</html>
