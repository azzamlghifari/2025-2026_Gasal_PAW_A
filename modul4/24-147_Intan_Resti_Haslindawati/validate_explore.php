<?php

// simulasi input
$_POST = [
    'fullname'   => " Kania Alisha  ",
    'user_email' => "alishaa@@gmail.com",  // salah
    'user_age'   => "20a",               // salah
    'birth_date' => [30, 2, 2003],       // salah (Feb 30 tidak ada)
    'user_phone' => "08123abc45",        // salah
    'user_url'   => "https://k.niaAlishaa.my.id" // benar
];

$errors = [];

// Validasi nama preg_match(Regular Expression)
$fullName = trim($_POST['fullname']); // hapus spasi depan/belakang
if (!preg_match("/^[a-zA-Z\s'-]+$/", $fullName)) {
    $errors['fullname'] = "Nama hanya boleh huruf dan spasi.";
}

// fungsi string
$nameLower = strtolower($fullName);
$nameUpper = strtoupper($fullName);

// Validasi email (filter)
if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
    $errors['user_email'] = "Format email tidak valid.";
}

// Validasi umur (type testing)
if (!is_numeric($_POST['user_age'])) {
    $errors['user_age'] = "Umur harus berupa angka.";
}

// Validasi tanggal (checkdate)
list($day, $month, $year) = $_POST['birth_date'];
if (!checkdate($month, $day, $year)) {
    $errors['birth_date'] = "Tanggal lahir tidak valid.";
}

// Validasi nomor telepon (regex)
if (!preg_match("/^[0-9]{10,13}$/", $_POST['user_phone'])) {
    $errors['user_phone'] = "Nomor telepon harus 10–13 digit angka.";
}

// Validasi URL (filter)
if (!filter_var($_POST['user_url'], FILTER_VALIDATE_URL)) {
    $errors['user_url'] = "Alamat website tidak valid.";
}

// Tampilkan hasil
if ($errors) {
    echo "<h2>Data Tidak Valid:</h2>";
    foreach ($errors as $field => $msg) {
        echo "<b>$field:</b> $msg <br>";
    }
} else {
    echo "<h2> Semua data valid!</h2>";
}

// Tampilkan contoh hasil fungsi string
echo "<hr>";
echo "<b>Nama asli:</b> '".$_POST['fullname']."' <br>";
echo "<b>Setelah trim:</b> '$fullName' <br>";
echo "<b>Huruf kecil:</b> '$nameLower' <br>";
echo "<b>Huruf besar:</b> '$nameUpper' <br>";
?>
