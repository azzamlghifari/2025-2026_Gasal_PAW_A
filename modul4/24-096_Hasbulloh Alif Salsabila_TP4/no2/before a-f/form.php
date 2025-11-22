<!DOCTYPE html>
<html>
<head>
    <title>Form Testing</title>
</head>
<body>
    <h2>Form Test</h2>
    <form action="form.php" method="POST">
        <label for="name">Nama Lengkap:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    $errors = array();
    
    if (isset($_POST['name'])) {
        require 'validate.inc';
        
        validateName($errors, $_POST, 'name');
        
        if ($errors) {
            echo '<h1>GAGAL INPUT</h1>';
            foreach ($errors as $field => $error) {
                echo "$field $error</br>";
            }
            
            include 'form.inc';
        } else {
            echo '<h1>Berhasil Input</h1>';
        }
    } else {
        
        include 'form.inc';
    }
    ?>
</body>
</html>