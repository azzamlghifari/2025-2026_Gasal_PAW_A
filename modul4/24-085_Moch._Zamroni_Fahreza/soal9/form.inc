<h2>Form Input Data</h2>
<form action="./processData.php" method="post">
  <label for="surname">Surname:</label><br />
  <input
    type="text"
    name="surname"
    id="surname"
    value="<?php if(isset($_POST['surname'])) echo $_POST['surname']; ?>"
  />
  <?php if(isset($errors['surname'])) echo $errors['surname']; ?>
  <br />
  <label for="email">Email:</label><br />
  <input
    type="text"
    name="email"
    id="email"
    value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"
  />
  <?php if(isset($errors['email'])) echo $errors['email']; ?>
  <br />
  <label for="password">Password:</label><br />
  <input
    type="text"
    name="password"
    id="password"
    value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"
  />
  <?php if(isset($errors['password'])) echo $errors['password']; ?>
  <br /><br />
  <input type="submit" value="Submit" />
</form>
