<?php
require 'conn.php'; 

//jika pencet tombol simpan
if (isset($_POST['simpan'])) {
    $nama   = $_POST['nama'];
    $telp   = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO supplier (nama, telp, alamat)
              VALUES ('$nama', '$telp', '$alamat')";
    if (mysqli_query($conn, $query)) {
        header("Location: crud.php");
        exit();
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Master Supplier Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h2 {
            color: #007bff;
        }
        form {
            width: 400px;
        }
        label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 250px;
            padding: 6px;
            margin-bottom: 10px;
        }
        button {
            padding: 6px 15px;
            border: none;
            color: white;
            cursor: pointer;
        }
        .btn-green {
            background-color: green;
        }
        .btn-red {
            background-color: red;
        }
    </style>
</head>
<body>
    <h2>Tambah Data Master Supplier Baru</h2>
    <form method="POST">
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Nama" required><br>
        <label>Telp</label>
        <input type="text" name="telp" placeholder="Telp" required><br>
        <label>Alamat</label>
        <input type="text" name="alamat" placeholder="Alamat" required><br><br>
        <button type="submit" name="simpan" class="btn-green">Simpan</button>
        <a href="crud.php"><button type="button" class="btn-red">Batal</button></a>
    </form>
</body>
</html>
