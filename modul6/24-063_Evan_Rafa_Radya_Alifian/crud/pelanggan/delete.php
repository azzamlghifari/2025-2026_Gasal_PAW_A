<?php

require_once "../../config.php";

session_start();

$id_pelanggan = $_GET["id"] ?? null;

if ($id_pelanggan) {
  $sql_delete_data = "
    DELETE FROM pelanggan
    WHERE id = '$id_pelanggan';
  ";

  mysqli_query($conn, $sql_delete_data);

  if (mysqli_affected_rows($conn)) {
    mysqli_query($conn, $sql_delete_data);
    header("Location: ../../pages/pelanggan/index.php?success=Data berhasil dihapus");
    exit();
  } else {
    header("Location: ../../pages/pelanggan/index.php?failed=Data tidak ditemukan");
    exit();
  }
} else {
  header("Location: ../../pages/pelanggan/index.php?failed=Data tidak valid");
  exit();
}

