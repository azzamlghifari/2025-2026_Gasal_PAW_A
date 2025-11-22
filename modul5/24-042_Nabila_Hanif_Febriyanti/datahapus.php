<?php
include 'koneksi.php';

// Pastikan parameter id dikirim dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query hapus data berdasarkan ID
    $query = "DELETE FROM supplier WHERE id = '$id'";

    if (mysqli_query($conn, $query)) {
        // Setelah berhasil hapus, kembali ke halaman utama
        header("Location: tampilan.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }

} else {
    echo "ID tidak ditemukan!";
}

mysqli_close($conn);
?>