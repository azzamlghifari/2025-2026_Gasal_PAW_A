<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">

</head>
<body>
  <h1>Grade Nilai</h1>

  <div class="card">
    <form method="post" action="">
      <label for="nama">Nama:</label>
      <input id="nama" name="nama" type="text" placeholder="masukin nama lu" required>

      <label for="nilai">Nilai (0 - 100):</label>
      <input id="nilai" name="nilai" type="number" min="0" max="100" step="0.01" required>

      <div style="margin-top:10px">
        <button type="submit">Hitung Grade</button>
        <button type="reset" style="margin-left:8px">Reset</button>
      </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nama = trim($_POST['nama'] ?? '');
      $nilai_raw = $_POST['nilai'] ?? '';

      if ($nama === '') {
        echo "<div class='result'>Tolong isi nama.</div>";
      } elseif ($nilai_raw === '' && $nilai_raw !== '0') {
        echo "<div class='result'>Tolong masukkan nilai.</div>";
      } else {

        $nilai = filter_var($nilai_raw, FILTER_VALIDATE_FLOAT);
        if ($nilai === false || $nilai < 0 || $nilai > 100) {
          echo "<div class='result'>Nilai tidak valid — masukkan angka antara 0 sampai 100.</div>";
        } else {

          if ($nilai >= 85) {
            $grade = 'A';
            $ket = 'mantapp sekali';
          } elseif ($nilai >= 70) {
            $grade = 'B';
            $ket = 'mantul';
          } elseif ($nilai >= 55) {
            $grade = 'C';
            $ket = 'lumayan';
          } elseif ($nilai >= 40) {
            $grade = 'D';
            $ket = 'nyaris';
          } else {
            $grade = 'E';
            $ket = 'nyaris bangett';
          }


          echo "<div class='result'>";
          echo "<strong>Nama:</strong> " . htmlspecialchars($nama) . "<br>";
          echo "<strong>Nilai:</strong> " . number_format($nilai, 2) . "<br>";
          echo "<strong>Grade:</strong> <em>$grade</em> <br>";
          echo "<strong>Keterangan:</strong> $ket";
          echo "</div>";
        }
      }
    }
    ?>
  </div>

</body>
</html>
