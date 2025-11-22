<?php
$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'validate.inc';
    
    validateName($errors, $_POST, 'surname');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');

    if ($errors) {
        echo '<h2>Invalid, correct the following errors:</h2>';
        foreach ($errors as $field => $error) {
            echo "<strong>$field</strong>: $error<br>";
        }
        echo "<hr>";
        include 'form.inc';
    } else {
        echo '<h2>Form submitted successfully with no errors!</h2>';
        echo '<p><strong>Surname:</strong> ' . htmlspecialchars($_POST['surname']) . '</p>';
        echo '<p><strong>Email:</strong> ' . htmlspecialchars($_POST['email']) . '</p>';
    }
} else {
    include 'form.inc';
}
?>