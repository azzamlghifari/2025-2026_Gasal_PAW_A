<?php
include 'koneksi.php';

if ($_POST) {
    // untuk mengambil data master
    $id_nota = $_POST['id_nota'];
    $tanggal = $_POST['tanggal'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $total = $_POST['total'];

    // untuk menyimpan ke tabel nota
    $sql = "INSERT INTO nota (id_nota, tanggal, total, nama_pelanggan)
            VALUES ('$id_nota', '$tanggal', '$total', '$nama_pelanggan')";
    mysqli_query($conn, $sql);
    $nota_id = mysqli_insert_id($conn); // ambil id_nota auto increment

    // mengambil data detail
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    // perulangan untuk menyimpan item
    for ($i = 0; $i < count($kode_barang); $i++) {
        if (empty($kode_barang[$i])) continue; // skip baris kosong

        $kb = $kode_barang[$i];
        $nb = $nama_barang[$i];
        $jml = $jumlah[$i];
        $hrg = $harga[$i];

        $sql_item = "INSERT INTO item (id_nota, kode_barang, nama_barang, jumlah, harga)
                     VALUES ('$nota_id', '$kb', '$nb', '$jml', '$hrg')";
        if (!mysqli_query($conn, $sql_item)) {
            echo "Error: " . mysqli_error($conn);
        }
    }

    echo "<h3>Transaksi berhasil disimpan!</h3>";
    echo "<a href='form.html'>Kembali ke Form</a>";
}
?>
