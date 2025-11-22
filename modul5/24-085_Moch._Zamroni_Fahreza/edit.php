<?php 
require 'config.php';

$id = $_GET['id'];
$res = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM supplier WHERE id = $id"));

if(isset($_POST['update'])){
  $nama = $_POST['nama'] ?? "";
  $telp = $_POST['telp'] ?? "";
  $alamat = $_POST['alamat'] ?? "";

  $update = mysqli_query($conn, "UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id='$id'");

  if($update){
    echo "<script>
      alert('Berhasil mengupdate data!');
      window.location.href = './index.php';
      </script>";
    }else{
    echo "<script>
      alert('Gagal mengupdate data!');
      window.location.href = './index.php';
      </script>";
  }
}

if(isset($_POST['batal'])){
  header("Location: ./index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Edit Data</title>
</head>

<body>
  <h2>Edit Data Master Supplier</h2>
  <form method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" value="<?= $res['nama']; ?>">
    <br>
    <label for="telp">Telp</label>
    <input type="number" name="telp" id="telp" value="<?= $res['telp']; ?>">
    <br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" value="<?= $res['alamat']; ?>">
    <br>
    <br>
    <button name="update">Update</button>
    <button name="batal">Batal</button>
  </form>
</body>

</html>