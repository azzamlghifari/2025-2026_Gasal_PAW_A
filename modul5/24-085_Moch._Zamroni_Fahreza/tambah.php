<?php 
require 'config.php';
$nama = $_POST['nama'] ?? "";
$telp = $_POST['telp'] ?? "";
$alamat = $_POST['alamat'] ?? "";

if(isset($_POST['simpan'])){
  $res = mysqli_query($conn, "INSERT INTO supplier (nama, telp, alamat) VALUES ('$nama', '$telp', '$alamat')");
  if($res){
    echo "<script>
          alert('Berhasil menyimpan data!');
          window.location.href = './index.php';
          </script>";
  }else{
    echo "<script>
          alert('Gagal menyimpan data!');
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
  <title>Tambah Data</title>
</head>

<body>
  <h2>Tambah Data Master Supplier Baru</h2>
  <form method="post">
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama">
    <br>
    <label for="telp">Telp</label>
    <input type="number" name="telp" id="telp">
    <br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat">
    <br>
    <br>
    <button name="simpan">Simpan</button>
    <button name="batal">Batal</button>
  </form>
</body>

</html>