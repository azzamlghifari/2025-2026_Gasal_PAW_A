<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kasir Sederhana</title>
</head>
<body>

  <h2>Kasir warung makan</h2>

  <form method="post">
    <label>Pilihan Menu:</label><br>
    1. soto ayam - Rp10000<br>
    2. sate ayam - Rp12000<br>
    3. nasi goreng - Rp15000<br>
    4. mie goreng - Rp8000<br><br>

    <h4>pilih menu & tambah jumlah porsi untuk pesanan</h4>

    Nomor menu: <input type="number" name="menu"><br><br>
    Jumlah porsi: <input type="number" name="jumlah"><br><br>
    <input type="submit" name="hitung" value="Tambah menu & porsi">
    
  </form>

  <?php
  // variabel total di simpan sementara di dalam session
  session_start();
  if (!isset($_SESSION['total'])) {
      $_SESSION['total'] = 0;
  }

  if (isset($_POST['hitung'])) {
      $pilihan = $_POST['menu'];
      $jumlah = $_POST['jumlah'];
      $nama = "";
      $harga = 0;

      // Percabangan tanpa array (untuk menentukan harga menu)
      if ($pilihan == 1) {
          $nama = "soto ayam";
          $harga = 10000;
      } elseif ($pilihan == 2) {
          $nama = "sate ayam";
          $harga = 12000;
      } elseif ($pilihan == 3) {
          $nama = "nasi goreng";
          $harga = 15000;
      } elseif ($pilihan == 4) {
          $nama = "mie goreng";
          $harga = 8000;
      } else { 
          echo "Pilihan menu tidak valid!<br>";
      }

      if ($harga > 0) {
          $subtotal = $harga * $jumlah;
          $_SESSION['total'] += $subtotal;
          echo "Pesanan: $nama ($jumlah porsi) = Rp $subtotal<br>";
      }
  }
  ?>

<br>

</body>
</html>