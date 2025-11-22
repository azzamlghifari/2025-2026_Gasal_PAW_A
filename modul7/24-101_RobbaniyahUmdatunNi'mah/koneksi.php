<?php
$conn = mysqli_connect('localhost', 'root', '', 'penjualan');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}