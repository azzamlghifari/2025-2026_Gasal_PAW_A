<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db   = "penjualan";

$conn = mysqli_connect($hostname, $username, $password, $db);

if(!$conn) {
    die('error'.mysqli_connect_error());
}
?>
