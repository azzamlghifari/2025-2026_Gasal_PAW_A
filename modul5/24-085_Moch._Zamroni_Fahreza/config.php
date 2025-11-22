<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$dbName = "db_penjualan";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if($conn){
  // echo "Koneksi berhasil";
}else{
  echo "Koneksi Gagal". mysqli_connect_error();
}
?>