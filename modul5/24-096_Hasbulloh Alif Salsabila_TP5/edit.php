<?php
require 'koneksi.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id_supplier = $_GET['id'];
$error = '';

$sql_select = "SELECT * FROM supplier WHERE id_supplier = ?";
$stmt = mysqli_prepare($koneksi, $sql_select);
mysqli_stmt_bind_param($stmt, "i", $id_supplier);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 0) {
    echo "Data supplier tidak ditemukan.";
    exit();
}
$data = mysqli_fetch_assoc($result);
mysqli_stmt_close($stmt);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_baru = $_POST['nama'];
    $telp_baru = $_POST['telp'];
    $alamat_baru = $_POST['alamat'];

    $sql_update = "UPDATE supplier SET nama = ?, telp = ?, alamat = ? WHERE id_supplier = ?";
    
    $stmt_update = mysqli_prepare($koneksi, $sql_update);
    mysqli_stmt_bind_param($stmt_update, "sssi", $nama_baru, $telp_baru, $alamat_baru, $id_supplier);

    if (mysqli_stmt_execute($stmt_update)) {
        header("Location: index.php");
        exit();
    } else {
        $error = "Gagal meng-update data: " . mysqli_error($koneksi);
    }
    mysqli_stmt_close($stmt_update);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Master Supplier</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 50%; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        h2 { color: #007bff; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn-update { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; margin-right: 10px; }
        .btn-batal { background-color: #ff3333; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data</h2>
    <?php if ($error) { echo "<p style='color:red;'>$error</p>"; } ?>
    
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required>

        <label for="telp">Telp</label>
        <input type="text" id="telp" name="telp" value="<?php echo htmlspecialchars($data['telp']); ?>">

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo htmlspecialchars($data['alamat']); ?>">
        
        <button type="submit" class="btn-update">Update</button>
        <a href="index.php" class="btn-batal">Batal</a>
    </form>
</div>

</body>
</html>