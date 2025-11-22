<?php

require_once "../../config.php";
require_once "../../utils.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // store form data
  $nama = trim(htmlspecialchars($_POST["nama"]));
  $gender = strtoupper(trim(htmlspecialchars($_POST["gender"])));
  $telp = trim(htmlspecialchars($_POST["telp"]));
  $alamat = trim(htmlspecialchars($_POST["alamat"]));

  // init err msg in session
  $_SESSION["err_msg"] = [];

  // validate form
  validateName($nama);
  validateTelp($telp);
  validateAlamat($alamat);

  // check if there are err msg
  if ($_SESSION["err_msg"]) {
    header("Location: ../../pages/pelanggan/add.php?failed=Data gagal ditambah");
    exit();
  } else {
    // store data to database
    $sql_add_data = "
      INSERT INTO pelanggan (nama, jenis_kelamin, telp, alamat)
      VALUES ('$nama', '$gender', '$telp', '$alamat');
    ";

    // reset err msg
    $_SESSION["err_msg"] = [];

    // check if query is succeded
    if (mysqli_query($conn, $sql_add_data)) {
      header("Location: ../../pages/pelanggan/index.php?success=Data berhasil ditambah");
      exit();
    } else {
      header("Location: ../../pages/pelanggan/index.php?failed=Gagal menambahkan data");
      exit();
    }
  }
} else {
  header("Location: ../../pages/pelanggan/index.php?failed=Gagal memuat halaman");
  exit();
}