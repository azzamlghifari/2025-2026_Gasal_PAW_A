<?php
require 'koneksi.php';

$pelanggan_id = $_POST['pelanggan_id'];
$kasir_id = $_POST['kasir_id'];
$keterangan = $_POST['keterangan'];
$tanggal = date('Y-m-d H:i:s');

mysqli_query($koneksi, "
    INSERT INTO penjualan_transaksi (waktu_transaksi, keterangan, total, pelanggan_id)
    VALUES ('$tanggal', '$keterangan', 0, '$pelanggan_id')
");

$transaksi_id = mysqli_insert_id($koneksi);

$nomor_nota = 'NT' . time();
mysqli_query($koneksi, "
    INSERT INTO penjualan_nota (transaksi_id, nomor_nota, tanggal_cetak, kasir_id)
    VALUES ('$transaksi_id', '$nomor_nota', '$tanggal', '$kasir_id')
");

$barang_id = $_POST['barang_id'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

$total = 0;
for ($i = 0; $i < count($barang_id); $i++) {
    if (!empty($barang_id[$i])) {
        $subtotal = $harga[$i] * $qty[$i];
        $total += $subtotal;
        mysqli_query($koneksi, "
            INSERT INTO penjualan_transaksi_detail (transaksi_id, barang_id, harga, qty)
            VALUES ('$transaksi_id', '{$barang_id[$i]}', '{$harga[$i]}', '{$qty[$i]}')
        ");
    }
}

mysqli_query($koneksi, "
    UPDATE penjualan_transaksi SET total='$total' WHERE id='$transaksi_id'
");

echo "<h2>✅ Transaksi berhasil disimpan dengan Nomor Nota: $nomor_nota</h2>";
echo "<h2>Nomor Transaksi: $transaksi_id</h2>";
echo "<p>Data Transaksi, Nota, dan Detail Barang telah tersimpan bersamaan.</p>";
echo "<p><strong>Stok barang berhasil diperbarui.</strong></p>";
?>
