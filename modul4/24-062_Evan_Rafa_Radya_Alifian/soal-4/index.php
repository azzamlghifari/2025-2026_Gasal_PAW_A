<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-
scale=1.0"> 
  <title>Form Mahasiswa</title> 
</head> 
<body> 
  <h1>Form Mahasiswa</h1> 
  <form action="" method="post"> 
    <label for="nama"> 
      Nama:  
      <input type="text" name="nama" id="nama"> 
    </label><br><br> 
    <label for="nim"> 
      NIM:  
      <input type="text" name="nim" id="nim"> 
    </label><br><br> 
    <label for="email"> 
      Email:  
      <input type="email" name="email" id="email"> 
    </label><br><br> 
    <label for="password"> 
      Password:  
      <input type="password" name="password" id="password"> 
    </label><br><br> 
    <button type="submit">Kirim</button> 
  </form> 
  <hr> 
  <?php if ($_SERVER['REQUEST_METHOD'] == "POST"): ?> 
    <table border="1" cellpadding="10"> 
      <tr> 
        <td>Nama</td> 
        <td><?= $_POST["nama"] ?></td> 
      </tr> 
      <tr> 
        <td>NIM</td> 
        <td><?= $_POST["nim"] ?></td> 
      </tr>
      <tr> 
        <td>Email</td> 
        <td><?= $_POST["email"] ?></td> 
      </tr>
      <tr> 
        <td>Password</td> 
        <td><?= $_POST["password"] ?></td> 
      </tr>
    </table> 
  <?php endif ?> 
</body> 
</html>