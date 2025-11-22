<?php
session_start();

if (!isset($_SESSION['total']) && !isset($_SESSION['total'])) {
    $_SESSION['warung'] = '';
    $_SESSION['total'] = 0;

}

function harga($nama){
    switch ($nama) {
        case "nasi goreng":
            return 10000;
        case "ayam geprek":
            return 12000;
        case "soto ayam":
            return 10000;
        case "nasi bebek":
            return 15000;
        default:
            return 0;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['makanan'] != 'kosong'){
        $_SESSION['warung'] .= $_POST['makanan'] . " Rp" . harga($_POST['makanan']) . '<br>';
        $_SESSION['total'] += harga($_POST['makanan']);
    }

    if (isset($_POST['clear'])){
        $_SESSION['warung'] = '';
        $_SESSION['total'] = 0;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasir</title>
</head>

<body>
    <h2>TOKO KITA</h2>
    <form method="post">
        <label for="makanan">pilih barang anda </label>
        <select name="makanan" id="makanan">
            <option value="kosong">--Pilih Makanana--</option>
            <option value="nasi goreng">nasi goreng</option>
            <option value="ayam geprek">ayam geprek</option>
            <option value="soto ayam">soto ayam</option>
            <option value="nasi bebek">nasi bebek</option>
        </select><br>
        <label for="clear">bersihkan</label>
        <input type="checkbox" name="clear" id="clear"><br><br>
        <button type="submit">kirim</button>
        
    </form>
    <?php if ($_SESSION['warung'] != '' && $_SESSION['total'] != 0):?>
        <br><br>
        <table border="1px">
            <tr>
                <th><h4>WARUNG KITA</h4></th>
            </tr>
            <tr>
                <th>Rincian Harga</th>
            </tr>
            <tr>
                <td><?= $_SESSION['warung'];?></td>
            </tr>
            <tr>
                <th>Total</th>
            </tr>
            <tr>
                <td><?= "Total =  Rp" . $_SESSION['total'];?></td>
            </tr>
        </table>
    <?php endif ?>
</body>
</html>