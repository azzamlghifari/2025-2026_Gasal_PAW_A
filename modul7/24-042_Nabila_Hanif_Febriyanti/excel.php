<?php
include "koneksi.php";

$start = $_GET['start'];
$end   = $_GET['end'];

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=rekap_pendapatan.xls");

// Membuat header kolom pada file Excel
echo "No\tTotal Pendapatan\tTanggal\n";

// Query untuk mengambil data pendapatan per tanggal
$query = mysqli_query($conn, "
    SELECT 
        DATE(waktu_bayar) AS tanggal,
        SUM(total) AS total_pendapatan,
        COUNT(*) AS jumlah_pelanggan
    FROM pembayaran
    WHERE DATE(waktu_bayar) BETWEEN '$start' AND '$end'
    GROUP BY DATE(waktu_bayar)
    ORDER BY tanggal ASC
");

$no = 1;
$sum_pelanggan = 0;
$sum_pendapatan = 0;

// Loop untuk menampilkan semua data ke dalam Excel
while ($result = mysqli_fetch_assoc($query)) {

    $sum_pelanggan += $result['jumlah_pelanggan'];
    $sum_pendapatan += $result['total_pendapatan'];

    echo $no++ . "\t" .
         $result['total_pendapatan'] . "\t" .
         $result['tanggal'] . "\n";
}
echo "\n";
echo "Jumlah Pelanggan\tJumlah Pendapatan\n";
echo $sum_pelanggan . " orang\tRp " . number_format($sum_pendapatan) . "\n";

?>
 