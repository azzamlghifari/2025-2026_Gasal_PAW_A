<?php include 'koneksi.php'; ?>

<h2>Data Master Supplier</h2>
<a href="tambah.php">Tambah Data</a><br><br>

<table border="1" cellpadding="5">
<tr>
    <th>No</th><th>Nama Supplier</th><th>Alamat</th><th>Telepon</th><th>Email</th><th>Aksi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM supplier");
while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['nama_supplier']; ?></td>
    <td><?php echo $d['alamat']; ?></td>
    <td><?php echo $d['telepon']; ?></td>
    <td><?php echo $d['email']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin hapus data supplier ini?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
