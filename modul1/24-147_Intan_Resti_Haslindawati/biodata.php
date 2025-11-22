<!DOCTYPE html>
<html>
<body>
    <h2>Biodata</h2>
    <?php
    $nama   = 'Intan Resti';
    $nim    = '240411100147';
    $prodi  = 'Teknik Informatika';
    $fakultas = 'Teknik';
    $tanggal_lahir = '10 April 2006';
    $asal = 'Pamekasan';
    ?>

    <table border='1' cellspacing="0" cellpadding="10">
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
            <td>Fakultas</td>
            <td><?php echo $fakultas; ?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td><?php echo $tanggal_lahir; ?></td>
        </tr>
        <tr>
            <td>Asal</td>
            <td><?php echo $asal; ?></td>
        </tr>
    </table>
</body>
</html>
