<?php
require 'koneksi.php';

header('Content-Type: application/json');

$sql = "
    SELECT 
        DATE(waktu_transaksi) AS tanggal,
        SUM(total) AS total_penjualan
    FROM transaksi
    GROUP BY tanggal
    ORDER BY tanggal ASC
    LIMIT 7
";

$result = mysqli_query($conn, $sql);

$data = [
    "labels" => [],
    "data"   => []
];

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data["labels"][] = $row["tanggal"];
        $data["data"][]   = (int)$row["total_penjualan"];
    }
} else {
    $data["labels"] = ["Tidak ada data"];
    $data["data"]   = [0];
}

echo json_encode($data);

mysqli_close($conn);
?>
