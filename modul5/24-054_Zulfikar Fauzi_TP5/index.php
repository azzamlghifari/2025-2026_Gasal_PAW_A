<?php include 'koneksi.php'; ?>

<?php
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM supplier WHERE id=$id");
    echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Supplier</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f2f2f2; }
        table { border-collapse: collapse; width: 80%; margin: 20px auto; background: white; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        a { text-decoration: none; padding: 5px 8px; border-radius: 4px; }
        .edit { background-color: #2196F3; color: white; }
        .hapus { background-color: #f44336; color: white; }
        .tambah {
            display: block; width: 150px; margin: 20px auto;
            text-align: center; background-color: #4CAF50;
            color: white; padding: 8px; border-radius: 4px;
        }
    </style>
</head>
<body>

    <h2 style="text-align:center;">Data Supplier</h2>

    <a href="tambah.php" class="tambah">+ Tambah Supplier</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Tindakan</th>
        </tr>

        <?php
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM supplier");
        while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['telp']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id']; ?>" class="edit">Edit</a>
                <a href="index.php?hapus=<?= $row['id']; ?>" class="hapus"
                   onclick="return confirm('Yakin mau hapus data ini?');">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
