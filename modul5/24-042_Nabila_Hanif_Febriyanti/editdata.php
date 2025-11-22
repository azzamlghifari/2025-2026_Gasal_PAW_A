<?php
include 'koneksi.php';

// Pastikan parameter id dikirim dari URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data supplier berdasarkan id
    $query = mysqli_query($conn, "SELECT * FROM supplier WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);

    if (!$data) {
        echo "Data tidak ditemukan!";
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial;
    color: #2a6496;
    margin: 40px; /* kasih jarak dari tepi kiri atas */
  }
  table {
    border-collapse: collapse;
    margin-left: 0; /* biar nempel ke kiri */
  }
  td {
    padding: 8px;
  }
  input {
    padding: 6px;
    width: 200px;
  }
  .btn {
    padding: 6px 12px;
    border: none;
    color: white;
    cursor: pointer;
    border-radius: 4px;
    text-decoration: none;
  }
  .update {
    background: #5cb85c;
  }
  .batal {
    background: #d9534f;
  }
  .right { text-align: right; }
</style>
</head>
<body>

<h3>Edit Data Master Supplier</h3>

<form action="update.php" method="post">

  <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

<table>
  <tr><td><b>Nama</b></td><td><input type="text" name="nama" placeholder="PT. maju bersama"></td></tr>
  <tr><td><b>Telp</b></td><td><input type="text" name="telp" placeholder="012345678"></td></tr>
  <tr><td><b>Alamat</b></td><td><input type="text" name="alamat" placeholder="Surabaya"></td></tr>
  <tr>
    <td></td>
    <td class="right">
      <button type="submit" class="btn update">Update</button>
      <a href="tampilan.php" class="btn batal" type="button">Batal</a>
    </td>
  </tr>
</table>
</form>

</body>
</html>