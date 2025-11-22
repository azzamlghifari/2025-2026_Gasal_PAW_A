<?php

require_once "../../config.php";
require_once "../../utils.php";
require_once "./add_function.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // store form data
  $no_nota = trim(htmlspecialchars($_POST["no_nota"]));
  $barang = trim(htmlspecialchars($_POST["barang"]));
  $jumlah = (int) trim(htmlspecialchars($_POST["jumlah"])) ?? 1;
  $keterangan = trim(htmlspecialchars($_POST["keterangan"]));
  
  // init err msg in session
  $_SESSION["err_msg"] = [];
  
  // check if there are err msg
  if ($_SESSION["err_msg"]) {
    header("Location: ../../pages/barang/add.php?failed=Data gagal ditambah");
    exit();
  } else {
    // store data to database
    add_barang($no_nota, $barang, $jumlah, $keterangan);

    // reset err msg
    $_SESSION["err_msg"] = [];

    // check if query is succeded
    header("Location: ../../pages/barang/index.php?success=Data berhasil ditambah");
    exit();
  }
} else {
  header("Location: ../../pages/barang/index.php?failed=Gagal memuat halaman");
  exit();
}