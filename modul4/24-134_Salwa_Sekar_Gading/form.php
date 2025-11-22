<!-- VALIDASI-SIDE SEDERHANA -->
<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi Sederhana</title>
</head>
<body>
    <form method="post" action="processData.php">
        <h3>Form validasi server-side</h3>
        <label>Surname:</label>
        <input type="text" name="surname">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Form VALIDASI SELF-SUBMISSION</title>
</head>
<body>
    <form method="post" action="form.php">
        <h3>Form validasi server-side</h3>
        <label>Surname:</label>
        <input type="text" name="surname">
        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php
$errors = array();
if (isset($_POST['surname'])) {
    require 'validate.inc';
    validateName($errors, $_POST, 'surname');
    if ($errors) {
        echo '<h1>Invalid, correct the following errors:</h1>';
        foreach ($errors as $field => $error) {
            echo "$field $error<br/>";
        }
    } else {
        include 'form.inc';
        echo 'Form submitted successfully with no errors';
    }
} else {
    include 'form.inc';
}

$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'validate.inc';

    // validasi masing-masing field
    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');

    if ($errors) {
        echo '<h2>Invalid, correct the following errors:</h2>';
        foreach ($errors as $field => $error) {
            echo "$field $error<br/>";
        }
        include 'form.inc';
    } else {
        echo '<h2>Form submitted successfully with no errors!</h2>';
        echo '<ul>';
        echo '<li>Surname: ' . htmlspecialchars($_POST['surname']) . '</li>';
        echo '<li>Email: ' . htmlspecialchars($_POST['email']) . '</li>';
        echo '</ul>';
        include 'form.inc';
    }
} else {
    include 'form.inc';
}
?>

