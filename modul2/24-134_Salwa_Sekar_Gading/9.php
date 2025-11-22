<?php
$nilai = isset($_POST['nilai']) ? $_POST['nilai'] : "";

// Proses penentuan grade
if ($nilai == "") {
    $grade = "";
} elseif ($nilai >= 85) {
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
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Nilai Mahasiswa</title>
</head>
<body>
    <h2>cek grade nilai</h2>
    <form method="post">
        Masukkan Nilai: <input type="number" name="nilai" required>
        <input type="submit" value="Cek">
    </form>

    <?php if ($nilai !== ""): ?>
        <p>Nilai Anda: <b><?php echo $nilai; ?></b></p>
        <p>Grade: <b><?php echo $grade; ?></b></p>
    <?php endif; ?>
</body>
</html>

