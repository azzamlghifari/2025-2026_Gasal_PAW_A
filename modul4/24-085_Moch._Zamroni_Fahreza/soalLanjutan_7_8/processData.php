<?php
include 'validate.inc';

if(isset($_POST['name']) && empty($errors)){
    foreach($_POST as $k => $v){
        echo $k . ": " . $v . "<br>";
    }
    echo "Form submitted succesfully with no errors";
}else{
    include 'form.inc';
}
?>