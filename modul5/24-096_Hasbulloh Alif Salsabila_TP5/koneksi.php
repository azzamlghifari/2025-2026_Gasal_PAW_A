<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "penjualan";

$koneksi = mysqli_connect($host, $user, $pass, $db_name);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>