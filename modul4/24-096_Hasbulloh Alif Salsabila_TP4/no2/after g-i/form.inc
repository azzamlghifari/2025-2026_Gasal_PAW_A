<form action="form.php" method="POST">
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" value="<?php 
            if (isset($_POST['name']))  
        ?>">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php 
            if (isset($_POST['email']))  
        ?>">      
        <?php
        if (isset($errors['name'])) {
            echo 'GAGAL ERROR * ' . $errors['name'];
        }
        ?>
        <?php
        if (isset($errors['email'])) {
            echo 'GAGAL ERROR * ' . $errors['email'];
        }
        ?><br>
    <input type="submit" value="Submit">
</form>