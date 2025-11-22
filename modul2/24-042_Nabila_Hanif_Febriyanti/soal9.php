<form method="post">
    Masukkan Nilai : <br>
<input type="number" name="nilai" required><br>
<input type="submit" value="cek">
</form>

<?php
if (isset($_POST['nilai'])) {
    $nilai = $_POST['nilai'];

    if ($nilai >= 90) {
        $grade = "A";
    } elseif ($nilai >= 75) {
        $grade = "B";
    } elseif ($nilai >= 55) {
        $grade = "C";
    } elseif ($nilai >= 40) {
        $grade = "D";
    } else {
        $grade = "E";
    }
    echo "<br>Nilai : $nilai <br>";
    echo "grade: $grade";
}
?>