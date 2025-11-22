<?php include "koneksi.php"; ?>

<?php
$start = isset($_GET['start']) ? $_GET['start'] : date('Y-m-01');
$end   = isset($_GET['end']) ? $_GET['end'] : date('Y-m-d');

$q = mysqli_query($conn, "
    SELECT waktu_transaksi,
           COUNT(pelanggan_id) AS jumlah_pelanggan,
           SUM(total) AS total
    FROM transaksi
    WHERE waktu_transaksi BETWEEN '$start' AND '$end'
    GROUP BY waktu_transaksi
    ORDER BY waktu_transaksi ASC
");


$data = [];
while ($row = mysqli_fetch_assoc($q)) {
    $data[] = $row;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body style="font-family: Arial; padding:20px;">

<h2>Laporan Penjualan</h2>

<form method="GET">
    <input type="date" name="start" value="<?= $start ?>">
    <input type="date" name="end" value="<?= $end ?>">
    <button type="submit">Tampilkan</button>
</form>

<br>

<button onclick="window.print()">Cetak</button>
<a href="excel.php?start=<?= $start ?>&end=<?= $end ?>">
    <button type="button">Excel</button>
</a>

<hr>

<h3>Grafik Penjualan</h3>
<canvas id="my_canvas" height="120"></canvas>

<script>
const labels = [
    <?php foreach($data as $d){ echo "'" . $d['waktu_transaksi'] . "',"; } ?>
];

const values = [
    <?php foreach($data as $d){ echo $d['total'] . ","; } ?>
];

new Chart(document.getElementById('my_canvas'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Total Penjualan',
            data: values,
            backgroundColor: 'rgba(100, 149, 237, 0.5)',
            borderColor: 'rgb(100, 149, 237)',
            borderWidth: 1
        }]
    },
    options: {
        scales: { y: { beginAtZero: true } }
    }
});
</script>

<hr>

<h3>Rekap</h3>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>tanggal</th>
        <th>Total</th>
    </tr>

    <?php 
    $no = 1;
    $totalPendapatan = 0;
    $totalPelanggan = 0;
    
    foreach ($data as $d):
        $totalPendapatan += $d['total'];
        $totalPelanggan  += $d['jumlah_pelanggan'];
    ?>

    <tr>
        <td><?= $no++ ?></td>
        <td><?= $d['waktu_transaksi'] ?></td>
        <td>Rp <?= number_format($d['total'],0,',','.') ?></td>
    </tr>
    <?php endforeach; ?>
</table>

<br>

<h3>Total</h3>
<p>Jumlah Pelanggan: <b><?= $totalPelanggan ?> Orang</b></p>
<p>Total Pendapatan: <b>Rp <?= number_format($totalPendapatan,0,',','.') ?></b></p>

</body>
</html>
