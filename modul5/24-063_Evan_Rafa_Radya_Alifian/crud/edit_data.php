<?php

require_once "../config.php";
require_once "../utils.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // store form data
  $nama = trim(htmlspecialchars($_POST["nama"]));
  $telp = trim(htmlspecialchars($_POST["telp"]));
  $alamat = trim(htmlspecialchars($_POST["alamat"]));

  // get id
  $id_supplier = $_GET["id"];

  // init err msg in session
  $_SESSION["err_msg"] = [];

  // validate form
  validateName($nama);
  validateTelp($telp);
  validateAlamat($alamat);

  // check if there are err msg
  if ($_SESSION["err_msg"]) {
    header("Location: ../halaman_edit.php?failed=Data gagal diubah&id=$id_supplier");
    exit();
  } else {
    // store data to database
    $sql_edit_data = "
      UPDATE supplier
      SET nama = '$nama', telp = '$telp', alamat = '$alamat'
      WHERE id = '$id_supplier';
    ";

    // reset err msg
    $_SESSION["err_msg"] = [];

    // check if query is succeded
    if (mysqli_query($conn, $sql_edit_data)) {
      header("Location: ../index.php?success=Data berhasil diubah");
      exit();
    } else {
      header("Location: ../index.php?failed=Gagal mengubah data");
      exit();
    }
  }
} else {
  header("Location: ../index.php?failed=Gagal memuat halaman");
  exit();
}