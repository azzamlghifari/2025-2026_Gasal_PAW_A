<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h2>Laporan Penjualan</h2>

    <style>
        @media print{
            .no-print{
                display: none;
            }
        }
    </style>

<form method="GET">
    <input type="date" name="start" class="no-print" value="<?= isset($_GET['start']) ? $_GET['start'] : '' ?>">
    <input type="date" name="end" class="no-print" value="<?= isset($_GET['end']) ? $_GET['end'] : '' ?>">
    <button type="submit" class="no-print" >Tampilkan</button>
</form>

<?php  
// untuk Mengecek apakah tanggal awal dan akhir diisi
if (!empty($_GET['start']) && !empty($_GET['end'])) {

    $start = $_GET['start'];
    $end = $_GET['end'];

    // Query mengambil data dari pembayaran berdasarkan range tanggal
    $query = mysqli_query($conn, "
        SELECT 
            DATE(waktu_bayar) AS tanggal,
            COUNT(id) AS total_pelanggan,
            SUM(total) AS total_pendapatan
        FROM pembayaran
        WHERE DATE(waktu_bayar) BETWEEN '$start' AND '$end'
        GROUP BY DATE(waktu_bayar)
        ORDER BY tanggal ASC
    ");

    $tgl = [];
    $pendapatan = [];
    $sum_pelanggan = 0;
    $sum_pendapatan = 0;

    // Mengambil data dari query
    while ($result = mysqli_fetch_assoc($query)) {
        $tgl[] = $result['tanggal'];
        $pendapatan[] = $result['total_pendapatan'];

        $sum_pelanggan += $result['total_pelanggan'];
        $sum_pendapatan += $result['total_pendapatan'];
    }
?>

<h3>Rekap Laporan penjualan 
    <?= isset($_GET['start']) ? $_GET['start'] : '' ?>
    sampai
    <?= isset($_GET['end']) ? $_GET['end'] : '' ?>
</h3>
<canvas id="chart"></canvas>

<script>
new Chart(document.getElementById('chart'), {
    type: 'bar',
    data: {
        labels: <?= json_encode($tgl) ?>,
        datasets: [{
            label: 'Total',
            data: <?= json_encode($pendapatan) ?>,
            borderWidth: 1
        }]
    },
    options: { scales: { y: { beginAtZero: true } } }
});
</script>

<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Total</th>
        <th>Tanggal</th>
    </tr>

<?php
// Query untuk menampilkan tabel pendapatan per hari

$q2 = mysqli_query($conn, "
    SELECT 
        DATE(waktu_bayar) AS tanggal,
        SUM(total) AS total_pendapatan
    FROM pembayaran
    WHERE DATE(waktu_bayar) BETWEEN '$start' AND '$end'
    GROUP BY DATE(waktu_bayar)
");

$no = 1;
while ($result = mysqli_fetch_assoc($q2)) {
    echo "
    <tr>
        <td>".$no++."</td>
        <td>Rp ".number_format($result['total_pendapatan'])."</td>
        <td>{$result['tanggal']}</td>
    </tr>";
}
?>
</table>
<br>

<table border="1" >
    <tr>
    <th>Jumlah Pelanggan : </th>
    <th>Jumlah Pendapatan : </th>
    </tr>
    <td><?= $sum_pelanggan ?> orang</td>
    <td>Rp <?= number_format($sum_pendapatan) ?></td>
</table>

    <style>
        @media print{
            .no-print{
                display: none;
            }
        }
    </style>

<button onclick="window.print()" class="no-print">Print</button>
<a href="excel.php?start=<?= $start ?>&end=<?= $end ?>" class="no-print">
    <button>Excel</button>
</a>


<?php } ?>

</body>
</html>