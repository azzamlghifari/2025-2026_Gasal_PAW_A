<?php
require "koneksi.php";

$tgl01 = $_GET['tgl01'];
$tgl05 = $_GET['tgl05'];

$query = "SELECT t.waktu_transaksi, SUM(td.harga) AS total_harga
FROM transaksi t
JOIN transaksi_detail td ON t.id = td.transaksi_id
WHERE t.waktu_transaksi BETWEEN '$tgl01' AND '$tgl05'
GROUP BY t.waktu_transaksi
ORDER BY t.waktu_transaksi ASC";

$execute = mysqli_query($conn, $query);
$result = mysqli_fetch_all($execute, MYSQLI_ASSOC);

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=laporan.xls");

$total_pelanggan = count($result);
$total_pendapatan = array_sum(array_column($result,'total_harga'));
?>

<h3>Rekap Laporan Penjualan <?= $tgl01 ?> sampai <?= $tgl05 ?></h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Total</th>
        <th>Tanggal</th>
    </tr>

    <?php $no=1; foreach($result as $row): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td>Rp.<?= number_format($row['total_harga'], 0, '.', ',') ?></td>
        <td><?= date('d M Y', strtotime($row['waktu_transaksi'])) ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>

<table border="1">
    <tr>
        <th>Jumlah Pelanggan</th>
        <th>Jumlah Pendapatan</th>
    </tr>
    <tr>
        <td><?= $total_pelanggan ?> Orang</td>
        <td>Rp.<?= number_format($total_pendapatan, 0, '.', ',') ?></td>
    </tr>
</table>
