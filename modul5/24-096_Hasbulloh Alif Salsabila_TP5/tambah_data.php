<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $sql_insert = "INSERT INTO supplier (nama, telp, alamat) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($koneksi, $sql_insert);
    mysqli_stmt_bind_param($stmt, "sss", $nama, $telp, $alamat);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        $error = "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Master Supplier Baru</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 50%; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        h2 { color: #007bff; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn-simpan { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px; }
        .btn-batal { background-color: #ff3333; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Data Baru</h2>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" placeholder="Nama" required>

        <label for="telp">Telp</label>
        <input type="text" id="telp" name="telp" placeholder="Telp">

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" placeholder="Alamat">
        
        <button type="submit" class="btn-simpan">Simpan</button>
        <a href="index.php" class="btn-batal">Batal</a>
    </form>
</div>

</body>
</html>