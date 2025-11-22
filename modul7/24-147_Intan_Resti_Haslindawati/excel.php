<?php
include "koneksi.php";

$start = $_GET['start'];
$end   = $_GET['end'];

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=laporan_$start-$end.csv");

echo "No,tanggal,Total\n";

$query = mysqli_query($conn, "
    SELECT waktu_transaksi, SUM(total) AS total
    FROM transaksi
    WHERE waktu_transaksi BETWEEN '$start' AND '$end'
    GROUP BY waktu_transaksi
    ORDER BY waktu_transaksi ASC
");

$no = 1;

while ($row = mysqli_fetch_assoc($query)) {
    echo $no++ . ",";
    echo $row['waktu_transaksi'] . ",";
    echo $row['total'] . "\n";
}
?>
