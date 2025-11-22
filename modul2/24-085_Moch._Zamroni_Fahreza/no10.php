<?php 
session_start();

if (!isset($_SESSION['banyakPilihan'])){
  $_SESSION['banyakPilihan'] = 1;
}
if (isset($_POST['tambah'])){
  $_SESSION['banyakPilihan']++;
}
if (isset($_POST['reset'])){
  $_SESSION['banyakPilihan'] = 1;
}

$total = 0;

if (isset($_POST['kirim'])){

  for ($i=0; $i<$_SESSION['banyakPilihan']; $i++) {
    $name = "menu" . $i;
    if (isset($_POST[$name])) {
      $menu = $_POST[$name];

      switch ($menu) {
        case "susu":
          $total += 10000;
          break;
        case "roti":
          $total += 20000;
          break;
        case "air":
          $total += 2000;
          break;
        case "snack":
          $total += 1000;
          break;
        case "kopi":
          $total += 5000;
          break;
        case "teh":
          $total += 5000;
          break;
        case "mie":
          $total += 5000;
          break;
        case "jus":
          $total += 4000;
          break;
        case "nasi":
          $total += 7000;
          break;
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Pesan Menu</title>
</head>

<body>
  <form method="post">
    <?php for ($i=0; $i<$_SESSION['banyakPilihan']; $i++) { ?>
    <select name="menu<?php echo $i; ?>">
      <option value="susu">Susu - 10.000</option>
      <option value="roti">Roti - 20.000</option>
      <option value="air">Air Mineral - 2.000</option>
      <option value="snack">Makanan Ringan - 1.000</option>
      <option value="kopi">Kopi - 5.000</option>
      <option value="teh">Teh - 5.000</option>
      <option value="mie">Mie Instan - 5.000</option>
      <option value="jus">Jus Buah - 4.000</option>
      <option value="nasi">Nasi Bungkus - 7.000</option>
    </select>
    <br>
    <?php } ?>

    <br>
    <button type="submit" name="tambah">Tambah</button>
    <button type="submit" name="reset">Reset</button>
    <button type="submit" name="kirim">Kirim</button>
  </form>

  <br>
  <p><?= "Total harga semua pesanan: Rp " . number_format($total,0,',','.');; ?></p>
</body>

</html>