<?php
require 'koneksi.php';

$sql = "
    SELECT 
        t.id AS TransaksiID,
        t.waktu_transaksi,
        p.nama AS NamaPelanggan,
        t.total,
        t.keterangan
    FROM transaksi t
    JOIN pelanggan p ON t.pelanggan_id = p.id
    ORDER BY t.waktu_transaksi DESC
";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query gagal: " . mysqli_error($conn));
}

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=laporan_penjualan_" . date('Ymd_His') . ".xls");
header("Pragma: no-cache");
header("Expires: 0");

$output = fopen('php://output', 'w');

$headerColumns = [
    "ID Transaksi",
    "Waktu",
    "Pelanggan",
    "Total Penjualan",
    "Keterangan"
];
fputcsv($output, $headerColumns, "\t");

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, [
        $row["TransaksiID"],
        $row["waktu_transaksi"],
        $row["NamaPelanggan"],
        $row["total"],      
        $row["keterangan"]
    ], "\t");
}

fclose($output);
mysqli_close($conn);
exit;
?>
