<?php
$koneksi = new mysqli("localhost", "root", "", "modul7_penjualan");

$tgl1 = $_GET['tgl1'];
$tgl2 = $_GET['tgl2'];

$data = $koneksi->query("
    SELECT tanggal_transaksi, SUM(total) AS total
    FROM transaksi
    WHERE tanggal_transaksi BETWEEN '$tgl1' AND '$tgl2'
    GROUP BY tanggal_transaksi
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Print Laporan</title>
</head>
<body onload="window.print()">

<h2>Laporan Penjualan</h2>
<p>Periode: <?= $tgl1 ?> s/d <?= $tgl2 ?></p>

<table border="1" cellpadding="5" width="100%">
    <tr>
        <th>Tanggal</th>
        <th>Total</th>
    </tr>

    <?php while($d = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $d['tanggal_transaksi'] ?></td>
        <td><?= number_format($d['total']) ?></td>
    </tr>
    <?php } ?>

</table>

</body>
</html>
