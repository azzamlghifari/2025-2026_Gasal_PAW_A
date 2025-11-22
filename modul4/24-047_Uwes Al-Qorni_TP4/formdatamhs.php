<?php
require 'validasidatamhs.php';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    validateNIM($errors, $_POST, 'nim');
    validateName($errors, $_POST, 'nama');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');

    if (empty($errors)) {
        include 'processdatamhs.php';
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <h2>Form Input Data Mahasiswa</h2>

    <?php
    if ($errors) {
        echo "<p style='color:red'><b>Perbaiki error berikut:</b></p>";
        foreach ($errors as $field => $error) {
            echo "$field : $error<br>";
        }
        echo "<hr>";
    }
    ?>

    <form method="post" action="">
        <label>NIM:</label><br>
        <input type="text" name="nim" 
               value="<?= htmlspecialchars($_POST['nim'] ?? '') ?>"><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" 
               value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" 
               value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" 
               value="<?= htmlspecialchars($_POST['password'] ?? '') ?>"><br><br>

        <input type="submit" value="Kirim Data">
    </form>
</body>
</html>
