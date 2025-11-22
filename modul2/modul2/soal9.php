<!DOCTYPE html>
<html>
<body>
  <h2>Cek Grade Mahasiswa</h2>

  <form method="post">
    <label>Masukkan Nilai:</label><br>
    <input type="number" name="nilai" min="0" max="100" required>
    <button type="submit">Cek</button>
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $nilai = $_POST['nilai'];

      if ($nilai >= 85) {
          $grade = "A";
      } elseif ($nilai >= 70) {
          $grade = "B";
      } elseif ($nilai >= 55) {
          $grade = "C";
      } elseif ($nilai >= 40) {
          $grade = "D";
      } else {
          $grade = "E";
      }

      echo "<p>Nilai: $nilai</p>";
      echo "<p>Grade: <strong>$grade</strong></p>";
  }
  ?>
</body>
</html>
