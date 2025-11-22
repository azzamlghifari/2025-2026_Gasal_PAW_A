<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>
<form action="processForm.php" method="POST">

  <label>Nama:</label>
  <input type="text" name="nama" 
  value="<?php if(isset($_POST['nama'])) echo $_POST['nama']; ?>"><br><br>

  <label>NIM:</label>
  <input type="text" name="nim" 
  value="<?php if(isset($_POST['nim'])) echo $_POST['nim']; ?>"><br><br>

  <label>Email:</label>
  <input type="email" name="email" 
  value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br><br>

  <label>Password:</label>
  <input type="password" name="password"><br><br>

  <label>Tanggal Lahir:</label>
  <input type="date" name="tgl_lahir" 
  value="<?php if(isset($_POST['tgl_lahir'])) echo $_POST['tgl_lahir']; ?>"><br><br>

  <label>IPK:</label>
  <input type="text" name="ipk" 
  value="<?php if(isset($_POST['ipk'])) echo $_POST['ipk']; ?>"><br><br>

  <input type="submit" value="Kirim">
  <input type="reset" value="Reset">
</form>

</body>
</html>