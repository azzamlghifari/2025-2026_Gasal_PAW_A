<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="nilai"> masukan nilai :
            <input type="number" name="nilai" id="nilai" min="0" max="100">
        </label>
        <input type="submit" value="kirim">
    </form>
    <?php
    if (isset($_POST["nilai"])) {
        $nilai = $_POST["nilai"];
        if ($nilai < "50") {
            echo "kamu mendapat predikat E";
        } elseif ($nilai < "60") {
            echo "kamu mendapat predikat D";
        } elseif ($nilai < "70" ) {
            echo "kamu mendapat predikat C";
        }elseif ($nilai < "80") {
            echo "kamu mendapat predikat B";
        }else {
            echo "kamu mendapat predikat A";
        }
    }
    ?>
</body>

</html>