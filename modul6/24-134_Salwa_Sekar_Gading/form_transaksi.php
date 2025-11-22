<?php
include "koneksi.php";

// ====================
// PROSES HAPUS DATA
// ====================
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    // hapus dari tabel detail dulu
    mysqli_query($conn, "DELETE FROM item_penjualan WHERE id_nota='$id'");
    // lalu hapus dari tabel master
    mysqli_query($conn, "DELETE FROM nota_penjualan WHERE id_nota='$id'");

    echo "<p style='color:red;'><b>Data transaksi dengan ID $id berhasil dihapus!</b></p>";
}

// ====================
// PROSES SIMPAN DATA
// ====================
if (isset($_POST['simpan'])) {
    $id_nota     = $_POST['id_nota'];
    $tanggal     = $_POST['tanggal'];
    $pelanggan   = $_POST['pelanggan'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah      = $_POST['jumlah'];
    $harga       = $_POST['harga'];

    // cek apakah nota sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM nota_penjualan WHERE id_nota='$id_nota'");
    if (mysqli_num_rows($cek) == 0) {
        // jika belum ada, simpan ke tabel nota_penjualan (master)
        mysqli_query($conn, "INSERT INTO nota_penjualan (id_nota, tanggal, pelanggan)
                             VALUES ('$id_nota', '$tanggal', '$pelanggan')");
    }

    // simpan ke tabel item_penjualan (detail)
    mysqli_query($conn, "INSERT INTO item_penjualan (id_nota, nama_barang, jumlah, harga)
                         VALUES ('$id_nota', '$nama_barang', '$jumlah', '$harga')");

    echo "<p style='color:green;'><b>Data transaksi berhasil disimpan!</b></p>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Transaksi Penjualan</title>
</head>
<body>
    <h2>Input Transaksi Penjualan</h2>

    <form method="POST">
        <label>ID Nota</label><br>
        <input type="text" name="id_nota" required><br><br>

        <label>Tanggal</label><br>
        <input type="date" name="tanggal" required><br><br>

        <label>Nama Pelanggan</label><br>
        <input type="text" name="pelanggan" required><br><br>

        <h3>Data Barang</h3>
        <label>Nama Barang</label><br>
        <input type="text" name="nama_barang" required><br><br>

        <label>Jumlah</label><br>
        <input type="number" name="jumlah" required><br><br>

        <label>Harga</label><br>
        <input type="number" name="harga" required><br><br>

        <input type="submit" name="simpan" value="Simpan Transaksi">
    </form>

    <hr>

    <h2>Daftar Transaksi</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID Nota</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php
        // ambil data nota
        $nota = mysqli_query($conn, "SELECT * FROM nota_penjualan");
        while ($n = mysqli_fetch_assoc($nota)) {
            $id = $n['id_nota'];
            $tanggal = $n['tanggal'];
            $pelanggan = $n['pelanggan'];

            // ambil item sesuai nota
            $item = mysqli_query($conn, "SELECT * FROM item_penjualan WHERE id_nota='$id'");
            while ($i = mysqli_fetch_assoc($item)) {
                echo "<tr>
                        <td>$id</td>
                        <td>$tanggal</td>
                        <td>$pelanggan</td>
                        <td>{$i['nama_barang']}</td>
                        <td>{$i['jumlah']}</td>
                        <td>{$i['harga']}</td>
                        <td><a href='form_transaksi.php?hapus=$id' onclick='return confirm(\"Yakin ingin hapus transaksi ini?\")'>Hapus</a></td>
                      </tr>";
            }
        }
        ?>
    </table>
</body>
</html>
