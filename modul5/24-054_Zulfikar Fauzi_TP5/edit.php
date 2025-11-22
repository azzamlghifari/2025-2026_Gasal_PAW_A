<?php include 'koneksi.php'; ?>

<?php
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM supplier WHERE id=$id"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id=$id");
    echo "<script>alert('Data berhasil diupdate!');window.location='index.php';</script>";
}
?>

<h2 style="text-align:center;">Edit Supplier</h2>
<form method="POST" style="width:300px;margin:auto;">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br><br>

    <label>Telp:</label><br>
    <input type="text" name="telp" value="<?= $data['telp']; ?>" required><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat" value="<?= $data['alamat']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>
