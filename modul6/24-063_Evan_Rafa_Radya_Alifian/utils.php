<?php

function validateName($name) {
  $pattern = "/^[a-zA-Z-' ]*$/";

  if (!$name) {
    $_SESSION["err_msg"][] = "Nama tidak boleh kosong";
  } else if (!preg_match($pattern, $name)) {
    $_SESSION["err_msg"][] = "Format nama tidak sesuai";
  }
}

function validateTelp($telp) {
  if (!$telp) {
    $_SESSION["err_msg"][] = "Nomor telepon tidak boleh kosong dan harus berjumlah 12 angka";
  } else if (strlen($telp) < 12 || strlen($telp) > 12) {
    $_SESSION["err_msg"][] = "Nomor telepon harus berjumlah 12 angka";
  }
}

function validateAlamat($alamat) {
  if (!$alamat) {
    $_SESSION["err_msg"][] = "Alamat tidak boleh kosong";
  }
}