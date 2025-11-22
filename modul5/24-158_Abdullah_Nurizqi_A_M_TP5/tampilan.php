<?php
require 'config.php'; // ✅ sekarang memakai config.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Master Supplier</title>
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: #eef2f7;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 85%;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            padding: 25px 30px;
        }

        h2 {
            color: #34495e;
            margin-top: 0;
            border-left: 5px solid #3498db;
            padding-left: 10px;
            font-weight: 600;
        }

        .btn-tambah {
            display: inline-block;
            background: #27ae60;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 6px;
            float: right;
            margin-top: -40px;
            transition: all 0.3s ease;
        }

        .btn-tambah:hover {
            background: #2ecc71;
            transform: translateY(-2px);
            box-shadow: 0 2px 5px rgba(46, 204, 113, 0.4);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            overflow: hidden;
            border-radius: 8px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        thead {
            background: #3498db;
            color: white;
        }

        th:first-child {
            text-align: center;
            width: 5%;
        }

        td:first-child {
            text-align: center;
        }

        tbody tr {
            background: #f9fbfd;
            border-bottom: 1px solid #e0e6ed;
            transition: background 0.3s ease;
        }

        tbody tr:hover {
            background: #e8f3fe;
        }

        .btn-edit, .btn-hapus {
            color: #fff;
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 13px;
            text-decoration: none;
            margin-right: 5px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-edit {
            background: #f39c12;
        }

        .btn-edit:hover {
            background: #e67e22;
            transform: scale(1.05);
        }

        .btn-hapus {
            background: #e74c3c;
        }

        .btn-hapus:hover {
            background: #c0392b;
            transform: scale(1.05);
        }

        td[colspan='5'] {
            text-align: center;
            font-style: italic;
            color: #777;
            background: #fafafa;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Master Supplier</h2>
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
            // ✅ gunakan variabel $config untuk koneksi
            $sql = "SELECT id_supplier, nama, telp, alamat FROM supplier ORDER BY id_supplier ASC";
            $result = mysqli_query($config, $sql);

            if (mysqli_num_rows($result) > 0) {
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['telp']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['alamat']) . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $row['id_supplier'] . "' class='btn-edit'>Edit</a>";
                    $nama_supplier = htmlspecialchars($row['nama']);
                    echo "<a href='hapus.php?id=" . $row['id_supplier'] . "' class='btn-hapus' onclick=\"return confirm('Apakah Anda yakin ingin menghapus supplier: $nama_supplier?')\">Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data supplier. Silakan klik 'Tambah Data'.</td></tr>";
            }
            
            mysqli_close($config);
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
