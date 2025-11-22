<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pesanan Makanan</title>
</head>
<body>
        <table border="1">
            <tr>
                <th colspan="3">Menu Makanan Murah</th>
            </tr>
            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Nasi Goreng</td>
                <td>Rp15.000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mie Ayam</td>
                <td>Rp12.000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Nasi Telur Dadar</td>
                <td>Rp8.000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Gado-Gado</td>
                <td>Rp13.000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Nasi Uduk</td>
                <td>Rp10.000</td>
            </tr>
        </table>
        <form action="" method="post">
            <label for="menu">Menu Makanan</label>
            <select name="menu" id="menu">
                <option value="">Pilihan Makanan</option>
                <option value="nasi_goreng">Nasi Goreng</option>
                <option value="mie_ayam">Mie Ayam</option>
                <option value="nasi_telur">Nasi Telur Dadar</option>
                <option value="gado_gado">Gado-Gado</option>
                <option value="nasi_uduk">Nasi Uduk</option>
            </select> 
            <br>
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" min="1" required>
            <br>
            <button type="submit" name="tambah">Tambah Pesanan</button>
        </form>
        <form action="" method="post">
            <button type="submit" name="hitung">Hitung Total</button>
        </form>

    <?php
    if (!isset($_SESSION['total'])){
        $_SESSION['total'] = 0;
    }
    if (isset($_POST['tambah'])){
        $menu = $_POST['menu'];
        $jumlah = $_POST['jumlah'];

        $harga = 0;
        if ($menu == "nasi_goreng"){
            $harga = 15000;
        }elseif ($menu == "mie_ayam"){
            $harga = 12000;
        }elseif ($menu == "nasi_telur"){
            $harga = 8000;
        }elseif ($menu == "gado_gado"){
            $harga = 13000;
        }elseif ($menu == "nasi_uduk"){
            $harga = 10000;
        }

        if($menu != "" && $jumlah > 0){
            $subtotal = $harga * $jumlah;
            $_SESSION['total'] += $subtotal;
            
            echo "Berhasil ditambahkan $menu($jumlah)<br>";
            echo "Total Sementara: Rp " . ($_SESSION['total']);
    } else if ($menu == "") {
                echo "Silakan pilih menu makanan terlebih dahulu.";
            }
    }
    if (isset($_POST['hitung'])){
        echo "<strong>Total Pembelian Akhir: Rp ". ($_SESSION['total']) . "</strong>";
        $_SESSION['total']=0;
   }
    ?>
</body>
</html>