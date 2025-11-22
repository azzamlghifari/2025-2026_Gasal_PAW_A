	<?php
	$servername = "localhost";
	$username   = "root";
    	$password   = "";
	$dbname     = "modul5_db";
	
	// Koneksi ke MySQL
	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
	    die("Koneksi gagal: " . $conn->connect_error);
	}
	
	// Buat database jika belum ada
	$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
	$conn->close();
	
	// Koneksi ulang ke database
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Buat tabel supplier jika belum ada
	$sql = "
	CREATE TABLE IF NOT EXISTS supplier (
	    id INT AUTO_INCREMENT PRIMARY KEY,
	    nama VARCHAR(100) NOT NULL,
	    telp VARCHAR(20) NOT NULL,
	    alamat TEXT NOT NULL
	)";
	$conn->query($sql);30.	?>
	<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "modul5_db";
	
	// Koneksi ke MySQL
	$conn = new mysqli($servername, $username, $password);
	if ($conn->connect_error) {
	    die("Koneksi gagal: " . $conn->connect_error);
	}
	
	// Buat database jika belum ada
	$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
	$conn->close();
	
	// Koneksi ulang ke database
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Buat tabel supplier jika belum ada
	$sql = "
	CREATE TABLE IF NOT EXISTS supplier (
	    id INT AUTO_INCREMENT PRIMARY KEY,
	    nama VARCHAR(100) NOT NULL,
	    telp VARCHAR(20) NOT NULL,
        alamat TEXT NOT NULL
	)";
    $conn->query($sql);
?>
