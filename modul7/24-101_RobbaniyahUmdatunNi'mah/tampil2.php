<?php
include 'koneksi.php';

$tgl_awal = isset($_GET['startDate']) ? $_GET['startDate'] : '2025-04-01';
$tgl_akhir = isset($_GET['endDate']) ? $_GET['endDate'] : '2025-04-30';

// Query data
$query = "SELECT * FROM transaksi 
          WHERE waktu_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir'
          ORDER BY waktu_transaksi ASC";
$result = mysqli_query($conn, $query);

// Siapkan data
$data_grafik = [];
$total_pendapatan = 0;
$pelanggan = [];

while ($row = mysqli_fetch_assoc($result)) {
    $tanggal = $row['waktu_transaksi'];
    $total = $row['total'];
    $data_grafik[$tanggal] = isset($data_grafik[$tanggal]) ? $data_grafik[$tanggal] + $total : $total;
    $total_pendapatan += $total;
    $pelanggan[$row['pelanggan_id']] = true;
}

$labels = json_encode(array_keys($data_grafik));
$values = json_encode(array_values($data_grafik));

// Format tanggal untuk judul
$judul = date('d M Y', strtotime($tgl_awal)) . ' sampai ' . date('d M Y', strtotime($tgl_akhir));
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Penjualan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .btn-kembali {
            background-color: #0d6efd;
        }
        .btn-export {
            background-color: #fd7e14;
        }
        canvas {
            max-width: 800px;
            margin: 20px 0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        .total-box {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }
        .box {
            background-color: #e8f4fd;
            padding: 15px;
            border-radius: 8px;
            flex: 1;
            text-align: center;
        }
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Rekap Laporan Penjualan <?= htmlspecialchars($judul) ?></h2>
    <div class="action-buttons no-print">
        <a href="tampilan.php" class="btn btn-kembali">← Kembali</a>
        <button onclick="window.print()" class="btn btn-export">Cetak</button>
        <a href="export.php?startDate=<?= urlencode($tgl_awal) ?>&endDate=<?= urlencode($tgl_akhir) ?>" 
           class="btn btn-export">Excel</a>
    </div>
</div>

<canvas id="grafikPenjualan" height="100"></canvas>

<script>
const ctx = document.getElementById('grafikPenjualan').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?= $labels ?>,
        datasets: [{
            label: 'Total Penjualan',
            data: <?= $values ?>,
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: { y: { beginAtZero: true } },
        plugins: { legend: { display: false } }
    }
});
</script>

<h3>Rekap Transaksi</h3>
<table>
    <tr>
        <th>No</th>
        <th>Total</th>
        <th>Tanggal</th>
        <th>Keterangan</th>
        <th>ID Pelanggan</th>
    </tr>
    <?php
    mysqli_data_seek($result, 0);
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$no}</td>
                <td>Rp " . number_format($row['total'], 0, ',', '.') . "</td>
                <td>" . date('d M Y', strtotime($row['waktu_transaksi'])) . "</td>
                <td>" . htmlspecialchars($row['keterangan']) . "</td>
                <td>{$row['pelanggan_id']}</td>
              </tr>";
        $no++;
    }
    ?>
</table>

<div class="total-box">
    <div class="box">
        <h4>Jumlah Pelanggan</h4>
        <p><?= count($pelanggan) ?> Orang</p>
    </div>
    <div class="box">
        <h4>Jumlah Pendapatan</h4>
        <p>Rp <?= number_format($total_pendapatan, 0, ',', '.') ?></p>
    </div>
</div>

</body>
</html>