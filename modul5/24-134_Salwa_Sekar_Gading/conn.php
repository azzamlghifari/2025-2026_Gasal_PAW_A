<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='modul5';


$conn=mysqli_connect($hostname, $username, $password, $dbname);
// if($conn){
//     echo 'koneksi berhasil';
// }else{
//     echo 'koneksi gagal';
// }

// $query='CREATE DATABASE modul5';
// if(mysqli_query($conn, $query)){
//     echo 'db berhasil di buat';
// }else{
//     echo 'db tidak berhasil';
// }

// $query="CREATE TABLE supplier(
//     id INT(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     nama TEXT(50) NOT NULL,
//     telp VARCHAR(20) NOT NULL,
//     alamat VARCHAR(100) NOT NULL
// )";

// if(mysqli_query($conn,$query)){
//     echo 'table berhasil di buat';
// }else{
//     echo 'tabel tidak berhasil'.mysqli_error($conn);
// }


// mysqli_close($conn);
?>
