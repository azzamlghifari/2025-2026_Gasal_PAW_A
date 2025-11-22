<?php
$errors = [];

$nama = trim($_POST['nama']);
$nim = trim($_POST['nim']);
$email = trim($_POST['email']);
$password = $_POST['password'];
$jurusan = $_POST['jurusan'];

// Validasi Nama 
if (empty($nama)) {
    $errors['nama'] = "Nama tidak boleh kosong.";
} elseif (!preg_match("/^[a-zA-Z\s]+$/", $nama)) {
    $errors['nama'] = "Nama hanya boleh huruf dan spasi.";
}

//  Validasi NIM 
if (empty($nim)) {
    $errors['nim'] = "NIM wajib diisi.";
} elseif (!is_numeric($nim)) {
    $errors['nim'] = "NIM harus berupa angka.";
}

//  Validasi Email (regex) 
if (empty($email)) {
    $errors['email'] = "Email wajib diisi.";
} elseif (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w+$/", $email)) {
    $errors['email'] = "Format email tidak valid.";
}

//  Validasi Password (panjang minimal) 
if (empty($password)) {
    $errors['password'] = "Password wajib diisi.";
} elseif (strlen($password) < 8) {
    $errors['password'] = "Password minimal 8 karakter.";
}

//  Validasi Jurusan 
if (empty($jurusan)) {
    $errors['jurusan'] = "Jurusan wajib dipilih.";
}

//  Tampilkan Hasil 
if ($errors) {
    echo "<h3>Data Tidak Valid:</h3>";
    foreach ($errors as $field => $msg) {
        echo "<b>$field:</b> $msg <br>";
    }
} else {
    echo "<h3>Data Mahasiswa Valid!</h3>";
    echo "Nama: $nama <br>";
    echo "NIM: $nim <br>";
    echo "Email: $email <br>";
    echo "Jurusan: $jurusan <br>";
}
?>
