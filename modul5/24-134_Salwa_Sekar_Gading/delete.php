<?php
require 'conn.php'; // koneksi database

$id = $_GET['id'] ?? null;

if ($id) {
    $query = "DELETE FROM supplier WHERE id = $id";
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href='crud.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location.href='crud.php';
              </script>";
    }
} else {
    echo "<script>
            alert('ID tidak ditemukan!');
            window.location.href='crud.php';
          </script>";
}

mysqli_close($conn);
?>
