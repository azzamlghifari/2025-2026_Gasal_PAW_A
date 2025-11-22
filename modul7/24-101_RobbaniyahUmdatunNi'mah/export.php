<?php
include 'koneksi.php';

$tgl_awal = $_GET['startDate'] ?? '2025-04-01';
$tgl_akhir = $_GET['endDate'] ?? '2025-04-30';

$query = "SELECT * FROM transaksi 
          WHERE waktu_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir'
          ORDER BY waktu_transaksi ASC";
$result = mysqli_query($conn, $query);

$pelanggan = [];
$total_pendapatan = 0;
$transaksi_data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $pelanggan[$row['pelanggan_id']] = true;
    $total_pendapatan += $row['total'];
    $transaksi_data[] = $row;
}

$judul_tanggal = date('d M Y', strtotime($tgl_awal)) . ' sampai ' . date('d M Y', strtotime($tgl_akhir));

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment; filename="Rekap_Laporan_Penjualan_' . $tgl_awal . '_sampai_' . $tgl_akhir . '.xls"');

echo "<table border='1'>";

echo "<tr><td colspan='3' style='font-size:16px; font-weight:bold;'>Rekap Laporan Penjualan " . htmlspecialchars($judul_tanggal) . "</td></tr>";

echo "<tr><td colspan='3'></td></tr>";

echo "<tr>";
echo "<th>No</th>";
echo "<th>Total</th>";
echo "<th>Tanggal</th>";
echo "</tr>";

$no = 1;
foreach ($transaksi_data as $row) {
    echo "<tr>";
    echo "<td>" . $no++ . "</td>";
    echo "<td>RP. " . number_format($row['total'], 0, ',', '.') . "</td>";
    echo "<td>" . date('d-M-y', strtotime($row['waktu_transaksi'])) . "</td>"; // Format DD-Mmm-YY
    echo "</tr>";
}

echo "<tr><td colspan='3'></td></tr>";

echo "<tr>";
echo "<td colspan='3' style='font-weight:bold;'>Jumlah Pelanggan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jumlah Pendapatan</td>";
echo "</tr>";

echo "<tr>";
echo "<td colspan='1'>" . count($pelanggan) . " Orang</td>";
echo "<td colspan='2'>RP. " . number_format($total_pendapatan, 0, ',', '.') . "</td>";
echo "</tr>";

echo "</table>";
?>