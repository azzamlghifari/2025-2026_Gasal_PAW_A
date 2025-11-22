<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tampilan.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br>

        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur"><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir"><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>