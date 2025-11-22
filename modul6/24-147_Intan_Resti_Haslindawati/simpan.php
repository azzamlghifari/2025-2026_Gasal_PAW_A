<?php
include "db.php";

$tgl        = $_POST['waktu_transaksi'];
$keterangan = $_POST['keterangan'];
$pelanggan  = $_POST['pelanggan_id'];

mysqli_query($conn, 
"INSERT INTO transaksi (waktu_transaksi, keterangan, total, pelanggan_id)
 VALUES ('$tgl', '$keterangan', 0, '$pelanggan')");

$id_transaksi = mysqli_insert_id($conn);

$barang_id = $_POST['barang_id'];
$harga     = $_POST['harga'];
$qty       = $_POST['qty'];

$total = 0;

for ($i = 0; $i < count($barang_id); $i++) {

    if ($barang_id[$i] == "" || $harga[$i] == "") continue;

    $subtotal = $harga[$i] * $qty[$i];
    $total += $subtotal;

    mysqli_query($conn, 
    "INSERT INTO transaksi_detail (transaksi_id, barang_id, harga, qty) 
     VALUES ('$id_transaksi', '{$barang_id[$i]}', '{$harga[$i]}', '{$qty[$i]}')");
}

mysqli_query($conn, 
"UPDATE transaksi SET total='$total' WHERE id='$id_transaksi'");

echo "<h3>Transaksi berhasil disimpan!</h3>";
echo "ID Transaksi: " . $id_transaksi;
?>
