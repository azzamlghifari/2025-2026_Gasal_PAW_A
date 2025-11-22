<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim      = trim($_POST['nim']);
    $nama     = trim($_POST['nama']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($nim) && !empty($nama) && !empty($email) && !empty($password)) {

        if (!preg_match("/^[0-9]{8,12}$/", $nim)) {
            echo "<h3 style='color:red'>NIM tidak valid!</h3>";
            echo "NIM harus berupa angka 8–12 digit.<br>";
            echo "<a href='formdatamhs.php'>← Kembali ke Form</a>";
        } elseif (!preg_match("/^[a-zA-Z ]+$/", $nama)) {
            echo "<h3 style='color:red'>Nama tidak valid!</h3>";
            echo "Nama hanya boleh mengandung huruf dan spasi.<br>";
            echo "<a href='formdatamhs.php'>← Kembali ke Form</a>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<h3 style='color:red'>Email tidak valid!</h3>";
            echo "Pastikan format email benar, misalnya: nama@gmail.com<br>";
            echo "<a href='formdatamhs.php'>← Kembali ke Form</a>";
        } elseif (strlen($password) < 6) {
            echo "<h3 style='color:red'>Password terlalu pendek!</h3>";
            echo "Password harus minimal 6 karakter.<br>";
            echo "<a href='formdatamhs.php'>← Kembali ke Form</a>";
        } else {

            echo "<h2>Data Mahasiswa Berhasil Divalidasi!</h2>";
            echo "<b>Data yang Anda masukkan:</b><br>";
            echo "NIM: " . htmlspecialchars($nim) . "<br>";
            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
            echo "Password: " . htmlspecialchars($password) . "<br>";
            echo "<hr>";
            echo "<a href='formdatamhs.php'>← Kembali ke Form</a>";
        }

    } else {

        echo "<h3 style='color:red'>ata tidak lengkap!</h3>";
        echo "Pastikan semua field diisi dengan benar.<br>";
        echo "<a href='formdatamhs.php'>← Kembali ke Form</a>";
    }

} else {

    echo "<h3 style='color:red'>kses tidak valid!</h3>";
    echo "<a href='formdatamhs.php'>← Kembali ke Form</a>";
}
?>
