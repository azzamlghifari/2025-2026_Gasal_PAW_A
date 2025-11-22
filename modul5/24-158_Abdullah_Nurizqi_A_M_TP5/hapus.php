<?php
require 'config.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: tampilan.php");
    exit();
}

$id_supplier = $_GET['id'];

$sql_delete = "DELETE FROM supplier WHERE id_supplier = ?";

$stmt = mysqli_prepare($config, $sql_delete);
mysqli_stmt_bind_param($stmt, "i", $id_supplier);

if (mysqli_stmt_execute($stmt)) {
    header("Location: tampilan.php");
    exit();
} else {
    die("Gagal menghapus data: " . mysqli_error($config));
}

mysqli_stmt_close($stmt);
mysqli_close($config);
?>