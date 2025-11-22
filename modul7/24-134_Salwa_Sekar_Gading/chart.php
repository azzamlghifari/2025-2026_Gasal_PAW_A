<?php
require "koneksi.php";

$tgl01 = $_GET['tgl01'] ?? date('Y-m-01');
$tgl05 = $_GET['tgl05'] ?? date('Y-m-d');

$query = "SELECT t.waktu_transaksi, SUM(td.harga) AS total_harga
FROM transaksi t
JOIN transaksi_detail td ON t.id = td.transaksi_id
WHERE t.waktu_transaksi BETWEEN '$tgl01' AND '$tgl05'
GROUP BY t.waktu_transaksi
ORDER BY t.waktu_transaksi ASC";

$execute = mysqli_query($conn, $query);
$result = mysqli_fetch_all($execute, MYSQLI_ASSOC);

$tanggal = [];
$total = [];

foreach($result as $row){
    $tanggal[] = $row['waktu_transaksi'];
    $total[]   = $row['total_harga'];
}

$total_pelanggan = count($result);
$total_pendapatan = array_sum(array_column($result, 'total_harga'));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Modul 7</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<div class="filter-box no-print">
    <form method="GET">
        <input type="date" name="tgl01" value="<?= $tgl01 ?>">
        <input type="date" name="tgl05" value="<?= $tgl05 ?>">
        <button class="btn-green">Tampilkan</button>
    </form>
</div>

<!-- BAR -->
<canvas id="chart" height="110"></canvas>
<script>
new Chart(document.getElementById('chart'), {
    type: 'bar',
    data: {
        labels: <?= json_encode($tanggal) ?>,
        datasets: [{
            label: 'Total',
            data: <?= json_encode($total) ?>,
            backgroundColor: 'rgba(180,180,180,0.6)',
            borderColor: '#000',
            borderWidth: 1
        }]
    }
});
</script>

<!-- REKAP -->
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>No</th>
        <th>Total</th>
        <th>Tanggal</th>
    </tr>

    <?php $no=1; foreach($result as $row): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td>Rp <?= number_format($row['total_harga']) ?></td>
        <td><?= date('d M Y', strtotime($row['waktu_transaksi'])) ?></td>
    </tr>
    <?php endforeach; ?>
</table>


<!-- TOTAL -->
<br>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th colspan="2">Total</th>
    </tr>

    <tr>
        <td><strong>Jumlah Pelanggan</strong></td>
        <td><?= $total_pelanggan ?> Orang</td>
    </tr>

    <tr>
        <td><strong>Jumlah Pendapatan</strong></td>
        <td>Rp <?= number_format($total_pendapatan) ?></td>
    </tr>
</table>


<!-- KEMBALI | PRINT  | EXCEL -->
<div class="no-print" style="margin-top: 20px;">

    <button onclick="window.location='chart.php'" class="btn-back">Kembali</button>

    <button onclick="window.print()" class="btn-blue">Print</button>

    <button onclick="window.location='export_excel.php?tgl01=<?= $tgl01 ?>&tgl05=<?= $tgl05 ?>'" 
            class="btn-orange">Excel</button>
</div>

</body>
</html>
