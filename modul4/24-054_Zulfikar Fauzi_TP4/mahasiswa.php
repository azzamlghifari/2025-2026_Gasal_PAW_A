<?php
$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'validate_mhs.inc';
    
    validateName($errors, $_POST, 'nama');
    validateNIM($errors, $_POST, 'nim');
    validateEmail($errors, $_POST, 'email');
    validateProdi($errors, $_POST, 'prodi');
    validateIPK($errors, $_POST, 'ipk');

    if ($errors) {
        echo '<h3>Data tidak valid! Mohon perbaiki kesalahan berikut:</h3>';
        echo '<ul>';
        foreach ($errors as $field => $error) {
            echo "<li><strong>$field:</strong> $error</li>";
        }
        echo '</ul><hr>';
        include 'form_mhs.inc';
    } else {
        echo '<h2>Data Mahasiswa Berhasil Disimpan!</h2>';
        echo '<p><strong>Nama:</strong> ' . htmlspecialchars($_POST['nama']) . '</p>';
        echo '<p><strong>NIM:</strong> ' . htmlspecialchars($_POST['nim']) . '</p>';
        echo '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
        echo '<p><strong>Program Studi:</strong> ' . htmlspecialchars($_POST['prodi']) . '</p>';
        echo '<p><strong>IPK:</strong> ' . htmlspecialchars($_POST['ipk']) . '</p>';
    }
} else {
    include 'form_mhs.inc';
}
?>