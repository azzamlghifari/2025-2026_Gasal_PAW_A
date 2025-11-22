<?php
$menu = [
    "Ayam geprek" => 12000,
    "Tahu tek"    => 11000,
    "Soto Ayam"   => 10000,
    "Es Teh"      => 3000,
    "Es Jeruk"    => 4000
];

// Variabel untuk menampung total belanja
session_start();
if (!isset($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = [];
}

//input
if (isset($_POST['item']) && isset($_POST['jumlah'])) {
    $item   = $_POST['item'];
    $jumlah = (int) $_POST['jumlah'];
    $harga  = $menu[$item] * $jumlah;

    $_SESSION['keranjang'][] = [
        "nama" => $item,
        "jumlah" => $jumlah,
        "subtotal" => $harga
    ];
}

//menghitung total
$total = 0;
foreach ($_SESSION['keranjang'] as $barang) {
    $total += $barang['subtotal'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana</title>
</head>
<body>
    <h2>Kasir Sederhana</h2>
    <form method="post">
        Pilih Menu:
        <select name="item">
            <?php foreach ($menu as $nama => $harga): ?>
                <option value="<?php echo $nama; ?>">
                    <?php echo $nama . " - Rp" . number_format($harga,0,",","."); ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>
        Jumlah: <input type="number" name="jumlah" required><br><br>
        <input type="submit" value="Tambah ke Keranjang">
    </form>

    <h3>Keranjang Belanja</h3>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Menu</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($_SESSION['keranjang'] as $barang): ?>
        <tr>
            <td><?php echo $barang['nama']; ?></td>
            <td><?php echo $barang['jumlah']; ?></td>
            <td>Rp<?php echo number_format($barang['subtotal'],0,",","."); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h3>Total: Rp<?php echo number_format($total,0,",","."); ?></h3>

    <form method="post" action="">
        <button type="submit" name="reset">Selesai & Reset</button>
    </form>

    <?php
    //reset
    if (isset($_POST['reset'])) {
        session_destroy();
        echo "<script>location.href='".$_SERVER['PHP_SELF']."';</script>";
    }
    ?>
</body>
</html>
