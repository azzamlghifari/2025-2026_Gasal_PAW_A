<?php
function validateNama(&$errors, $fields, $name) {
  $value = trim($fields[$name]);
  if (empty($value)) {
    $errors[$name] = "Nama wajib diisi.";
  } elseif (!preg_match("/^[a-zA-Z\s'.-]+$/", $value)) {
    $errors[$name] = "Nama hanya boleh berisi huruf dan spasi.";
  }
}

function validateNIM(&$errors, $fields, $name) {
  $nim = trim($fields[$name]);
  if (empty($nim)) {
    $errors[$name] = "NIM wajib diisi.";
  } elseif (!preg_match("/^[0-9]{8,12}$/", $nim)) {
    $errors[$name] = "NIM harus berupa angka 8–12 digit.";
  }
}

function validateEmail(&$errors, $fields, $name) {
  $email = trim($fields[$name]);
  if (empty($email)) {
    $errors[$name] = "Email wajib diisi.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[$name] = "Format email tidak valid.";
  } elseif (!preg_match("/@student\.ac\.id$/", $email)) {
    $errors[$name] = "Gunakan email kampus (akhiran @student.ac.id).";
  }
}

function validatePassword(&$errors, $fields, $name) {
  $pass = $fields[$name];
  if (empty($pass)) {
    $errors[$name] = "Password wajib diisi.";
  } elseif (strlen($pass) < 8) {
    $errors[$name] = "Password minimal 8 karakter.";
  } elseif (!preg_match("/[A-Z]/", $pass)) {
    $errors[$name] = "Password harus memiliki huruf besar.";
  } elseif (!preg_match("/[0-9]/", $pass)) {
    $errors[$name] = "Password harus memiliki angka.";
  }
}

function validateTanggal(&$errors, $fields, $name) {
  if (empty($fields[$name])) {
    $errors[$name] = "Tanggal lahir wajib diisi.";
  } else {
    $tanggal = explode("-", $fields[$name]);
    if (count($tanggal) === 3) {
      if (!checkdate($tanggal[1], $tanggal[2], $tanggal[0])) {
        $errors[$name] = "Format tanggal lahir tidak valid.";
      }
    } else {
      $errors[$name] = "Format tanggal salah.";
    }
  }
}

function validateIPK(&$errors, $fields, $name) {
  $ipk = trim($fields[$name]);
  if ($ipk === "") {
    $errors[$name] = "IPK wajib diisi.";
  } elseif (!is_numeric($ipk)) {
    $errors[$name] = "IPK harus berupa angka.";
  } elseif ($ipk < 0 || $ipk > 4) {
    $errors[$name] = "IPK harus antara 0.00 dan 4.00.";
  }
}
?>
