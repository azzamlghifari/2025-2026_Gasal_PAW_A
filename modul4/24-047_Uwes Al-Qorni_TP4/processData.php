<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname  = trim($_POST['surname']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($surname) && !empty($email) && !empty($password)) {
        echo "<h2>Data Berhasil Divalidasi!</h2>";
        echo "<b>Data yang Anda masukkan:</b><br>";
        echo "Surname: " . htmlspecialchars($surname) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";
    } else {
        echo "<h3 style='color:red'>Data tidak lengkap!</h3>";
        echo "Pastikan semua field diisi dengan benar.<br>";
        echo "<a href='form.php'>← Kembali ke Form</a>";
    }
} else {
    // jika akses langsung ke file tanpa form
    echo "<h3 style='color:red'>Akses tidak valid!</h3>";
    echo "<a href='form.php'>← Kembali ke Form</a>";
}
?>
