<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Supplier</title>
</head>
<body>
    <h2>Edit Data Supplier</h2>
    <?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier='$id'");
    $data = mysqli_fetch_array($query);
    ?>

    <form action="" method="post">
        <label>Nama Supplier:</label><br>
        <input type="text" name="nama_supplier" value="<?php echo $data['nama_supplier']; ?>" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required><?php echo $data['alamat']; ?></textarea><br><br>

        <label>No. Telepon:</label><br>
        <input type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" required><br><br>

        <input type="submit" name="update" value="Update">
        <a href="index.php">Kembali</a>
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama_supplier'];
        $alamat = $_POST['alamat'];
        $no = $_POST['no_telp'];

        $update = mysqli_query($koneksi, "UPDATE supplier SET nama_supplier='$nama', alamat='$alamat', no_telp='$no' WHERE id_supplier='$id'");
        if ($update) {
            echo "<script>alert('Data berhasil diupdate'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Gagal mengupdate data');</script>";
        }
    }
    ?>
</body>
</html>
