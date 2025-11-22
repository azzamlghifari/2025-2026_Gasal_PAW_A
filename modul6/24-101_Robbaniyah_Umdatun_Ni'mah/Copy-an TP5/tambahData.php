<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama', '$telp', '$alamat')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
                alert('Data supplier berhasil ditambahkan!');
                window.location.href = 'tampil.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambah data!');
                window.location.href = 'form.html';
              </script>";
    }
}
?>