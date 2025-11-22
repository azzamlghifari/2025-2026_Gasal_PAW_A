<?php
include 'koneksi.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    if ($id){
        $sql = "SELECT * FROM supplier WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            $supplier = mysqli_fetch_assoc($result);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Form Edit Data</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <h2 style="color: cornflowerblue; font-family: Verdana;">Form Edit Data Supplier</h2>
    <style>
        .nama{
            color: grey;
        }
        .telp{
            color: grey;
        }
        .alamat{
            color: grey;
        }
        .simpan{
            background: linear-gradient(360deg, #0dbb5bff, #2bed38ff);
            border: none;
            color: white;
            padding: 7px 10px;
            border-radius: 3px;
            font-size: 10px;
            cursor: pointer;
        }
        .batal{
            background: linear-gradient(360deg, #9f0000ff, #e40404ff);
            border: none;
            color: white;
            padding: 7px 10px;
            border-radius: 3px;
            font-size: 10px;
            cursor: pointer;
        }
    </style>
    <form action="editData.php" method="POST">
        <input type="text" type="text" value="<?= $supplier["id"]; ?>" name="id" hidden>
        <table>
            <tr align="left">
                <th>Nama</th>
                <th><input  value='<?= $supplier["nama"]; ?>' name="nama" class="nama"><br></th>
            </tr>
            <tr align="left">
                <th>Telp</th>
                <th><input value='<?= $supplier["telp"]; ?>' name="telp" class="telp"><br></th>
            </tr>
            <tr align="left">
                <th>Alamat</th>
                <th><input value='<?= $supplier["alamat"]; ?>' name="alamat" class="alamat"><br></th>
            </tr>
            <tr>
                <th></th>
                <th align="left"><button class="simpan">Update</button> <button class="batal"><a href="tampil.php" style="text-decoration: none; color: white;">Batal</a></button></th>
            </tr>
        </table>
    </form>
</body>
</html>