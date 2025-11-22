<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 10</title>

</head>
<body>
  
        <table border="1" cellpadding="8">
            <tr>
                <th colspan="3">alat tulis</th>
            </tr>
            <tr>
                <th>No</th>
                <th>menu</th>
                <th>Harga</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Buku</td>
                <td>Rp.5000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>bolpen</td>
                <td>Rp3000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>penghapus</td>
                <td>Rp2000</td>
            </tr>
            <tr>
                <td>4</td>
                <td>penggaris</td>
                <td>Rp7000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>pensil</td>
                <td>Rp4000</td>
            </tr>
            
        </table>
        <br>
        <form action="" method="post">
            <label for="menu">Menu</label>
            <select name="menu" id="menu" >
                <option value="buku">Buku</option>
                <option value="pensil">Pensil</option>
                <option value="bolpen">bolpen</option>
                <option value="penghapus">penghapus</option>
                <option value="penggaris">penggaris</option>
                
            </select>
            
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" id="jumlah" min="1" required>
            <button type="submit" name="tambah">Tambah Barang</button>
        </form>
        <br>    
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
        if ($menu == "buku"){
            $harga = 5000;
        }elseif ($menu == "pensil"){
            $harga = 4000;
        }elseif ($menu == "bolpen"){
            $harga = 3000;
        }elseif ($menu == "penghapus"){
            $harga = 2000;
        }elseif ($menu == "penggaris"){
            $harga = 7000;
        }
    if($menu != "" && $jumlah > 0){
            $subtotal = $harga * $jumlah;
            $_SESSION['total'] += $subtotal;
            echo "Berhasil ditambahkan $menu $jumlah<br>";
            echo "Total Sementara: Rp " . $_SESSION['total'];
        }
    }
    if (isset($_POST['hitung'])){
        echo "<strong>Total Pembelian: Rp ". $_SESSION['total']. "</strong>";
        $_SESSION['total']=0;
    }

    ?>
    </div>
</body>
</html>