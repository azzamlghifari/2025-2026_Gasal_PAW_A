<h2>Form Input Data</h2>
<form action="./processData.php" method="post">
  <label for="surname">Surname:</label><br />
  <input
    type="text"
    name="surname"
    id="surname"
    value="<?php if(isset($_POST['surname'])) echo $_POST['surname']; ?>"
  />
  <br /><br />
  <input type="submit" value="Submit" />
</form>
