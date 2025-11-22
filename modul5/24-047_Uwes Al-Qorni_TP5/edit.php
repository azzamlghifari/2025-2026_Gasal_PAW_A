<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<form method="POST" action="">
    Nama Supplier: <input type="text" name="nama_supplier" value="<?php echo $d['nama_supplier']; ?>"><br>
    Alamat: <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"><br>
    Telepon: <input type="text" name="telepon" value="<?php echo $d['telepon']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $d['email']; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if(isset($_POST['update'])){
    $nama_supplier = $_POST['nama_supplier'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    mysqli_query($koneksi, "UPDATE supplier SET 
        nama_supplier='$nama_supplier',
        alamat='$alamat',
        telepon='$telepon',
        email='$email'
        WHERE id='$id'");
    header("Location: index.php");
}
?>
