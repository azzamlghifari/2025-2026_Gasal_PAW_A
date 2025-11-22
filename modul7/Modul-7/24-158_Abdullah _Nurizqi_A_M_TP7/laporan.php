<?php
$koneksi = new mysqli("localhost", "root", "", "modul7_penjualan");

$tgl1 = isset($_GET['tgl1']) ? $_GET['tgl1'] : date('Y-m-01');
$tgl2 = isset($_GET['tgl2']) ? $_GET['tgl2'] : date('Y-m-d');

$grafik = $koneksi->query("
    SELECT tanggal_transaksi, SUM(total) AS pendapatan
    FROM transaksi
    WHERE tanggal_transaksi BETWEEN '$tgl1' AND '$tgl2'
    GROUP BY tanggal_transaksi
");

$rekap = $koneksi->query("
    SELECT COUNT(*) AS jumlah_transaksi, SUM(total) AS total_penerimaan
    FROM transaksi
    WHERE tanggal_transaksi BETWEEN '$tgl1' AND '$tgl2'
")->fetch_assoc();

$pelanggan = $koneksi->query("
    SELECT COUNT(*) AS total_pelanggan
    FROM pelanggan
    WHERE tanggal_daftar BETWEEN '$tgl1' AND '$tgl2'
")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h2>Filter Laporan</h2>
<!-- form filter -->
<form method="GET" action="">
    Dari: <input type="date" name="tgl1" value="<?= $tgl1 ?>">
    Sampai: <input type="date" name="tgl2" value="<?= $tgl2 ?>">
    <button type="submit">Cari</button>
</form>
<br>

<a href="print.php?tgl1=<?= $tgl1 ?>&tgl2=<?= $tgl2 ?>" target="_blank">
    <button>Print</button>
</a>

<a href="export_excel.php?tgl1=<?= $tgl1 ?>&tgl2=<?= $tgl2 ?>">
    <button>Export Excel</button>
</a>

<a href="export_pdf.php?tgl1=<?= $tgl1 ?>&tgl2=<?= $tgl2 ?>" target="_blank">
    <button>Export PDF</button>
</a>

<hr>

<h2>Grafik Pendapatan</h2>
<canvas id="grafik"></canvas>

<script>
var ctx = document.getElementById('grafik').getContext('2d');

var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
            <?php foreach($grafik as $g){ echo "'" . $g['tanggal_transaksi'] . "',"; } ?>
        ],
        datasets: [{
            label: 'Pendapatan',
            data: [
                <?php 
                $grafik->data_seek(0); 
                foreach($grafik as $g){ echo $g['pendapatan'] . ","; }
                ?>
            ]
        }]
    }
});
</script>

<hr>

<h2>Rekap Penerimaan</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Jumlah Transaksi</th>
        <th>Total Penerimaan</th>
    </tr>
    <tr>
        <td><?= $rekap['jumlah_transaksi'] ?></td>
        <td><?= number_format($rekap['total_penerimaan']) ?></td>
    </tr>
</table>

<hr>

<h2>Total</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Total Pelanggan</th>
        <th>Total Pendapatan</th>
    </tr>
    <tr>
        <td><?= $pelanggan['total_pelanggan'] ?></td>
        <td><?= number_format($rekap['total_penerimaan']) ?></td>
    </tr>
</table>

</body>
</html>
