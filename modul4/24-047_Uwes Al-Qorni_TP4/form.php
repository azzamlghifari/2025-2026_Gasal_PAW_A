<?php
require 'validateinc.php';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');

    if (empty($errors)) {
        include 'processData.php';
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Form Input Mahasiswa</h2>

    <?php
    if ($errors) {
        echo "<p style='color:red'><b> Perbaiki error berikut:</b></p>";
        foreach ($errors as $field => $error) {
            echo "$field : $error<br>";
        }
        echo "<hr>";
    }
    ?>

    <form method="post" action="">
        <label>Surname:</label><br>
        <input type="text" name="surname"
               value="<?= isset($_POST['surname']) ? htmlspecialchars($_POST['surname']) : '' ?>"><br><br>

        <label>Email:</label><br>
        <input type="text" name="email"
               value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"
               value="<?= isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '' ?>"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
