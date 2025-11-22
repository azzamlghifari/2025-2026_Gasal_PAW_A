<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$errors = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'validate.inc';

   
    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');
    validateAge($errors, $_POST, 'age');

    if ($errors) {
        echo '<h2 style="color:red;">Invalid, correct the following errors:</h2>';
        echo '<ul>';
        foreach ($errors as $field => $error) {
            echo "<li><strong>$field</strong>: $error</li>";
        }
        echo '</ul>';
        include 'form.inc';
    } else {
        echo '<h2 style="color:green;">Data Mahasiswa Valid </h2>';
        echo '<ul>';
        echo '<li>Nama: ' . htmlspecialchars($_POST['surname']) . '</li>';
        echo '<li>Email: ' . htmlspecialchars($_POST['email']) . '</li>';
        echo '<li>Umur: ' . htmlspecialchars($_POST['age']) . '</li>';
        echo '</ul>';
    }
} else {
    include 'form.inc1';
}
?>
