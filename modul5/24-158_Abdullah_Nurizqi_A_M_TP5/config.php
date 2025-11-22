<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "kasir";

$config = mysqli_connect($host, $user, $pass, $db_name);

if (!$config) {
    die("config gagal: " . mysqli_connect_error());
}
?>