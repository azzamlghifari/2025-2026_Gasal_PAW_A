<?php include 'koneksi.php'; ?>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama', '$telp', '$alamat')");
    echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
}
?>

<h2 style="text-align:center;">Tambah Supplier</h2>
<form method="POST" style="width:300px;margin:auto;">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Telp:</label><br>
    <input type="text" name="telp" required><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat" required><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>
