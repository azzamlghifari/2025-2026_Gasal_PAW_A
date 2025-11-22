<?php
require 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Master Supplier</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f0f3f6; }
        .container { width: 80%; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; margin-top: 0; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #cceeff; padding: 12px; text-align: left; }
        th { background-color: #3498db; color: white; font-weight: 600; }
        th:nth-child(1) { width: 5%; text-align: center; background-color: #2980b9; }
        th:nth-child(5) { width: 15%; text-align: center; }
        td:nth-child(1), td:nth-child(5) { text-align: center; }
        .btn-tambah { background-color: #27ae60; color: white; padding: 10px 15px; text-decoration: none; border-radius: 4px; float: left; margin-bottom: 15px; font-weight: bold; transition: background-color 0.3s; }
        .btn-tambah:hover { background-color: #2ecc71; }
        .btn-edit, .btn-hapus { color: white; padding: 6px 10px; text-decoration: none; border-radius: 4px; border: none; font-size: 13px; transition: opacity 0.3s; }
        .btn-edit { background-color: #f39c12; margin-right: 5px; }
        .btn-hapus { background-color: #e74c3c; }
        .btn-edit:hover, .btn-hapus:hover { opacity: 0.8; }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Master</h2>
    <a href="tambah_data.php" class="btn-tambah">Tambah Data</a>
    
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id_supplier, nama, telp, alamat FROM supplier ORDER BY id_supplier ASC";
            $result = mysqli_query($koneksi, $sql);

            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['telp']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                    echo "<td>";
                    
                    echo "<a href='edit.php?id=" . $row['id_supplier'] . "' class='btn-edit'>Edit</a>";
                    
                    $nama_supplier = htmlspecialchars($row['nama']);
                    echo "<a href='hapus.php?id=" . $row['id_supplier'] . "' class='btn-hapus' onclick=\"return confirm('Anda yakin menhapus data ini')\">Hapus</a>";
                    
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data supplier. Silakan klik 'Tambah Data'.</td></tr>";
            }
            
            mysqli_close($koneksi);
            ?>
        </tbody>
    </table>
</div>

</body>
</html>