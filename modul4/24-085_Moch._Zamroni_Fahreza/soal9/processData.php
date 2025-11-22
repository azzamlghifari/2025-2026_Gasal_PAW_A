<?php
include 'validate.inc';

if(isset($_POST['surname']) && empty($errors)){
    echo "Form submitted succesfully with no errors";
}else{
    include 'form.inc';
}
?>