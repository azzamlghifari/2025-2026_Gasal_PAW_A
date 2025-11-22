<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'validate.inc';

    validateName($errors, $_POST, 'nama');
    validateNIM($errors, $_POST, 'nim');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');

    if ($errors) {
        echo '<h2 style="color:red;">Terdapat kesalahan, perbaiki input berikut:</h2>';
        echo '<ul style="color:red;">';
        foreach ($errors as $field => $error) {
            echo "<li><b>$field</b>: $error</li>";
        }
        echo '</ul>';
        include 'form.inc';
    } else {
        echo '<h2 style="color:green;">Data Mahasiswa Berhasil Dikirim!</h2>';
        echo '<ul>';
        echo '<li><b>Nama:</b> ' . htmlspecialchars($_POST['nama']) . '</li>';
        echo '<li><b>NIM:</b> ' . htmlspecialchars($_POST['nim']) . '</li>';
        echo '<li><b>Email:</b> ' . htmlspecialchars($_POST['email']) . '</li>';
        echo '</ul>';
        include 'form.inc';
    }
} else {
    include 'form.inc';
}
?>
