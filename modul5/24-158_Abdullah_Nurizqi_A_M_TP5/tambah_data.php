<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $sql_insert = "INSERT INTO supplier (nama, telp, alamat) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($config
, $sql_insert);
    mysqli_stmt_bind_param($stmt, "sss", $nama, $telp, $alamat);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: tampilan.php");
        exit();
    } else {
        $error = "Gagal menyimpan data: " . mysqli_error($config
);
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
       body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f4f7fb;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 60px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            padding: 35px 40px;
        }

        h2 {
            color: #2c3e50;
            border-left: 5px solid #27ae60;
            padding-left: 10px;
            font-size: 22px;
            margin-bottom: 25px;
        }

        label {
            font-weight: 600;
            color: #34495e;
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            margin-top: 6px;
            border: 1px solid #ccd6e0;
            border-radius: 6px;
            font-size: 15px;
            background-color: #fafafa;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #27ae60;
            box-shadow: 0 0 6px rgba(39, 174, 96, 0.3);
            background-color: #fff;
        }

        .btn-simpan,
        .btn-batal {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 6px;
            color: #fff;
            font-weight: 600;
            border: none;
            cursor: pointer;
            margin-top: 25px;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn-simpan {
            background-color: #27ae60;
        }
        .btn-simpan:hover {
            background-color: #2ecc71;
            transform: translateY(-2px);
            box-shadow: 0 3px 6px rgba(46, 204, 113, 0.3);
        }

        .btn-batal {
            background-color: #e74c3c;
            margin-left: 8px;
        }
        .btn-batal:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 3px 6px rgba(231, 76, 60, 0.3);
        }

        .error {
            color: #e74c3c;
            background: #fdecea;
            padding: 10px 15px;
            border-radius: 5px;
            border-left: 4px solid #e74c3c;
            margin-bottom: 15px;
        }

        /* ==== Responsive ==== */
        @media (max-width: 600px) {
            .container {
                width: 90%;
                padding: 25px;
            }
            h2 {
                font-size: 20px;
            }
            .btn-simpan, .btn-batal {
                width: 100%;
                margin: 10px 0;
                text-align: center;
            }
        } 
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
        <a href="index.php" class="btn-batal" style="text-decoration: none; padding: 10px 15px;">Batal</a>
    </form>
</div>

</body>
</html>