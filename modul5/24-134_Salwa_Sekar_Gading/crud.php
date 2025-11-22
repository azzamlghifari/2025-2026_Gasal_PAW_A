<?php
require 'conn.php'; 

//Menambahkan data awal
$cek = mysqli_query($conn, "SELECT COUNT(*) AS total FROM supplier");
$data = mysqli_fetch_assoc($cek);
if ($data['total'] == 0) {
    $query = "INSERT INTO supplier (nama, telp, alamat) VALUES
    ('PT. Maju Bersama', '08123456', 'Surabaya'),
    ('PT. Senang Sekali', '081515563', 'Bangkalan'),
    ('PT. Segar Segar', '084545463', 'Surabaya')";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Master Supplier</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h2 {
            color: #5ca2eeff;
        }
        a.tambah {
            text-decoration: none;
            color: white;
            background-color: #28a745;
            padding: 6px 12px;
            border-radius: 4px;
            float: right;
        }
        a.tambah:hover {
            background-color: #218838;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #464343ff;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #5ca2eeff;
            color: white;
        }
        td.action {
            display: flex;
            justify-content: center; 
            gap: 8px; 
        }
        td.action a.edit {
            background-color: orange;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            text-decoration: none;
        }
        td.action a.edit:hover {
            background-color: darkorange;
        }
        td.action a.hapus {
            background-color: red;
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            text-decoration: none;
        }
        td.action a.hapus:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>

<h2>Data Master Supplier</h2>
<a href='tambah.php' class="tambah">+ Tambah Data</a>
<br><br>

<?php
$query = "SELECT * FROM supplier";
$result = mysqli_query($conn, $query);

echo "<table>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Telp</th>
        <th>Alamat</th>
        <th>Tindakan</th>
      </tr>";

$no = 1;
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$row['nama']."</td>";
        echo "<td>".$row['telp']."</td>";
        echo "<td>".$row['alamat']."</td>";
        echo "<td class='action'>
                <a href='edit.php?id=".$row['id']."' class='edit'>Edit</a>
                <a href='delete.php?id=".$row['id']."' class='hapus' onclick='return confirm(\"Anda yakin akan menghapus supplier ini?\")'>Hapus</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td>Belum ada data supplier</td></tr>";
}
echo "</table>";

mysqli_close($conn);
?>

</body>
</html>
