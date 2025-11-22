<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require 'validate.inc';

  validateNama($errors, $_POST, 'nama');
  validateNIM($errors, $_POST, 'nim');
  validateEmail($errors, $_POST, 'email');
  validatePassword($errors, $_POST, 'password');
  validateTanggal($errors, $_POST, 'tgl_lahir');
  validateIPK($errors, $_POST, 'ipk');

  if ($errors) {
    echo "<h2>Periksa kembali input berikut:</h2><ul>";
    foreach ($errors as $error) {
      echo "<li>$error</li>";
    }
    echo "</ul>";
    include 'form.inc';  
  } else {
    echo "<h2>Data berhasil dikirim!</h2>";
    echo "<p>Semua input valid </p>";
  }
} else {
  include 'form.inc';  
}
?>
