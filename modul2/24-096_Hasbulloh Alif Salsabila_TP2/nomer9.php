<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nilai Mahasiswa</title>
</head>
<body>
    
    <h2>Form Input Nilai</h2>
    <form method="GET" action="">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama"> <br> <br>

        <label for="matkul">Mata Kuliah: </label>
        <input type="text" id="matkul" name="matkul"> <br> <br>

        <label for="nilai">Nilai: </label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" placeholder="0-100"> <br> <br>

        <input type="submit" value="Kirim">
    </form>

    <?php
     if (isset($_GET['nama']) && isset($_GET['nilai'])) {

        $matkul = trim($_GET['matkul']);
        $nama = trim($_GET['nama']);
        $nilai = (int)$_GET['nilai'];
        $grade = ""; 

        if ($nilai >= 90) {
            $grade = "A Sangat Baik";
        } elseif ($nilai >= 81) {
            $grade = "B Baik";
        } elseif ($nilai >= 75) {
            $grade = "C Cukup Baik";
        } else {
            $grade = "D Kurang Baik"; 
        }
    ?>
    
        <table class="result-form">
        <caption>
            <b>Hasil Nilai Mahasiswa</b>
        </caption>
        <tr>
            <td>1.</td>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo($nama); ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><?php echo($matkul); ?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Nilai</td>
            <td>:</td>
            <td><?php echo($nilai); ?></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Grade</td>
            <td>:</td>
            <td><?php echo($grade); ?></td>
        </tr>
    </table>

    <?php
    } 
    ?>
</body>
</html>