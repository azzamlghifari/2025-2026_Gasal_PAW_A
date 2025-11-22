<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM supplier");

?>
<html>
<head><h2>Data Master Supplier</h2></head>
<body>
    <style>
        h2{
            font-family: Arial;
        }
        table{
            border-collapse: collapse;
            width: 60%;
        }

        .top-bar{
            width: 60%;
            display: flex;
            justify-content: flex-end;
            margin-bottom: 9px;
        }

        th, td{
            font-family: Arial;
            font-size: 14px;
            padding: 5px;
        }

        th{
            background-color: lightcyan;
        }

        .btn{
            color: white;
            background: linear-gradient(360deg, #0dbb5bff, #2bed38ff);
            border: none;
            padding: 7px 10px;
            border-radius: 3px;
            font-size: 10px;
            cursor: pointer;
        }

        .edt{
            color: white;
            background: linear-gradient(360deg, #dd3c0aff, #ed6137ff);
            border: none;
            padding: 7px 10px;
            border-radius: 3px;
            font-size: 10px;
            cursor: pointer;
        }

        .hps{
            color: white;
            background: linear-gradient(360deg, #9f0000ff, #e40404ff);
            border: none;
            padding: 7px 10px;
            border-radius: 3px;
            font-size: 10px;
            cursor: pointer;
        }
    </style>
    <div class="top-bar">
        <a href="form.html"><button class="btn">Tambah Data</button></a>
    </div>

    <table border="1">
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Telp</th>
        <th>Alamat</th>
        <th>Tindakan</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['telp'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td align='center'>
                        <a href='formEdit.php?id=" . $row['id'] . "'>
                            <button class='edt'>Edit</button>
                        </a>
                        <a href='hapusData.php?id=" . $row['id'] . "'
                            onclick=\"return confirm('Anda yakin akan menghapus supplier ini?')\">
                                <button class='hps'>Hapus</button>
                        </a>
                    </td>";
                echo "</tr>";
            }
        } else{
            echo "Gaada datanya bre";
        }
        ?>
    </table>
</body>
</html>