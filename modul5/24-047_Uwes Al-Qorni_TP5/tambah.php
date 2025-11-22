<form method="POST" action="">
    Nama Supplier: <input type="text" name="nama_supplier"><br>
    Alamat: <input type="text" name="alamat"><br>
    Telepon: <input type="text" name="telepon"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" name="simpan" value="Simpan">
</form>

<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
    $nama_supplier = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    mysqli_query($koneksi, "INSERT INTO supplier VALUES('', '$nama_supplier', '$alamat', '$telepon', '$email')");
    header("Location: index.php");
}
?>
