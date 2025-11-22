<?php 
$nama   = "Zulfikar Fauzi"; 
$nim    = "123456"; 
$kelas  = "TI-2A"; 
$jurusan= "Teknik Informatika"; 
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <h2 align="center">Biodata Mahasiswa</h2>
    <table border="1" cellspacing="0" cellpadding="8" align="center">
        <tr>
            <td><b>Nama</b></td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td><b>NIM</b></td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td><b>Kelas</b></td>
            <td><?php echo $kelas; ?></td>
        </tr>
        <tr>
            <td><b>Jurusan</b></td>
            <td><?php echo $jurusan; ?></td>
        </tr>
    </table>
</body>
</html>