<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Supplier</title>
</head>
<body>
    <h2>Data Supplier</h2>
    <a href="tambah.php">Tambah Data</a>
    <br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM supplier");
        while ($data = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$data['id_supplier']."</td>";
            echo "<td>".$data['nama_supplier']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "<td>".$data['no_telp']."</td>";
            echo "<td>
                    <a href='edit.php?id=".$data['id_supplier']."'>Edit</a> |
                    <a href='hapus.php?id=".$data['id_supplier']."' onclick='return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
                 </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
