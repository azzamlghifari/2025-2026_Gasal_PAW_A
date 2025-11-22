<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP4</title>
</head>
<body>
<?php

$errors = array(); 
require 'validate1.inc'; 

if (isset($_POST['surname'])) {

    validateName($errors, $_POST, 'given_name'); 
    validateName($errors, $_POST, 'surname'); 

    if ($errors) {
        // JIKA ADA ERROR
        echo '<h1>Invalid, correct the following errors:</h1>';
        
        include 'form1.inc'; //
    } else {
        // JIKA TIDAK ADA ERROR
        echo 'Form submitted successfully with no errors'; 
    }
} else {
    include 'form1.inc';
}
?>
</body>
</html>