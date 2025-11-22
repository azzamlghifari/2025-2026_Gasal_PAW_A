<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_nota   = $_POST['id_nota'];
    $tanggal   = $_POST['tanggal'];
    $pelanggan = $_POST['pelanggan'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah    = $_POST['jumlah'];
    $harga     = $_POST['harga'];

    mysqli_query($conn, "INSERT INTO nota_penjualan (id_nota, tanggal, pelanggan)
                         VALUES ('$id_nota', '$tanggal', '$pelanggan')");
    mysqli_query($conn, "INSERT INTO item_penjualan (id_nota, nama_barang, jumlah, harga)
                         VALUES ('$id_nota', '$nama_barang', '$jumlah', '$harga')");

    echo "Data berhasil disimpan.";
} else {
    echo "File ini tidak bisa diakses langsung.";
}
?>
