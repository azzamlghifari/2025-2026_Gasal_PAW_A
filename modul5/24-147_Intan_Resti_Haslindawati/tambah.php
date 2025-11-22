<?php include 'db.php'; ?>

<html>
    <title>Tambah Data Supplier</title>
    <style>
    body{
        font-family:Arial;
        background:#eef3ff;
        padding:30px;
        display:flex;
        justify-content:flex-end;
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
    .button{background:#007BFF;
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
            <h2>Tambah Data Master Supplier Baru</h2>
            <form method="post">
            <label>Nama</label><input type="text" name="nama" required>
            <label>Telp</label><input type="text" name="telp" required>
            <label>Alamat</label><textarea name="alamat" rows="3" required></textarea>
            <input type="submit" name="submit" value="Simpan" class="button">
            <a href="index.php" class="btn-back">Kembali</a>
                </form>
                <?php
                if(isset($_POST['submit'])){
                    $nama=$_POST['nama'];$telp=$_POST['telp'];$alamat=$_POST['alamat'];
                    $sql="INSERT INTO supplier (nama,telp,alamat) VALUES ('$nama','$telp','$alamat')";
                    if($conn->query($sql)){
                        echo "<script>alert('Data supplier berhasil ditambahkan!');window.location='index.php';</script>";
                    }else{
                        echo "Error: ".$conn->error;
                    }
                }
                ?>
            </div>
        </body>
</html>
