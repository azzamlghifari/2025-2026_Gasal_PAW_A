<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post">
    <label for="nama">Nama Mahasiswa</label>
    <input type="text" name="nama" id="nama" required>
    <br>
    <label for="nilai">Nilai Mahasiswa</label>
    <input type="text" name="nilai" id="nilai" required>
    <br>
    <button type="submit">Kirim</button>
  </form>

  <?php 
  if (isset($_POST['nilai'])){
    $nilai = $_POST['nilai'];
    $mhs = $_POST['nama'];
    if ($nilai >= 90){
      echo "Nilai $mhs adalah A";
    }elseif ($nilai >= 80 && $nilai <= 89){
      echo "Nilai $mhs adalah B";
    }elseif ($nilai >= 70 && $nilai <= 79){
      echo "Nilai $mhs adalah C";
    }elseif ($nilai >= 60 && $nilai <= 69){
      echo "Nilai $mhs adalah D";
    }elseif ($nilai <= 59){
      echo "Nilai $mhs adalah E";
    }
  }
  ?>
</body>

</html>