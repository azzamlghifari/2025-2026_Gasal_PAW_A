<?php
include 'koneksi.php';

if (isset($_POST['simpan_transaksi'])) {
    $tanggal = $_POST['tanggal'];
    $total_nota = $_POST['total_nota_input'];
    $details = $_POST['detail'];

    // 1. Simpan Data MASTER (Nota)
    $query_master = "INSERT INTO nota (tanggal, total) VALUES ('$tanggal', '$total_nota')";
    
    if (mysqli_query($conn, $query_master)) {
        // Ambil ID Nota yang baru saja disimpan (ID Master)
        $nota_id = mysqli_insert_id($conn);
        $success_detail = true;

        // 2. Simpan Data DETAIL (Barang)
        foreach ($details as $detail) {
            $nama_barang = $detail['nama_barang'];
            $jumlah = $detail['jumlah'];
            $harga = $detail['harga'];
            $subtotal = $detail['subtotal']; // Sudah dihitung di frontend

            $query_detail = "INSERT INTO detail_nota (nota_id, nama_barang, jumlah, harga, subtotal) 
                             VALUES ('$nota_id', '$nama_barang', '$jumlah', '$harga', '$subtotal')";
            
            if (!mysqli_query($conn, $query_detail)) {
                $success_detail = false;
                // Jika ada error, hentikan dan tampilkan pesan
                echo "<script>alert('Gagal menyimpan detail barang: " . mysqli_error($conn) . "'); window.location='transaksi.php';</script>";
                // Opsional: Lakukan rollback, HAPUS data nota yang sudah tersimpan
                mysqli_query($conn, "DELETE FROM nota WHERE id='$nota_id'");
                exit; 
            }
        }

        // 3. Tampilkan pesan sukses jika Master dan semua Detail berhasil
        if ($success_detail) {
            echo "<script>alert('Transaksi (Nota dan Detail) berhasil disimpan otomatis!'); window.location='index.php';</script>";
        }

    } else {
        // Gagal menyimpan Master
        echo "<script>alert('Gagal menyimpan data Nota (Master): " . mysqli_error($conn) . "'); window.location='transaksi.php';</script>";
    }
} else {
    header('Location: transaksi.php');
}
?>