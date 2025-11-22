<?php
require 'conn.php'; // koneksi database

// Cek apakah ID dikirim lewat URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: crud.php");
    exit();
}

$id = intval($_GET['id']); // pastikan ID berupa angka

// Ambil data supplier berdasarkan ID
$result = mysqli_query($conn, "SELECT * FROM supplier WHERE id=$id");
$data = mysqli_fetch_assoc($result);

// Jika data tidak ditemukan, redirect
if (!$data) {
    header("Location: crud.php");
    exit();
}

// Jika tombol Update ditekan
if (isset($_POST['update'])) {
    $nama   = mysqli_real_escape_string($conn, $_POST['nama']);
    $telp   = mysqli_real_escape_string($conn, $_POST['telp']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);

    $query = "UPDATE supplier SET 
              nama='$nama', 
              telp='$telp', 
              alamat='$alamat' 
              WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        // Redirect ke crud.php setelah update
        header("Location: crud.php");
        exit();
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Master Supplier</title>
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
    <h2>Edit Data Master Supplier</h2>
    <form method="POST">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']); ?>" required><br>
        <label>Telp</label>
        <input type="text" name="telp" value="<?= htmlspecialchars($data['telp']); ?>" required><br>
        <label>Alamat</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($data['alamat']); ?>" required><br><br>
        <button type="submit" name="update" class="btn-green">Update</button>
        <a href="crud.php"><button type="button" class="btn-red">Batal</button></a>
    </form>
</body>
</html>
