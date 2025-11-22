<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM supplier");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tampilan Data Master Supplier</title>

<style>
  body { font-family: Arial, sans-serif; margin: 40px; }
  h1 { color: #2980b9; }
  table { width: 100%; border-collapse: collapse; margin-top: 10px; }
  th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
  th { background: #d6edf9; }
  tr { background: #f9f9f9; }
  .btn { border: none; padding: 6px 12px; border-radius: 4px; color: white; cursor: pointer; text-decoration: none; display: inline-block; }
  .btn-edit { background: #f39c12; }
  .btn-hapus { background: #c12a19ff; }
  .btn-tambah { background: #27ae60; float: right; margin-bottom: 10px; }
</style>

</head>
<body>

<h1>Data Master Supplier</h1>
<a href="tambahdata.html" class="btn btn-tambah">Tambah Data</a>

<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Telp</th>
    <th>Alamat</th>
    <th>Tindakan</th>
  </tr>

    <?php
        if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $rows['id'] . '</td>';
            echo '<td>' . $rows['nama'] . '</td>';
            echo '<td>' . $rows['telp'] . '</td>';
            echo '<td>' . $rows['alamat'] . '</td>';
            echo '<td>';
            echo '<a href="editdata.php?id=' . $rows['id'] . '" class="btn btn-edit">Edit</a> ';
            echo '<a href="datahapus.php?id=' . $rows['id'] . '" class="btn btn-hapus" onclick="return confirm(\'Anda yakin akan menghapus supplier ini?\')">Hapus</a>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo "<tr><td colspan='5' style='text-align:center;'>Data belum ada</td></tr>";
    }
    ?>

</table>

</body>
</html>