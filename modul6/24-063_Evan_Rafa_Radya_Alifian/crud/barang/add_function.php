<?php

require_once "./../../config.php";


function add_barang($no_nota, $barang, $jumlah, $keterangan) {
  global $conn;

  $sql_insert_nota = "
    INSERT INTO nota (no_nota, keterangan)
    VALUES ('$no_nota', '$keterangan');
  ";

  mysqli_query($conn, $sql_insert_nota);

  $sql_select_barang = "SELECT * FROM barang WHERE nama_barang = '$barang'";
  $barang_res = mysqli_query($conn, $sql_select_barang);
  
  $b = mysqli_fetch_assoc($barang_res);
  $id_barang = $b["id"];
  $harga = $b["harga"];
  $subtotal = $harga * $jumlah;

  $sql_select_nota = "SELECT * FROM nota WHERE no_nota = '$no_nota'";
  $nota_res = mysqli_query($conn, $sql_select_nota);
  $nota = mysqli_fetch_assoc($nota_res);
  $id_nota = $nota["id"];

  $sql_insert_detail = "
    INSERT INTO nota_detail (id_nota, id_barang, jumlah, harga)
    VALUES ('$id_nota', '$id_barang', '$jumlah', '$harga');
  ";

  mysqli_query($conn, $sql_insert_detail);

  $sql_update_total = "UPDATE nota SET total_harga = '$subtotal' WHERE id = '$id_nota'";
  mysqli_query($conn, $sql_update_total);
}