<?php
require 'koneksi.php';

$tgl_awal      = $_GET['tgl_awal']  ?? "";
$tgl_akhir     = $_GET['tgl_akhir'] ?? "";
$pelanggan_flt = $_GET['pelanggan'] ?? "";

$where = [];

if (!empty($tgl_awal) && !empty($tgl_akhir)) {
    $where[] = "DATE(t.waktu_transaksi) BETWEEN '$tgl_awal' AND '$tgl_akhir'";
}

if (!empty($pelanggan_flt)) {
    $where[] = "t.pelanggan_id = '$pelanggan_flt'";
}

$where_sql = "";
if (!empty($where)) {
    $where_sql = "WHERE " . implode(" AND ", $where);
}

$sql = "
    SELECT 
        t.id AS TransaksiID,
        t.waktu_transaksi,
        p.nama AS NamaPelanggan,
        t.total
    FROM transaksi t
    JOIN pelanggan p ON t.pelanggan_id = p.id
    $where_sql
    ORDER BY t.waktu_transaksi DESC
    LIMIT 5
";

$result = mysqli_query($conn, $sql);
$transaksi = mysqli_fetch_all($result, MYSQLI_ASSOC);

$pelanggan_query = mysqli_query($conn, "SELECT id, nama FROM pelanggan");
$pelanggan_list = mysqli_fetch_all($pelanggan_query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body { font-family: Arial, sans-serif; background: #f7f9fc; margin: 20px; }
        .container { width: 1000px; margin: auto; padding: 30px; background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h2 { color: #9000ff; border-bottom: 2px solid #ddd; padding-bottom: 10px; }
        .controls { display: flex; gap: 15px; margin-bottom: 20px; }
        .controls button, .controls a { padding: 10px 15px; border-radius: 5px; font-weight: bold; text-decoration: none; cursor: pointer; }
        .btn-print { background: #07deff; border: none; }
        .btn-export { background: #a7286a; color: white; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 10px; border: 1px solid #eee; }
        th { background: #e6f7ff; }
        @media print { .controls, .filter-box { display: none; } body { background: white; } }
        .filter-box { padding: 15px; background: #f2f2f2; margin-bottom: 20px; border-radius: 8px; }
        .filter-box input, .filter-box select { padding: 8px; margin-right: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Laporan Kinerja Penjualan</h2>

    <div class="filter-box">
        <form method="GET">
            <label>Dari Tanggal:</label>
            <input type="date" name="tgl_awal" value="<?= $tgl_awal ?>">

            <label>Sampai:</label>
            <input type="date" name="tgl_akhir" value="<?= $tgl_akhir ?>">

            <label>Pelanggan:</label>
            <select name="pelanggan">
                <option value="">Semua Pelanggan</option>
                <?php foreach ($pelanggan_list as $p) : ?>
                    <option value="<?= $p['id']; ?>" <?= ($pelanggan_flt == $p['id']) ? 'selected' : ''; ?>>
                        <?= $p['nama']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <button type="submit">Filter</button>
            <a href="data_penjualan.php" style="padding:8px; background:#ff0040; color:white; text-decoration:none;">Reset</a>
        </form>
    </div>

    <div class="controls">
        <button class="btn-print" onclick="window.print()">Cetak Laporan</button>
        <a href="excel.php?<?= http_build_query($_GET); ?>" class="btn-export">Ekspor Excel</a>
    </div>

    <div style="width: 80%; margin: auto;">
        <h3>Tren Penjualan 7 Hari Terakhir</h3>
        <canvas id="salesChart"></canvas>
    </div>
    <hr>

    <h3>5 Transaksi Terakhir</h3>
    <table>
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Waktu</th>
                <th>Pelanggan</th>
                <th>Total</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($transaksi)) : ?>
                <?php foreach ($transaksi as $t) : ?>
                    <tr>
                        <td><?= $t["TransaksiID"]; ?></td>
                        <td><?= $t["waktu_transaksi"]; ?></td>
                        <td><?= htmlspecialchars($t["NamaPelanggan"]); ?></td>
                        <td>Rp <?= number_format($t["total"], 0, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr><td colspan="4" style="text-align:center;">Belum ada transaksi.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>

<?php
$q_pelanggan = mysqli_query($conn, "SELECT COUNT(*) AS total_pelanggan FROM pelanggan");
$data_pelanggan = mysqli_fetch_assoc($q_pelanggan);
$total_pelanggan = $data_pelanggan['total_pelanggan'];

$q_pendapatan = mysqli_query($conn, "SELECT SUM(total) AS total_pendapatan FROM transaksi t $where_sql");
$data_pendapatan = mysqli_fetch_assoc($q_pendapatan);
$total_pendapatan = $data_pendapatan['total_pendapatan'] ?? 0;
?>

<br><br>

<table style="width:40%; border-collapse: collapse; margin:auto; text-align:center;">
    <tr style="background:#d9f1ff; font-weight:bold;">
        <td>Jumlah Pelanggan</td>
        <td>Jumlah Pendapatan</td>
    </tr>
    <tr style="font-size:18px;">
        <td><b><?= $total_pelanggan ?> Orang</b></td>
        <td><b>Rp <?= number_format($total_pendapatan, 0, ',', '.'); ?></b></td>
    </tr>
</table>

</div>

<script>
async function loadChart() {
    const url = "chart.php?<?= http_build_query($_GET); ?>";
    const response = await fetch(url);
    const data = await response.json();

    new Chart(document.getElementById('salesChart'), {
        type: 'bar',
        data: {
            labels: data.labels,
            datasets: [{
                label: 'Total Penjualan (Rp)',
                data: data.data,
                backgroundColor: 'rgba(216,124,255,0.7)'
            }]
        },
        options: { scales: { y: { beginAtZero: true } } }
    });
}
loadChart();
</script>

</body>
</html>

<?php mysqli_close($conn); ?>
