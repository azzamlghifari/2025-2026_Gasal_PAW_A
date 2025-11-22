<?php include 'db.php'; ?>
<?php
$id=$_GET['id'];
$result=$conn->query("SELECT * FROM supplier WHERE id=$id");
$row=$result->fetch_assoc();

if(isset($_POST['update'])){
  $nama=$_POST['nama'];$telp=$_POST['telp'];$alamat=$_POST['alamat'];
  $sql="UPDATE supplier SET nama='$nama', telp='$telp', alamat='$alamat' WHERE id=$id";
  if($conn->query($sql)){
    echo "<script>alert('Data supplier berhasil diupdate!');window.location='index.php';</script>";
  }else{
    echo "Error: ".$conn->error;
  }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Data Supplier</title>
        <style>
        body{
            font-family:Arial;
            padding:30px;
        }
        .container{
            background:#fff;
            width:400px;
            padding:20px;
            border-radius:8px;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);
        }
        h2{
            text-align:left;
            color:#005f99;
            margin-bottom:20px;
        }
        label{
            font-weight:bold;
            display:block;
            margin-top:10px;
        }
        input,textarea{
            width:100%;
            padding:8px;
            margin-top:6px;
            border:1px solid #ccc;
            border-radius:4px;
        }
        .button{
            background:#007BFF;
            color:white;
            border:none;
            padding:8px 12px;
            border-radius:4px;
            cursor:pointer;
            margin-top:15px;
        }
        .button:hover{
            opacity:0.9;
        }
        .btn-back{
            background:#6c757d;
            text-decoration:none;
            padding:8px 12px;
            color:white;
            border-radius:4px;
            margin-left:5px;
        }
        .btn-back:hover{
            opacity:0.9;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Edit Data Master Supplier</h2>
            <form method="post">
                <label>Nama</label><input type="text" name="nama" value="<?= $row['nama'] ?>" required>
                <label>Telp</label><input type="text" name="telp" value="<?= $row['telp'] ?>" required>
                <label>Alamat</label><textarea name="alamat" rows="3" required><?= $row['alamat'] ?></textarea>
                <input type="submit" name="update" value="Update" class="button">
                <a href="index.php" class="btn-back">Kembali</a>
            </form>
        </div>
    </body>
</html>
