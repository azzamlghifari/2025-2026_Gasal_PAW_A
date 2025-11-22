<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomor_nota = $_POST['nomor_nota'];
    $tanggal = $_POST['tanggal'];
    $pelanggan_id = $_POST['pelanggan_id'];
    $total_harga = $_POST['total_harga'];

    $sql_nota = "INSERT INTO nota (nomor_nota, tanggal, total_harga, pelanggan_id)
                 VALUES ('$nomor_nota', '$tanggal', '$total_harga', '$pelanggan_id')";
    mysqli_query($conn, $sql_nota);

    $nota_id = mysqli_insert_id($conn);

    $barang_id = $_POST['barang_id'];
    $harga_satuan = $_POST['harga_satuan'];
    $jumlah = $_POST['jumlah'];
    $subtotal = $_POST['subtotal'];

    for ($i = 0; $i < count($barang_id); $i++) {
        $sql_item = "INSERT INTO item_nota (nota_id, barang_id, harga_satuan, jumlah, subtotal)
                     VALUES ('$nota_id', '{$barang_id[$i]}', '{$harga_satuan[$i]}', '{$jumlah[$i]}', '{$subtotal[$i]}')";
        mysqli_query($conn, $sql_item);
    }

    echo "<h3>Transaksi berhasil disimpan ke tabel nota dan item_nota!</h3>";
    echo "<a href='formNota.html'>Kembali ke Form</a>";
}
?>