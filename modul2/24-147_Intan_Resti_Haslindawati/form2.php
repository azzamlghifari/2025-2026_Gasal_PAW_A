<?php
session_start();

if(!isset($_SESSION['total'])){
    $_SESSION['total'] = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kasir Sederhana</title>
</head>
<body>
<h2>Program Kasir Sederhana</h2>

<form action="tugas2.php" method="post">
    Pilih Menu:<br>
    <select name="menu">
        <option value="nasi">Nasi Goreng (10000)</option>
        <option value="soto">Soto Ayam (10000)</option>
        <option value="ayam">Ayam Goreng (15000)</option>
    </select><br><br>

    Jumlah: <input type="number" name="jumlah" value="1"><br><br>
    <input type="submit" name="aksi" value="Tambah">
    <input type="submit" name="aksi" value="Selesai">
    <input type="submit" name="aksi" value="Reset">
</form>

<hr>
<?php
if(isset($_SESSION['pesanan'])){
    echo "<h4>Pesanan:</h4>";
    foreach($_SESSION['pesanan'] as $p){
        echo $p."<br>";
    }
    echo "<b>Total: Rp ".$_SESSION['total']."</b><br>";
}
?>
</body>
</html>
