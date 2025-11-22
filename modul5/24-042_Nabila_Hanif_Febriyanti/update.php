<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        header("Location: tampilan.php");
        exit();
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }

} else {
    echo "Akses tidak sah.";
}
?>