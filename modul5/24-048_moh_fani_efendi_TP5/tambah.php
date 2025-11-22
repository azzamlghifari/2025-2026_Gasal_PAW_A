<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Supplier</title>
</head>
<body>
    <h2>Tambah Data Supplier</h2>
    <form action="" method="post">
        <label>Nama Supplier:</label><br>
        <input type="text" name="nama_supplier" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label>No. Telepon:</label><br>
        <input type="text" name="no_telp" required><br><br>

        <input type="submit" name="simpan" value="Simpan">
        <a href="index.php">Kembali</a>
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama_supplier'];
        $alamat = $_POST['alamat'];
        $no = $_POST['no_telp'];

        $query = mysqli_query($koneksi, "INSERT INTO supplier (nama_supplier, alamat, no_telp) VALUES ('$nama', '$alamat', '$no')");
        if ($query) {
            echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Gagal menambah data');</script>";
        }
    }
    ?>
</body>
</html>
