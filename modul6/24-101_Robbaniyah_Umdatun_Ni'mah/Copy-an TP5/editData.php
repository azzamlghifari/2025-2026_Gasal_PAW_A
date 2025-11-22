<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Data supplier berhasil diupdate!');
                window.location.href = 'tampil.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal update data!');
                window.location.href = 'tampil.html';
              </script>";
    }
}
?>