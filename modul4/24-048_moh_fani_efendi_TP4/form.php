<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$errors = array();

if (isset($_POST['surname'])) {
    require 'validate.inc';
    validateName($errors, $_POST, 'surname');

    if ($errors) {
        echo '<h1>Invalid, correct the following errors:</h1>';
        foreach ($errors as $field => $error)
            echo "$field $error<br/>";
        include 'form.inc';
    } else {
        include 'form.inc';
        echo '<p>Form submitted successfully with no errors.</p>';
    }
} else {
    include 'form.inc';
}
?>
