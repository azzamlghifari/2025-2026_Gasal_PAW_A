<?php 
require 'config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $res = mysqli_query($conn, "DELETE FROM supplier WHERE id = $id");

  if ($res) {
    echo "<script>
      alert('Data berhasil dihapus!');
      window.location.href = './index.php';
    </script>";
  } else {
    echo "<script>
      alert('Gagal menghapus data!');
      window.location.href = './index.php';
    </script>";
  }
} else {
  echo "<script>
    alert('ID tidak ditemukan!');
    window.location.href = './index.php';
  </script>";
}
?>