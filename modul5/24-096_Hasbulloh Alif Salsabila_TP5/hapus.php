<?php
require 'koneksi.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id_supplier = $_GET['id'];

$sql_delete = "DELETE FROM supplier WHERE id_supplier = ?";

$stmt = mysqli_prepare($koneksi, $sql_delete);
mysqli_stmt_bind_param($stmt, "i", $id_supplier);

if (mysqli_stmt_execute($stmt)) {
    header("Location: index.php");
    exit();
} else {
    die("Gagal menghapus data: " . mysqli_error($koneksi));
}

mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>