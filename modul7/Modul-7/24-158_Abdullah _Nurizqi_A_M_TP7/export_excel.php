<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan_penjualan.xls");

$koneksi = new mysqli("localhost", "root", "", "modul7_penjualan");

$tgl1 = $_GET['tgl1'];
$tgl2 = $_GET['tgl2'];

$data = $koneksi->query("
    SELECT * FROM transaksi
    WHERE tanggal_transaksi BETWEEN '$tgl1' AND '$tgl2'
");
?>

<h3>Laporan Rekap Penjualan</h3>
<p>Periode: <?= $tgl1 ?> s/d <?= $tgl2 ?></p>

<table border="1" cellpadding="5">
    <tr>
        <th>Tanggal</th>
        <th>Total</th>
    </tr>

    <?php while($d = $data->fetch_assoc()) { ?>
    <tr>
        <td><?= $d['tanggal_transaksi'] ?></td>
        <td><?= $d['total'] ?></td>
    </tr>
    <?php } ?>
</table>
