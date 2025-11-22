<?php
require 'validate.inc';

$errors = array();
validateName($errors, $_POST, 'name');  

if ($errors) 
{ 
    echo 'Errors:<br/>';
    foreach ($errors as $field => $error)  
        echo "$field $error</br>";
} 
else 
    echo 'Data OK!';
?>