<?php
session_start();

$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$aksi = $_POST['aksi'];

if($aksi == "Tambah"){
    if($menu == "nasi"){
        $nama = "Nasi Goreng";
        $harga = 10000;
    }elseif($menu == "mie"){
        $nama = "Soto Ayam";
        $harga = 12000;
    }else{
        $nama = "Ayam Goreng";
        $harga = 15000;
    }

    $subtotal = $harga * $jumlah;
    $_SESSION['pesanan'][] = "$nama x$jumlah = Rp $subtotal";
    $_SESSION['total'] += $subtotal;
}

if($aksi == "Reset"){
    $_SESSION['pesanan'] = [];
    $_SESSION['total'] = 0;
}

if($aksi == "Selesai"){
    echo "<h3>Total Bayar: Rp ".$_SESSION['total']."</h3>";
    echo "<p>Terima kasih sudah berbelanja!</p>";
    session_destroy();
    echo "<a href='form2.php'>Kembali</a>";
    exit;
}

header("Location: form2.php");
exit;
