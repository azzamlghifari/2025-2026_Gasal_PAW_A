<?php
require 'config.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: tampilan.php");
    exit();
}

$id_supplier = $_GET['id'];
$error = '';

$sql_select = "SELECT * FROM supplier WHERE id_supplier = ?";
$stmt = mysqli_prepare($config, $sql_select);
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
    
    $stmt_update = mysqli_prepare($config, $sql_update);
    mysqli_stmt_bind_param($stmt_update, "sssi", $nama_baru, $telp_baru, $alamat_baru, $id_supplier);

    if (mysqli_stmt_execute($stmt_update)) {
        header("Location: tampilan.php");
        exit();
    } else {
        $error = "Gagal meng-update data: " . mysqli_error($config);
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
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: #f4f7fb;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            padding: 30px 40px;
        }

        h2 {
            color: #2c3e50;
            font-size: 22px;
            border-left: 5px solid #3498db;
            padding-left: 10px;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-top: 15px;
            color: #34495e;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            margin-top: 6px;
            border: 1px solid #ccd6e0;
            border-radius: 6px;
            outline: none;
            font-size: 15px;
            background-color: #fdfdfd;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 4px rgba(52, 152, 219, 0.3);
        }

        .btn-update,
        .btn-batal {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 6px;
            color: #fff;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            text-decoration: none;
        }

        .btn-update {
            background-color: #3498db;
        }

        .btn-update:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .btn-batal {
            background-color: #e74c3c;
            margin-left: 8px;
        }

        .btn-batal:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }

        .error {
            color: #e74c3c;
            background: #fdecea;
            padding: 10px 15px;
            border-radius: 5px;
            border-left: 4px solid #e74c3c;
            margin-bottom: 15px;
        }

        /* ======= Responsif ======= */
        @media screen and (max-width: 600px) {
            .container {
                width: 90%;
                padding: 20px;
            }
            h2 {
                font-size: 20px;
            }
            .btn-update, .btn-batal {
                width: 100%;
                text-align: center;
                margin: 10px 0;
            }
        }
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
        <a href="tampilan.php" class="btn-batal" style="text-decoration: none; padding: 10px 15px;">Batal</a>
    </form>
</div>

</body>
</html>