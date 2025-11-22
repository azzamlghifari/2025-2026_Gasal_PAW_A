<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai Mata Kuliah</title>
   
</head>
<body>
        
        <form action="" method="GET">
            <table>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" id="nama" name="nama"></td>
                </tr>
                <tr>
                    <td><label for="kelas">Kelas</label></td>
                    <td>:</td>
                    <td><input type="text" id="kelas" name="kelas" ></td>
                </tr>
                <tr>
                    <td><label for="matkul">Mata Kuliah</label></td>
                    <td>:</td>
                    <td><input type="text" id="matkul" name="matkul" ></td>
                </tr>
                <tr>
                    <td><label for="nilai">Nilai</label></td>
                    <td>:</td>
                    <td><input type="number" id="nilai" name="nilai" min="0" max="100" ></td>
                </tr>
                <tr>
                    <td colspan="3"><button type="submit">Submit</button></td>
                </tr>
            </table>
        </form>
   

    <?php
    if (isset($_GET['nama']) && isset($_GET['nilai'])) {

        $kelas = trim($_GET['kelas']);
        $nama = trim($_GET['nama']);
        $matkul = trim($_GET['matkul']);
        $nilai = (int)$_GET['nilai'];
        $grade = ""; 

        if ($nilai >= 90) {
            $grade = "A";
        } elseif ($nilai >= 80) {
            $grade = "B";
        } elseif ($nilai >= 70) {
            $grade = "C";
        } else {
            $grade = "D"; 
        }
    
    ?>

    <table class="result-table">
        <caption>
            <b>Hasil Nilai </b>
        </caption>
        <tr>
            <td>1.</td>
            <td>Nama</td>
            <td><?php echo($nama); ?></td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Kelas</td>
            <td><?php echo($kelas); ?></td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Mata Kuliah</td>
            <td><?php echo($matkul); ?></td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Nilai</td>
            <td><?php echo($nilai); ?></td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Grade</td>
            <td><?php echo($grade); ?></td>
        </tr>
    </table>
   <?php
    } 
    ?>


</body>
</html>