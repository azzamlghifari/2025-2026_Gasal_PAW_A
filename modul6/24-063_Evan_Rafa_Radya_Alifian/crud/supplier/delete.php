<?php

require_once "../../config.php";

session_start();

$id_supplier = $_GET["id"] ?? null;

if ($id_supplier) {
  $sql_delete_data = "
    DELETE FROM supplier
    WHERE id = '$id_supplier';
  ";

  mysqli_query($conn, $sql_delete_data);

  if (mysqli_affected_rows($conn)) {
    mysqli_query($conn, $sql_delete_data);
    header("Location: ../../index.php?success=Data berhasil dihapus");
    exit();
  } else {
    header("Location: ../../index.php?failed=Data tidak ditemukan");
    exit();
  }
} else {
  header("Location: ../../index.php?failed=Data tidak valid");
  exit();
}

