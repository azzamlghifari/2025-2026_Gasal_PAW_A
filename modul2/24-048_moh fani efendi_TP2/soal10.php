<?php
session_start();

if (!isset($_SESSION['total'])) {
    $_SESSION['total'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pilihan = $_POST['menu'];  
    $jumlah  = $_POST['jumlah'];

    if ($pilihan == 1) { 
        $harga = 15000; 
        $nama = "Nasi Goreng"; 
    } elseif ($pilihan == 2) { 
        $harga = 20000; 
        $nama = "Ayam Bakar"; 
    } elseif ($pilihan == 3) { 
        $harga = 5000;  
        $nama = "Es Teh"; 
    } else { 
        $harga = 0; 
        $nama = "Menu tidak valid"; 
    }

    $subtotal = $harga * $jumlah;
    $_SESSION['total'] += $subtotal;

    echo "Anda membeli $jumlah $nama<br>";
    echo "Subtotal: Rp$subtotal<br>";
    echo "Total Belanja: Rp".$_SESSION['total']."<br><br>";
}
?>

<form method="post">
    <h3>Menu Kasir</h3>
    <select name="menu">
        <option value="1">Nasi Goreng - Rp15.000</option>
        <option value="2">Ayam Bakar - Rp20.000</option>
        <option value="3">Es Teh - Rp5.000</option>
    </select><br><br>
    
    Jumlah: <input type="number" name="jumlah" required><br><br>
    <input type="submit" value="Beli">
</form>
