<form action="form1.php" method="POST">

    <br>
        <label for="given_name">Given Name :</label>
        <input type="text" id="given_name" name="given_name" 
               value="<?php if (isset($_POST['given_name'])) echo $_POST['given_name']; ?>">
        
        <?php showError($errors, 'given_name'); ?>
    <br>

    <br>
        <label for="surname">Surname :</label>
        <input type="text" id="surname" name="surname" 
               value="<?php if (isset($_POST['surname'])) echo $_POST['surname']; ?>">
        
        <?php showError($errors, 'surname'); ?>
    <br>
    <br>
    <input type="submit" value="Submit">
</form>