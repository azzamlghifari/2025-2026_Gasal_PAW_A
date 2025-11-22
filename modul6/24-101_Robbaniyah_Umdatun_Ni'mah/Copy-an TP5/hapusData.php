<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM supplier WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Data supplier berhasil dihapus!');
                window.location.href = 'tampil.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data!');
                window.location.href = 'tampil.php';
              </script>";
    }
}
?>