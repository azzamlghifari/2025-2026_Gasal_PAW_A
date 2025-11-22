<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama', '$telp', '$alamat')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: tampilan.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
} else {
    echo "Akses tidak sah.";
}
?>