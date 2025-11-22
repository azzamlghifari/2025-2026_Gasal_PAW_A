<!DOCTYPE html>
<html>
<body>
    <h2>Biodata</h2>
    <?php
    $nama   = isset($_GET['nama']) ? $_GET['nama'] : "Tidak diketahui";
    $nim    = isset($_GET['nim']) ? $_GET['nim'] : "Tidak diketahui";
    $prodi  = isset($_GET['prodi']) ? $_GET['prodi'] : "Tidak diketahui";
    $fakultas = isset($_GET['fakultas']) ? $_GET['fakultas'] : "Tidak diketahui";
    $tanggal_lahir = isset($_GET['tanggal_lahir']) ? $_GET['tanggal_lahir'] : "Tidak diketahui";
    $asal = isset($_GET['asal']) ? $_GET['asal'] : "Tidak diketahui";
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
            <td>Tanggal Lahir</td>
            <td><?php echo $tanggal_lahir; ?></td>
        </tr>
        <tr>
            <td>Asal</td>
            <td><?php echo $asal; ?></td>
        </tr>
    </table>
</body>
</html>