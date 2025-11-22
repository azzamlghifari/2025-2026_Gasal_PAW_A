<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
    $id_nota = $_GET['id'];

    $query_detail = "DELETE FROM item_penjualan WHERE id_nota = $id_nota";
    mysqli_query($conn, $query_detail);

    $query_master = "DELETE FROM nota_penjualan WHERE id_nota = $id_nota";
    mysqli_query($conn, $query_master);

    header("Location: form_transaksi.php");
    exit();
}
?>
