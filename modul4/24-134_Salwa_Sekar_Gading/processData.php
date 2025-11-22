<?php
// //langkah 2
// require 'validate.inc';
// if (validateName($_POST, 'surname')) {
//     echo 'Data OK!';
// } else {
//     echo 'Data invalid!';
// }


//langkah 5 
require 'validate.inc';
$errors = array();
validateName($errors, $_POST, 'surname');
if ($errors) {
    echo 'Errors:<br/>';
    foreach ($errors as $field => $error) {
        echo "$field $error<br/>";
    }
} else {
    echo 'Data OK!';
}
?>