<?php
session_start();

$menu = [
    1 => ["nama" => "Nasi Goreng", "harga" => 15000],
    2 => ["nama" => "Mie Ayam", "harga" => 12000],
    3 => ["nama" => "Es Teh", "harga" => 5000],
    4 => ["nama" => "Es Jeruk", "harga" => 7000],
];

if (!isset($_SESSION['total_harga'])) {
    $_SESSION['total_harga'] = 0;
}

// Jika form dikirim
if (isset($_POST['beli'])) {
    $pilihan = $_POST['menu'];
    $jumlah = (int)$_POST['jumlah'];

    if (isset($menu[$pilihan])) {
        $harga_item = $menu[$pilihan]['harga'] * $jumlah;
        $_SESSION['total_harga'] += $harga_item;
        $pesan = "{$jumlah} x {$menu[$pilihan]['nama']} = Rp{$harga_item}";
    } else {
        $pesan = "Menu tidak tersedia.";
    }
}

// Reset total jika user ingin memulai lagi
if (isset($_POST['reset'])) {
    $_SESSION['total_harga'] = 0;
    $pesan = "Transaksi direset.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kasir Sederhana</title>
</head>
<body>
    <h2>Sistem Kasir Sederhana</h2>

    <?php if (isset($pesan)) echo "<p>$pesan</p>"; ?>

    <form method="post">
        <label>Menu:</label>
        <select name="menu">
            <?php foreach ($menu as $key => $item): ?>
                <option value="<?= $key ?>"><?= $item['nama'] ?> - Rp<?= $item['harga'] ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" min="1" value="1"><br><br>

        <button type="submit" name="beli">Beli</button>
        <button type="submit" name="reset">Reset</button>
    </form>

    <h3>Total Harga: Rp<?= $_SESSION['total_harga'] ?></h3>
</body>
</html>
