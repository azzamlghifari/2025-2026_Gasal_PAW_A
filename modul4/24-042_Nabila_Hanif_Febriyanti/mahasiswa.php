<?php
require 'mahasiswa_validate.inc';
$errors = array(); 

if (isset($_POST['submit_form'])) {
    validateName($errors, $_POST, 'nama_depan');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');
    if ($errors) {
        include 'mahasiswa_form.inc'; 
    } else {
        echo '<h1>Registrasi Berhasil!</h1>';
        echo '<p>Selamat datang mahasiswa semester 3 , ' . htmlspecialchars($_POST['nama_depan']) . '!</p>';
    }
} else {
    include 'mahasiswa_form.inc'; 
}
?>